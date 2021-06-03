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
        
       $to_return[] = "<div class='album-container'>";

        $to_return[] = "<div class='poster-container'><img src='$poster' alt='album music poster'></div>";

        $to_return[] = "<h6>$title</h6>";
        $to_return[] = "<p>$author</p>";
        $to_return[] = "<span>$genre</span>";
        $to_return[] = "<span class='date'>$year</span>";

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

    <title>Music</title>
</head>
<body>
    <header>
    </header>

    <main>
        <div class="container">
        
            <div class="row">
                <?php  echo renderDiscs($discList) ?>
            </div>
        
        </div>
    </main>

    <footer>
    </footer>
    
</body>
</html>