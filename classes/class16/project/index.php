<?php
require 'vendor/autoload.php';

use Carbon\Carbon;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

printf("Now: %s<br>", Carbon::now());
// echo Carbon::now()->subMinutes(20)->diffForHumans();
echo Carbon::now()->subHours(20)->diffForHumans();
echo "<br>";
echo Carbon::parse("1997-12-16")->age;
echo "<br>";
echo Carbon::createFromDate(1997, 12, 16)->diff(Carbon::now())->format('%y years, %m months and %d days');
// => "23 years, 6 months and 26 days"
echo "<br>";
// create new image instance (800 x 600)
$manager = new ImageManager(new Driver());
$image = $manager->read('images/image1.jpg');

// scale to fixed height
$image->scaleDown(800,null); // 400 x 300

// scale to 200 x 100 pixel
// $image->scale(200, 100); // 200 x 150
$image->toPng()->save('images/image1.png');
