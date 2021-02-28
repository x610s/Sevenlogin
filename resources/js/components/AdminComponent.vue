<template>
  <div>
<!-- 
    <table class="table mt-2">
      <thead>
      
        <th>Nombre</th>
        <th>Email</th>

        <th>Opciones</th>
      </thead>
      <tbody>
        <tr v-for="(usuario,index) in usuarios" :key="usuario.id">
          <td>
         {{ usuario.name }}
          </td>
          <td>
            {{usuario.email}}
          </td>
          <td>
            <button class="btn btn-primary mr-1" @click="getUser(usuario,index)"> Editar </button>
            <button class="btn btn-danger" @click="eliminar(usuario.id,index)">X</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
 -->
    <ChartBasic/>
  </div>
</template>

<script>
import { mapMutations, mapState } from "vuex";
import ChartBasic from './chartBasic.vue';
export default {
  mounted() {
    this.$store.dispatch("usuariosFromDatabase");
  },

  computed: mapState([
    'usuarios','usuarioSeleccionado'
  ]),
  methods:{
    getUser(data,index){
      this.usuarioSeleccionado.index = index;
      this.usuarioSeleccionado.id= data.id;
      this.usuarioSeleccionado.name= data.name;
      this.usuarioSeleccionado.email= data.email;
      this.editPanel(); 
    },
      eliminar(id,index){
        console.log(index,'C')
         this.spliceUsers(index); 
         axios.delete(`/admin/${id}`)
        .then(()=>{
         
          this.$swal({
            icon: "success",
            title: "Usuario eliminado exitosamente",
            text: `Listado actualizado`,
          });
        }) 
      }
    ,
    ...mapMutations([
      'editPanel','spliceUsers'
    ])
  },
  components:{
    ChartBasic
  }
};
</script>

