

<template>
  <div>
      <h4>Descuento actual:  <strong> {{descuento}}% </strong> </h4>
    <div class="d-flex row justify-content-evenly border">
      <div
        class="border tarjeta mx-5"
        v-for="precio in precios"
        :key="precio.id"
      >
        <div>
          <h1>Plan {{ precio.id }}</h1>
        </div>

        <div class="">
          <h3>{{ getPrecio(precio.precio) }}</h3>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { precios } from "../preciosDB";
import DescuentoComponent from "./DescuentoComponent";
import { mapState } from "vuex";

export default {

 
  mounted() {
    this.$store.dispatch("descuentoFromDataBase");
  },
 
  data() {
    return {
      precios,
    };
  },

  components: {
    DescuentoComponent,
  },

  computed: mapState({
    descuento: (state) => state.descuento * 0.01,
  }),

  methods: {
    getPrecio(precio) {
      return  (precio - (precio * this.descuento)).toFixed(2); 
    },
  },
};
</script>

<style>
.tarjeta {
  width: 200px;
  height: 200px;
}
</style>