const { createApp } = Vue
    
    createApp({
        data() {
            return {
                tasks: [],
                URL: "",
            }
        }
    }).mount('#app')