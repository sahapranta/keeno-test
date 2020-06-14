<template>
  <div class="w-100 product-card" v-if="product">
    <a :href="`/products/${product.slug}`">
      <img
        :src="product.image"
        width="100%"
        :height="big?'380':'150'"
        @error="$event.target.src = '/images/dummy.jpg'"
      />
    </a>
    <div class="d-flex justify-content-between align-items-start mt-1">
      <div class="info">
        <h5 class="text-uppercase">
          <a :href="`/products/${product.slug}`">{{product.title.substr(0,16)}}</a>
        </h5>
        <p>$ {{product.price}}</p>
      </div>
      <rate :rating="product.rating" :read-only="true" :show-rating="false" :star-size="18" />
    </div>
  </div>
</template>

<script>
export default {
  name: "ProductCard",
  props: {
    big: String,
    product: {
      type: Object
    }
  },
  data() {
    return {
      show: false
    };
  }
};
</script>