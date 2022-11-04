<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Rectangle</h3>
<form method="post">
    <input type="number" name="length" placeholder="length">
    <input type="number" name="width" placeholder="width">
    <input type="submit" name="rectangle" value="Calculate">
</form>

<h3>Square</h3>
<form method="post">
    <input type="number" name="length" placeholder="length">
    <input type="submit" name="square" value="Calculate">
</form>

<h3>Triangle</h3>
<form method="post">
    <input type="number" name="side1" placeholder="side1">
    <input type="number" name="side2" placeholder="side2">
    <input type="number" name="side3" placeholder="side3">
    <input type="submit" name="triangle" value="Calculate">
</form>

<h3>Circle</h3>
<form method="post">
    <input type="number" name="rayon" placeholder="rayon">
    <input type="submit" name="cercle" value="Calculate">
</form>

<h3>Cube</h3>
<form method="post">
    <input type="number" name="arrete" placeholder="arrete">
    <input type="submit" name="cube" value="Calculate">
</form>

<h3>Sphere</h3>
<form method="post">
    <input type="number" name="rayon" placeholder="rayon    ">
    <input type="submit" name="sphere" value="Calculate">
</form>

<?php
require_once 'sphere.php';
require_once 'cube.php';
require_once 'cercle.php';
require_once 'triangle.php';
require_once 'rectangle.php';
require_once 'square.php';

if ($_POST) {


    // calculate rectangle stuff
    if (isset($_POST['rectangle'])) {
        $shape = new Rectangle($_POST['width'], $_POST['length']);
    }

    if (isset($_POST['square'])) {
        $shape = new Square($_POST['length']);
    }

    if (isset($_POST['triangle'])) {
        $shape = new Triangle($_POST['side1'], $_POST['side2'], $_POST['side3']);
    }

    if (isset($_POST['cercle'])) {
        $shape = new Cercle($_POST['rayon']);
    }

    if (isset($_POST['cube'])) {
        $shape = new Cube($_POST['arrete']);
    }

    if (isset($_POST['sphere'])) {
        $shape = new Sphere($_POST['rayon']);
    }



    if (method_exists($shape, 'getPerimeter')) {
        echo 'Perimeter : ' . $shape->getPerimeter() . ' cm';
        echo '<br>';
    }

    echo 'Area : ' . $shape->getArea() . ' cm²';
    echo '<br>';
    if (method_exists($shape, 'getVolume')) {
        echo 'Volume : ' . $shape->getVolume() . ' cm3';
    }

}

?>
</body>
</html>