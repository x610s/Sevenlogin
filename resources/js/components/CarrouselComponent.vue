<template>
 <!--  <carousel class="mt-2 p-4" perPage=4 
       :navigationEnabled="true"
      paginationActiveColor="#333">
    <slide
      class="slide justify-content-center"
      v-for="(cliente, index) of listaCliente"
      :key="index"
> 
       <img  v-bind:src="'/assets/' + cliente.src"  /> 
       <a href="#" class=" btn ">Ir a la pagina</a>
    </slide>
  </carousel> -->
  <div> 
    asdklaklñsdklñ
  </div>
</template>

<script>
/* import { clientes } from "../clientesDB";
import { Carousel, Slide } from "vue-carousel";
export default {
  name: "CarrouselComponent",

  data() {
    return {
      listaCliente: clientes,
    };
  },
  components: {
    Carousel,
    Slide,
  },
}; */


import { clientes } from "../clientesDB.js";
export default {
  data() {
    return {
      clientes:'hola',
    };
  },
};
</script>

<style scoped>
/* img {
  width: 250px;
  height: 200px;
}
.btn{
  margin-top: 20px;
}
.slide {

  text-align: center !important;
} */
</style>