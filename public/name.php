<?php
require __DIR__ . '/includes.php';

try {
    $baseUrl = API_BASE_URL;

    if(isset($_GET['n'])){

        $name = $_GET['n'];

        // Get name data
        $data = getName($baseUrl, $name)['data'];

        $crew = $data['crew'];
        $trivia = $data['trivia'];

        echo mainHeading("$name (namn)");
        if(!empty($crew)){
            echo "<h2>Medverkan</h2>";
            echo "<ul>";
            foreach($crew as $item){
                $movie = $item['movie_title'];
                $category = $item['category'];
                $cat = " ($category)";
                $role_name = $item['role_name'];
                $role = '';
                if($role_name){
                    $role = " – $role_name";
                }
                echo "<li>$movie$cat$role</li>";
            }
            echo "</ul>";
        }
        if(!empty($trivia)){
            echo "<h2>Visste du?</h2>";
            echo "<ul>";
            foreach($trivia as $item){
                $movie = $item['movie_title'];
                $md = "";
                if($item['en']){
                    $md = $item['en'];
                }else{
                    $md = $item['sv'];
                }
                $html = $md_converter->convert($md);
                echo "<li>$movie:<br>$html</li>";
            }
            echo "</ul>";
        }

    }else{
        echo "Inget namn angett";
    }

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

require __DIR__ . '/html-end.php';
