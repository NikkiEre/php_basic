<?php

$title = 'Способ 3. Главная страница - страница обо мне';
$year = 2022;
$head_1 = 'Способ 3. Информация обо мне';

$site = file_get_contents("site.html");

$site = str_replace("{{ title }}", $title, $site);
$site = str_replace("{{ year }}", $year, $site);
$site = str_replace("{{ head }}", $head_1, $site);

echo $site;
