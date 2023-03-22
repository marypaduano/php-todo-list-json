<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>to do list</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
  <div id="app">
    <section>
      <div class="container pt-3">
        <h1 class="text-center text-uppercase">{{ title }}</h1>
      </div>
      <div class="container py-3">
        <input @keyup.enter="addTask" v-model="newTask" class="form-control" type="text" name="task" placeholder="Aggiungi a lista 'cose da fare'" aria-label="default input example">
        <h3 class="text-center py-3">Lista delle cose da fare:</h3>
        <ul class="list-group d-flex justify-content-between">
          <li v-for="task in tasks" class="list-group-item d-flex justify-content-between text-uppercase">
            {{ task }}
            <button class="btn btn-primary">Done</button>
          </li>
        </ul>
      </div>
    </section>
  </div>
  <script src="./app.js"></script>
</body>
</html>