<template>
  <div>
    <div v-swiper:swiperTop="swiperOption">
      <div class="swiper-wrapper">
        <div class="swiper-slide" :key="i" v-for="(img, i) in images">
          <div class="swiper-zoom-container">
            <img
              :src="img"
              class="img-fluid"
              width="400"
              height="400"
              @error="$event.target.src = '/images/dummy.jpg'"
            />
          </div>
        </div>
      </div>
      <!-- <div class="swiper-pagination"></div> -->
      <div class="swiper-button-prev swiper-button-white"></div>
      <div class="swiper-button-next swiper-button-white"></div>
    </div>
    <div v-swiper:swiperThumbs="swiperOptionThumbs" @ready="onReady" class="gallery-thumbs">
      <div class="swiper-wrapper">
        <div class="swiper-slide" :key="i" v-for="(img, i) in images">
          <div class="swiper-zoom-container">
            <img
              :src="img"
              class="img-fluid"
              width="80"
              height="80"
              @error="$event.target.src = '/images/dummy.jpg'"
            />
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</template>

<script>
import { Swiper, SwiperSlide, directive } from "vue-awesome-swiper";
import "swiper/css/swiper.css";
export default {
  name: "ProductViewSlider",
  props: ["product"],
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
        loop: true,
        loopedSlides: 5,
        spaceBetween: 30,
        centeredSlides: true,
        effect: "fade",
        zoom: {
          maxRatio: 5
        },
        autoplay: {
          delay: 6000,
          disableOnInteraction: false
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        }
      },
      swiperOptionThumbs: {
        loop: true,
        loopedSlides: 5,
        spaceBetween: 20,
        centeredSlides: true,
        slidesPerView: 5,
        touchRatio: 0.2,
        slideToClickedSlide: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        }
      }
    };
  },
  computed: {
    images() {
      return JSON.parse(this.product.images_url);
    }
  },
  methods: {
    onReady() {
      const swiperTop = this.swiperTop;
      const swiperThumbs = this.swiperThumbs;
      swiperTop.controller.control = swiperThumbs;
      swiperThumbs.controller.control = swiperTop;
    }
  }
};
</script>

<style scoped>
.swiper-slide {
  display: flex;
  align-items: center;
}
.gallery-thumbs {
  height: 100px;
}
</style>