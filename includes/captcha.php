<?php


/*session_start();


header("Content-type: image/png");





$image_x=150;//размер изображения


$image_y=40;


$min_angle=-30;//угол наклона


$max_angle=30;


$min_size=14;//размер шрифта


$max_size=18;


$fonts = array('font.otf');//разные шрифты


$chars = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';//набор символов


$length = 6;//длина капчи



for ($i =0; $i < $length; $i++)


{


    $captcha .= $chars[mt_rand(0,strlen($chars)-1)];//формируем


}


$_SESSION["captcha"]=$captcha;//заносим в сессию




$im = imagecreatetruecolor($image_x, $image_y);//создаем


$background = imagecolorallocate($im,255,255,255);


imagefill($im, 0,0, $background);//заливаем фон белым цветом



$step=round($image_x/(strlen($captcha)+2));//шаг символов


$sx=0;


for($i=0;$i<strlen($captcha);$i++)


{


    $letter=$captcha[$i];


    $sx += $step + (rand(-round($step/5),round($step/5))); //случайная координата x


    $sy=$image_y-round($image_y/3)+rand(-round($image_y/5),round($image_y/5)); //случайная


$sa=rand($min_angle,$max_angle); //случайный угол поворота


$ss=rand($min_size,$max_size); //случайный размер


$sf=$fonts[rand(0,count($fonts)-1)]; //случайный шрифт


$sc=imagecolorallocate($im, 100+rand(-100,100), 100+rand(-100,100), 100+rand(100,100)); //


imagettftext($im, $ss, $sa, $sx, $sy, $sc, $sf, $letter);


}


imagepng($im);//неплохо бы и шума немного добавить из случайных линий и т.п.


imagedestroy($im);*/

//session_destroy();
session_start();
$random = rand(10001, 99999);
$_SESSION['captcha'] = $random;
$im = imagecreatetruecolor(220, 60);
imagefilledrectangle($im, 0, 0, 220, 60, imagecolorallocate($im, 255, 255, 255));
imagettftext($im, 50, 0, 50, 30, imagecolorallocate($im, 82, 82, 82), 'font.otf', $random);
header('Content-type: image/gif');//
imagegif($im);
imagedestroy($im);




?>