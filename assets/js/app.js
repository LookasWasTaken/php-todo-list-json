const { createApp } = Vue;

createApp({
  data() {
    return {
      tasks: [],
      URL: "list.php",
      URL_ADD: "post.php",
      URL_DELETE: "delete.php",
      URL_UPDATE: "update.php",
      URL_REMOVE: "remove.php",
      newTasks: "",
    };
  },
  methods: {
    addTask() {
      const data = {
        task: this.newTasks
      }
        axios
          .post(this.URL_ADD, data, {
            headers: { "Content-Type": "multipart/form-data" },
          })
          .then((response) => {
            this.tasks = response.data;
            this.newTasks = ""
          })
          .catch((error) => {
            console.error(error.message);
          });
    },
    removeTask(index) {
      const data = {
        index: index
      }
      axios
        .post(this.URL_DELETE, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          this.tasks = response.data;
        })
        .catch((error) => {
          console.error(error.message);
        });
    },
    updateStatus(index) {
      const data = {
        index: index
      }
      axios
        .post(this.URL_UPDATE, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          this.tasks = response.data;
        })
        .catch((error) => {
          console.error(error.message);
        });
    },
    removeAll(){
      axios
      .post(this.URL_REMOVE)
      .then((response) => {
        this.tasks = response.data;
      })
      .catch((error) => {
        console.error(error.message);
      });
    }
  },
  mounted() {
    axios
      .get(this.URL)
      .then((response) => {
        this.tasks = response.data;
        console.log(response);
      })
      .catch((error) => {
        console.error(error.message);
      });
  },
}).mount("#app");
