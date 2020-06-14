<template>
  <div v-swiper:mySwiper="swiperOption">
    <div class="swiper-wrapper">
      <div class="swiper-slide" :key="i" v-for="(product, i) in featuredProducts">
        <div class="text-center">
          <a :href="`/products/${product.slug}`">
            <img
              :src="product.image"
              class="img-fluid"
              width="400"
              height="400"
              @error="$event.target.src = '/images/dummy.jpg'"
            />
          </a>
          <h3 class="mt-2">{{product.title}}</h3>
          <h5>$ {{product.price}}</h5>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</template>

<script>
import { Swiper, SwiperSlide, directive } from "vue-awesome-swiper";
import "swiper/css/swiper.css";
export default {
  props: ["products"],
  components: {
    Swiper,
    SwiperSlide
  },
  directives: {
    swiper: directive
  },
  data() {
    return {
      banners: [],
      swiperOption: {
        slidesPerView: 2,
        spaceBetween: 20,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        breakpoints: {
          1024: {
            slidesPerView: 2,
            spaceBetween: 20
          },
          320: {
            slidesPerView: 1,
            spaceBetween: 10
          }
        }
      }
    };
  },
  computed: {
    featuredProducts() {
      return this.products
        .filter(p => p.is_featured == 1)
        .map(b => ({
          ...b,
          image: JSON.parse(b.images_url)[
            Math.floor(Math.random() * JSON.parse(b.images_url).length)
          ]
        }));
    }
  }
};
</script>