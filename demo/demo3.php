<?php

/**
 * Demo drawing #2
 */

require dirname(__FILE__) . '/../Color.php';
require dirname(__FILE__) . '/../LineType.php';
require dirname(__FILE__) . '/../Creator.php';

use adamasantares\dxf\Creator;
use adamasantares\dxf\Color;
use adamasantares\dxf\LineType;

//setting image data
$path = "./peludito.png";
$size = getimagesize($path);
$width = $size[0];
$height = $size[1];

(new Creator())
    ->setColor(Color::rgb(0, 100, 0))
    ->addEllipse(-20, 0, 0, -20, 30, 0, 0.5)
    ->setLayer('2', Color::MAGENTA, LineType::SOLID)
    ->addEllipseBy3Points(20, 0, 0, 20, 30, 0, 35, 0, 0)
    ->addImage(0, 0, 0, 50, 50, 0, $path, $width, $height)
    ->saveToFile(dirname(__FILE__) . '/demo3.dxf');

exit("   Done (" . dirname(__FILE__) . "/demo3.dxf)\n");
