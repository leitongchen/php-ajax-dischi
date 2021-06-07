<?php 

// "poster" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
// "title" => "New Jersey",
// "author" => "Bon Jovi",
// "genre" => "Rock",
// "year" => "1988"

$discList = require "./db/disc.php";


function renderDiscs($disc_list) 
{
    $to_return = [];

    foreach ($disc_list as $disc) {
       $poster = $disc["poster"];
       $title = $disc["title"];
       $author = $disc["author"];
       $genre = $disc["genre"];
       $year = $disc["year"];
        
        $to_return[] = "<div class='album'>";

            $to_return[] = "<a class='cover_link' href='#'>";

                $to_return[] = "<img src='$poster' alt='album music poster'>";

                $to_return[] = "<div class='overlay'>";
                    $to_return[] = "<i class='fas fa-play-circle'></i>";
                $to_return[] = "</div>";
            
            $to_return[] = "</a>";

            $to_return[] = "<div class='song_title'>";

                $to_return[] = "<h3>$title</h3>";
                $to_return[] = "<h4>$author</h4>";
                $to_return[] = "<span class='date'>$genre</span>";
                $to_return[] = "<span class='date'>$year</span>";

            $to_return[] = "</div>";

        $to_return[] = "</div>";
    };

    return implode("\n", $to_return);
}

// echo renderDiscs($discList); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="dist/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.csshttps://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Music</title>
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
                                <option value="all">All</option>
                                <option value="metal">Metal</option>
                                <option value="pop">Pop</option>
                                
                            </select>

                        </div>
                    </div>

                    <div class="albums_container row">

                        <?php  echo renderDiscs($discList) ?>

                    </div>

                </div>

            </section>

        </div>

    </main>

</div>
 
</body>
</html>