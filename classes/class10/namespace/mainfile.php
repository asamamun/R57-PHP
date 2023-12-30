<h3>namespaces are designed to solve two problems that authors of libraries and applications encounter when creating re-usable code elements such as classes or functions: Name collisions between code you create, and internal PHP classes/functions/constants or third-party classes/functions/constants.</h3>
<?php

include "a.class.php";
include "b.class.php";
include "user/a.class.php";
include "user/b.class.php";
include "student/a.class.php";
include "student/b.class.php";

use student\B\Image as StudentB;
use user\A\Image as userA;

$objA = new userA();
$objA->load();

$objB = new StudentB();
$objB->rotate();

// $s = new StA();