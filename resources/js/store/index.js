
export default {

	state: {
		descuento:0,
		hello: 'hola mundo',
		usuarios:[],
		editMode:false,
		usuarioSeleccionado: {
			index:'',
			name:'',
			email:'',
			id:''
		}
	},
	getters: {

		getUsuarios(state){
			return state.usuarios;
		},

		getDescuento(state) {
			return state.descuento;
		},
	},

	actions: {
		descuentoFromDataBase(context) {
			axios.get("/precios").then((res) => {
				context.commit("obtenerDescuentos", res.data.totalDescuento)
			}).catch(() => {
				console.log("Erro al buscar descuento en la base de datos")
			})
		},

		usuariosFromDatabase(context){
			axios.get('/admin').
			then(res =>{
				context.commit("obtenerUsuarios", res.data);
			})
			.catch(()=>{
				console.log('error al buscar usuarios en la base de datos');
			})
		}
	},


	mutations: {
		spliceUsers(state,indice){
			state.usuarios.splice(indice,1);
		},
		editPanel(){
			this.state.editMode = true;
		},
		obtenerDescuentos(state, data) {
			return state.descuento = data;
		},
		obtenerUsuarios(state,data){
			return state.usuarios = data;
		}
	
	}
}