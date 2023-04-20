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
    addItem() {
        const data = {
            itemToAdd: this.toDoItem
        };


        axios.post("server.php", data,
        {
            headers: { 'Content-Type': 'multipart/form-data'}
        }
        ).then(response => {
            this.toDoList = response.data;
            this.toDoItem = '';
        });
    }
  },
  mounted() {
    this.reader();
  }
}).mount('#app')