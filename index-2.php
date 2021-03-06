
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <link rel="stylesheet" href="dist/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <title>Document</title>
</head>
<body>

    <div class="container-fluid">

        <main id="app">
            <div id="main_section">
                <section class="left_menu">
                    <img class="logo_img" src="public/img/Peach_logo.png" alt="">

                    <ul>
                        <li>
                            <a href="#">
                                Podcasts
                            </a>
                        </li>
                        <li>
                            <a href="#" class="selected_menu">
                                Top Lists
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Discover
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Music for family
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Playlists
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Favourites
                            </a>
                        </li>
                    </ul>
                </section>
                <section class="albums_section">
                    <div class="top_nav container">
                        <a href="#">
                            <i class="fas fa-search"></i>
                        </a>

                        <input class="search_bar" type="text" placeholder="Search for artists, songs & albums...">
                        <a href="#">
                            <i class="far fa-bell"></i>
                        </a>
                        <a href="#">
                            <img class="profile_img" src="public/img/profile.pic.jpg" alt="">
                        </a>
                    </div>
                    
                    <div class="bottom_section container">
                        <div class="recent_album_section">
                            <h1>Recently Added</h1>

                            <div class="select-contain">
                                <select name="select-genre" id="select-genre" 
                                v-model="userInput">
                                    <option value="">All</option>
                                    <option 
                                    v-for="genre in genreList"
                                    :value="genre"> {{ genre }} </option>
                                </select>

                            </div>
                        </div>

                        <div class="albums_container row">

                            <div class="album"
                            v-for="album in albumsList">
                                <a class="cover_link" href="#">
                                    <!-- Copertina -->
                                    <img :src="album.poster" alt="">
                                    <div class="overlay">
                                        <i class="fas fa-play-circle"></i>
                                    </div>
                                </a>
                                <div class="song_title">
                                    <!-- Titolo Canzone -->
                                    <h3>{{ album.title }}</h3>

                                    <!-- Autore -->
                                    <a href="#">
                                        <h4>{{ album.author }}</h4>
                                    </a>
                                    <!-- Anno -->
                                    <span class="date">{{ album.year }}</span>
                                </div>
                            </div>
                            
                        </div>

                    </div>

                </section>

            </div>

        </main>

    </div>

    <script src="scripts/app.js"></script>
</body>
</html>