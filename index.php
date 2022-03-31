<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <header>
        <figure>
            <img src="./logo.png" alt="">
        </figure>
    </header>

    <main class="container">
        <div class="container-main">
            <div class="search-bar">
                <select v-model="selectGenre" name="search-genre" id="search-genre">
                    <option value="">All</option>
                    <option value="Rock">Rock</option>
                    <option value="Pop">Pop</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Metal">Metal</option>
                    <!-- <option v-for="(genre, i) in genres" :key=i value="i">{{genre[i]}}</option> -->
                </select>
            </div>

            <div class="disc-wrapper">
                <div class="card">  
                    <img :src="song.poster" alt="">
                    <h4 class="title">{{song.title}}</h4>
                    <p class="artist">{{song.author}}</p>
                    <p class="year">{{song.year}}</p>
                </div>
            </div>
        </div>
    </main>

    
</body>
</html>