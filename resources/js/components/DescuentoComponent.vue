<template>
  <div style="width: 200px" class="my-5">
    
    <input class="form-control" type="number" min="0"  v-model="$store.state.descuento" />
    <button class="btn btn-primary" @click="cambiarDescuento" v-on:keyup.enter="cambiarDescuento">
        Guardar
    </button>
     

  </div>
</template>

<script>
import { mapState } from 'vuex'

export default {

  computed: mapState({
    descuento: (state) => state.descuento,
  }),

  methods:{
    cambiarDescuento(){
     const  nuevoDescuento = {
       totalDescuento : this.descuento
     }
       axios.put(`/precios/${1}`,nuevoDescuento).
      then(resp => {
        console.log(`Estatus = ${resp.status}`)
      }); 

    } 

  }


};
</script>