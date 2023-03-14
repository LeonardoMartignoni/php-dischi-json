<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dischi Json</title>

  <!-- Axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <!-- Vue JS -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <!-- Vue App -->
  <script src="./js/app.js" defer></script>
</head>
<body>
  <div id="app">
    <ul v-for="disk in disks">
      <li>{{disk.title}}</li>
      <li>{{disk.author}}</li>
      <li>{{disk.year}}</li>
      <li>{{disk.genre}}</li>
    </ul>
  </div>
</body>
</html>