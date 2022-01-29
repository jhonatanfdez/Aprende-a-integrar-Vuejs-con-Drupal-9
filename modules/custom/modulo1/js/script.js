const Counter = {
    data() {
        return {
            counter: 'Mensaje'
        }
    },
    methods: {
        mostrarMensaje() {


            Swal.fire({
                title: this.counter,               
                icon: 'success',                
                confirmButtonText: 'Ok',
                customClass: {
                    confirmButton: 'btn btn-success',                    
                },
                buttonsStyling: false
              })
        }
    }
}

Vue.createApp(Counter).mount('#counter'); 