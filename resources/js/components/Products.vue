<template>
  <div>
    <div class="w-100 d-flex px-4 py-2 justify-content-center">
      <div v-for="c in categories" :key="c.id" class="mx-1">
        <a
          href="#"
          class="btn btn-sm btn-secondary"
          @click.prevent="changeCategory(c.name)"
        >{{c.name}}</a>
      </div>
    </div>
    <div class="row p-4">
      <div class="col-md-4">
        <product-card big="true" :product="largeProduct" />
      </div>
      <div class="col-md-8">
        <div class="row ml-2">
          <div class="col-md-6" v-for="product in showProducts" :key="product.id">
            <product-card :product="product" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["categories", "products"],
  data() {
    return {
      filter: ""
    };
  },
  methods: {
    changeCategory(value) {
      this.filter = value;
    }
  },
  computed: {
    filteredProduct() {
      let products = this.products;
      if (this.filter) {
        products = products.filter(p => p.category.name === this.filter);
      }
      return products.map(b => ({
        ...b,
        image: JSON.parse(b.images_url)[
          Math.floor(Math.random() * JSON.parse(b.images_url).length)
        ]
      }));
    },
    largeProduct() {
      return this.filteredProduct[
        Math.floor(Math.random() * this.filteredProduct.length)
      ];
    },
    showProducts() {
      return this.filteredProduct
        .filter(p => p.id !== this.largeProduct.id)
        .slice(0, 4);
    }
  }
};
</script>