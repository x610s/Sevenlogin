<template>
  <div>
    <form v-if="editMode" class="form-group" @submit.prevent="save">
      <h4 class="mt-4">Editar usuario</h4>
      <input
        type="text"
        name="name"
        placeholder="Nombre"
        v-model="usuarioSeleccionado.name"
        class="form-control my-2"
      />
      <input
        type="text"
        name="name"
        placeholder="Email"
        v-model="usuarioSeleccionado.email"
        class="form-control my-2"
      />
      <button class="btn btn-primary" type="submit">Guardar cambios</button>
    </form>
  </div>
</template>

<script>
import { mapState } from "vuex";
export default {
  computed: mapState(["editMode", "usuarioSeleccionado",'usuarios']),
  methods: {
    save() {
      axios
        .put(`/admin/${this.usuarioSeleccionado.id}`, this.usuarioSeleccionado)
        .then((resp) => {
            this.usuarios[this.usuarioSeleccionado.index].name = this.usuarioSeleccionado.name;
            this.usuarios[this.usuarioSeleccionado.index].email = this.usuarioSeleccionado.email;
          this.$swal({
            icon: "success",
            title: "Modificación exitosa",
            text: `${this.usuarioSeleccionado.name} modificado correctamente`,
          });


        })
        .catch(() => {
          this.$swal({
            icon: "error",
            title: "Error",
            text: `${this.usuarioSeleccionado.name} error`,
          });
        });
    },
  },
};
</script>