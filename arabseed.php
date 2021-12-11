<?php
header("Content-type: application/text");
header("Content-Disposition: attachment; filename=index.mkv");
$url ="https://m.arabseed.me/embed-".$_GET['id'].".html";
$content = file_get_contents($url);
$first_step = explode( 'source src="' , $content );
$second_step = explode('" type="video' , $first_step[1] );

$user= $second_step[0];

$link = $user;
header('Location: '.$link);
?>
