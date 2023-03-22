const { createApp } = Vue

createApp({
	data() {
		return {
			title: 'To-do list',
			tasks: [],
			newTask: '',
		}
	},
	methods: {
		addTask() {
			$data = { task: this.newTask }

			axios
				.post('./server.php', $data, {
					headers: {'Content-Type': 'multipart/form-data',},
				})
				.then((res) => {
					this.tasks = res.data
					this.newTask = ''
				})
				.catch((err) => {
					console.log(err)
				})
		},
		fetchTodoList() {
			axios
				.get('./server.php')
				.then((res) => {
					console.log(res.data)
					this.tasks = res.data
				})
				.catch((err) => {
					console.log(err)
					this.tasks = []
				})
		},
	},
	mounted() {
		this.fetchTodoList()
	},
}).mount('#app')