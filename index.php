<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- Axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- VueJs -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <title>Tutta colpa di Json</title>
</head>
<body>
  <div id="app">

    <header>
      <div class="container" id="header-container">
        <div class="header-left">
          <img src="https://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
        </div>
      </div>
    </header>

    <main>
      <div class="container">
        <div id="discs-container">


          <div v-for="(disc, index) in discList" :key="index" class="disc">
            <img :src="disc.poster" :alt="disc.title">
            <h3>{{ disc.title }}</h3>
            <small>{{ disc.author }}</small> 
          </div>

        </div>
      </div>
    </main>
  </div>
  <script src="./js/script.js"></script>
</body>
</html>