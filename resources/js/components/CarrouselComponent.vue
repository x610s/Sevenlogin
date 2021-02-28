
<template>
  <carousel
    :nav="false"
    :autoplay="false"
    :autoplaySpeed=1000
    class="carrusel  mt-2 py-2"
    :items="7"
    :responsive="{
      0: { items: 3 },
      768: { items: 5 },
      991: { items: 7 },
    }"
  >
    <div v-for="cliente in clientes" :key="cliente.index" class="contenedor mb-3 p-2">
      <div v-for="(i,index) in 2" :key="i.index">
       <img  class="rounded my-2" v-bind:src="'/assets/' + cliente[index].src"  v-if="cliente[index].src != 'null' " /> 
       </div>
    </div>
  </carousel>
</template>

<script>
import carousel from "vue-owl-carousel";
import { clientes } from "../clientesDB.js";
export default {
  components: { carousel },
  data() {
    return {
      clientes,
    };
  },
};
</script>

<style scoped>
.contenedor {
  width: 12.5rem;
}
img {
  height: 139px;
  transition: all 300ms;
}
img:hover {
  cursor: pointer;
  transform: scale(1.1);
}
</style>
