<?php
echo "<!DOCTYPE html>";
echo "<html lang=\"sv\">";
echo "<head>";
echo "<meta charset=\"utf-8\">";
echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
echo "<link rel=\"stylesheet\" href=\"barebones.css\">";
echo "</head>";
echo "<body>";

// Länk för tillgänglighet
echo "<a class=\"skip-link\" href=\"#main-content\">Skip to main content</a>";

// Sidhuvud
echo "<header id=\"header\">";
echo "<nav>";
echo "<ul>";
echo "<li><a href=\"movies.php\">Alla betygsatta</a></li>";
echo "<li><a href=\"reviews.php\">Recensioner</a></li>";
echo "</ul>";
echo "</nav>";
echo "</header>";

// Navigeringsmojäng
echo "<div class=\"widget left\" id=\"navigation-widget\">";
// Här ska det så småningom vara en mojäng för att snabbt navigera till kapitel, sektioner etc.
echo "</div>";

// Menymojäng
echo "<label for=\"menu-widget-button\" class=\"widget-label\" id=\"menu-widget-label\">Meny</label>";
echo "<div class=\"widget right\" id=\"menu-widget\">";
echo "<button popovertarget=\"menu-main\" class=\"button\" id=\"menu-widget-button\" title=\"Meny\">";
echo "<img class=\"circle\" alt=\"Meny\" src=\"https://svenusling.jlxli.eu/assets/logo.jpg\">";
echo "</button>";
echo "</div>";

// Huvudmeny
echo "<nav popover class=\"main menu\" id=\"menu-main\">";
echo "<div class=\"mobile-menu-navigation\">";
echo "<button popovertargetaction=\"hide\" popovertarget=\"menu-main\"></button>";
echo "</div>";
echo "<div class=\"content\">";
echo "<form action=\"search.php\" method=\"get\">";
$prefilled_value = $prefilled ?? "";
echo "<input autofocus type=\"search\" size=\"12\" id=\"menu-search-input\" required name=\"query\" value=\"$prefilled_value\">";
echo "<input type=\"submit\" value=\"Sök\">";
echo "</form>";
echo "<ul>";
echo "<li><a href=\"movies.php\" data-moreinfo=\"alla\">Betygsatta</a>";
echo "<ul>";
echo "<li><button popovertarget=\"menu-movies-type\" class=\"button\" id=\"menu-movies-type-button\">Efter typ</button></li>";
echo "<li><button popovertarget=\"menu-movies-rating\" class=\"button\" id=\"menu-movies-rating-button\">Efter betyg</button></li>";
echo "<li><button popovertarget=\"menu-movies-year\" class=\"button\" id=\"menu-movies-year-button\">Efter år</button></li>";
echo "<li><button popovertarget=\"menu-movies-genre\" class=\"button\" id=\"menu-movies-genre-button\">Efter genre</button></li>";
echo "<li><a href=\"reviews.php\">Recensioner</a></li>";
echo "</ul>";
echo "</li>";
echo "<li><a href=\"persons.php\" data-moreinfo=\"alla\">Viktiga personer</a>";
echo "<ul>";
echo "<li><button popovertarget=\"menu-persons-type\" class=\"button\" id=\"menu-persons-type-button\">Efter typ</button></li>";
echo "<li><button popovertarget=\"menu-persons-relations\" class=\"button\" id=\"menu-persons-relations-button\">Efter relation</button></li>";
echo "</ul>";
echo "</li>";
echo "<li><a href=\"./\">Feed</a>";
echo "<ul>";
echo "<li><a href=\"./#latest\">Senast sedda</a></li>";
echo "<li><a href=\"./#videos\">Videorecensioner</a></li>";
echo "</ul>";
echo "</li>";
echo "</ul>";
echo "</div>";
echo "</nav>";
// Undermeny filmer efter typ
echo "<nav popover class=\"sub menu movies type\" id=\"menu-movies-type\">";
echo "<div class=\"mobile-menu-navigation\">";
echo "<button popovertargetaction=\"hide\" popovertarget=\"menu-movies-type\" id=\"back-menu-movies-type\"></button>";
echo "<label for=\"back-menu-movies-type\">Filtrera efter typ</label>";
echo "<button popovertargetaction=\"hide\" popovertarget=\"menu-main\"></button>";
echo "</div>";
echo "<ul>";
echo "<li><a href=\"films.php\">Filmer</a></li>";
echo "<li><a href=\"series.php\">Serier</a></li>";
echo "<li><a href=\"miniseries.php\">Miniserier</a></li>";
echo "</ul>";
echo "</nav>";
// Undermeny filmer efter betyg
echo "<nav popover class=\"sub menu movies rating\" id=\"menu-movies-rating\">";
echo "<div class=\"mobile-menu-navigation\">";
echo "<button popovertargetaction=\"hide\" popovertarget=\"menu-movies-rating\" id=\"back-menu-movies-rating\"></button>";
echo "<label for=\"back-menu-movies-rating\">Filtrera efter betyg</label>";
echo "<button popovertargetaction=\"hide\" popovertarget=\"menu-main\"></button>";
echo "</div>";
echo "<ul>";
echo "<li><a href=\"\">+++++</a></li>";
echo "<li><a href=\"\">++++</a></li>";
echo "<li><a href=\"\">+++</a></li>";
echo "<li><a href=\"\">++</a></li>";
echo "<li><a href=\"\">+</a></li>";
echo "<li><a href=\"\">-</a></li>";
echo "</ul>";
echo "</nav>";
// Undermeny filmer efter år
echo "<nav popover class=\"sub menu movies year\" id=\"menu-movies-year\">";
echo "<div class=\"mobile-menu-navigation\">";
echo "<button popovertargetaction=\"hide\" popovertarget=\"menu-movies-year\" id=\"back-menu-movies-year\"></button>";
echo "<label for=\"back-menu-movies-year\">Filtrera efter år</label>";
echo "<button popovertargetaction=\"hide\" popovertarget=\"menu-main\"></button>";
echo "</div>";
echo "<ul class=\"content\">";
echo "<li><a href=\"\">2020-tal</a></li>";
echo "<li><a href=\"\">2010-tal</a></li>";
echo "<li><a href=\"\">2000-tal</a></li>";
echo "<li><a href=\"\">1990-tal</a></li>";
echo "<li><a href=\"\">1980-tal</a></li>";
echo "<li><a href=\"\">1970-tal</a></li>";
echo "<li><a href=\"\">1960-tal</a></li>";
echo "<li><a href=\"\">1950-tal</a></li>";
echo "<li><a href=\"\">1940-tal</a></li>";
echo "<li><a href=\"\">1930-tal</a></li>";
echo "<li><a href=\"\">1920-tal</a></li>";
echo "<li><a href=\"\">1910-tal</a></li>";
echo "<li><a href=\"\">1900-tal</a></li>";
echo "<li><a href=\"\">1890-tal</a></li>";
echo "</ul>";
echo "</nav>";
// Undermeny filmer efter genre
echo "<nav popover class=\"sub menu movies genres\" id=\"menu-movies-genre\">";
echo "<div class=\"mobile-menu-navigation\">";
echo "<button popovertargetaction=\"hide\" popovertarget=\"menu-movies-genre\" id=\"back-menu-movies-genre\"></button>";
echo "<label for=\"back-menu-movies-genre\">Filtrera efter genre</label>";
echo "<button popovertargetaction=\"hide\" popovertarget=\"menu-main\"></button>";
echo "</div>";
echo "<div class=\"content\">";
echo "<ul class=\"genres common\">";
echo "<li><a href=\"\">action</a></li>";
echo "<li><a href=\"\">drama</a></li>";
echo "<li><a href=\"\">kriminalare</a></li>";
echo "<li><a href=\"\">komedi</a></li>";
echo "<li><a href=\"\">romantik</a></li>";
echo "<li><a href=\"\">skräck</a></li>";
echo "<li><a href=\"\">thriller</a></li>";
echo "<li><a href=\"\">äventyr</a></li>";
echo "</ul>";
echo "<ul class=\"genres uncommon\">";
echo "<li><a href=\"\">animerat</a></li>";
echo "<li><a href=\"\">biografi</a></li>";
echo "<li><a href=\"\">b-film</a></li>";
echo "<li><a href=\"\">dokumentär</a></li>";
echo "<li><a href=\"\">erotik</a></li>";
echo "<li><a href=\"\">familjefilm</a></li>";
echo "<li><a href=\"\">fantasy</a></li>";
echo "<li><a href=\"\">film noir</a></li>";
echo "<li><a href=\"\">historia</a></li>";
echo "<li><a href=\"\">kortfilm</a></li>";
echo "<li><a href=\"\">krig</a></li>";
echo "<li><a href=\"\">kung fu</a></li>";
echo "<li><a href=\"\">musik</a></li>";
echo "<li><a href=\"\">musikal</a></li>";
echo "<li><a href=\"\">mystik</a></li>";
echo "<li><a href=\"\">sci-fi</a></li>";
echo "<li><a href=\"\">splatter</a></li>";
echo "<li><a href=\"\">sport</a></li>";
echo "<li><a href=\"\">teater</a></li>";
echo "<li><a href=\"\">västern</a></li>";
echo "</ul>";
echo "</div>";
echo "</nav>";
// Undermeny personer efter typ
echo "<nav popover class=\"sub menu persons type\" id=\"menu-persons-type\">";
echo "<div class=\"mobile-menu-navigation\">";
echo "<button popovertargetaction=\"hide\" popovertarget=\"menu-persons-type\" id=\"back-menu-persons-type\"></button>";
echo "<label for=\"back-menu-persons-type\">Filtrera efter typ</label>";
echo "<button popovertargetaction=\"hide\" popovertarget=\"menu-main\"></button>";
echo "</div>";
echo "<ul>";
echo "<li><a href=\"actors.php\">Skådespelare</a></li>";
echo "<li><a href=\"directors.php\">Regissörer</a></li>";
echo "</ul>";
echo "</nav>";
// Undermeny personer efter relationer
echo "<nav popover class=\"sub menu persons relations\" id=\"menu-persons-relations\">";
echo "<div class=\"mobile-menu-navigation\">";
echo "<button popovertargetaction=\"hide\" popovertarget=\"menu-persons-relations\" id=\"back-menu-persons-relations\"></button>";
echo "<label for=\"back-menu-persons-relations\">Filtrera efter relationer</label>";
echo "<button popovertargetaction=\"hide\" popovertarget=\"menu-main\"></button>";
echo "</div>";
echo "<ul>";
echo "<li><a href=\"\">Affärspartner</a></li>";
echo "<li><a href=\"\">Avkomma</a></li>";
echo "<li><a href=\"\">Förälder</a></li>";
echo "<li><a href=\"\">Gifta</a></li>";
echo "<li><a href=\"\">Kusin</a></li>";
echo "<li><a href=\"\">Syskon</a></li>";
echo "<li><a href=\"\">Övrig släkt</a></li>";
echo "</ul>";
echo "</nav>";

echo "<main id=\"main-content\">";
echo "<article>"
?>
