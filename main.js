const { createApp } = Vue

createApp({
  data() {
    return {
      toDoList: [],
      toDoItem: ""
    }
  },
  methods: {
    reader() {
        axios.get("server.php")
        .then(response => {
            this.toDoList = response.data
        })
    },
  },
  mounted() {
    this.reader();
  }
}).mount('#app')