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
            this.toDoList = response.data;
        })
    },
    addItem() {
        const data = {
            itemToAdd: {
                            "action": this.toDoItem,
                            "value": false
                        }
        };


        axios.post("server.php", data,
        {
            headers: { 'Content-Type': 'multipart/form-data'}
        }
        ).then(response => {
            this.toDoList = response.data;
            this.toDoItem = '';
        });
    },
    updValue(index) {
      const data = {
            indexValue: index
        };


        axios.post("server.php", data,
        {
            headers: { 'Content-Type': 'multipart/form-data'}
        }
        ).then(response => {
            this.toDoList = response.data;
            this.toDoItem = '';
        });
    },
    deleateAction(index) {
      const data = {
        indexValueToDeleate: index
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


/*
if (this.toDoList[index].value == true) {
  this.toDoList[index].value = false;
} else {
  this.toDoList[index].value = true;
}
*/