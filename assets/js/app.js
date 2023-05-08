const { createApp } = Vue
    
    createApp({
        data() {
            return {
                tasks: [],
                URL: "list.php",
            }
        },
        mounted() {
            axios.get(this.URL)
            .then(response => {
              this.tasks = response.data;
            })
            .catch(error => {
              console.error(error.message);
            })
          },
    }).mount('#app')