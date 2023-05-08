const { createApp } = Vue;

createApp({
  data() {
    return {
      tasks: [],
      URL: "list.php",
      URL2: "post.php",
      newTasks: "",
    };
  },
  methods: {
    addTask() {
      this.tasks.push({
        task: this.newTasks,
        done: false,
      });
      (this.newTasks = ""),
        axios
        .post(this.URL2, this.tasks,
        {
          headers: { "Content-Type": "multipart/form-data" },
        })
          .then((response) => {
            this.tasks = response.data;
          })
          .catch((error) => {
            console.error(error.message);
          });
    },
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
