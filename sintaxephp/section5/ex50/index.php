<?php
$title = "Página Inicial";
$subtitle = "Bem-vindo";
$content = "<p>Seja Bem vindo, ao meu site!!</p>" ;

$template = file_get_contents('template.html');

$template = str_replace('{{title}}', $title, $template);
$template = str_replace('{{subtitle}}', $subtitle, $template);
$template = str_replace('{{content}}', $content, $template);

echo $template;
?>
