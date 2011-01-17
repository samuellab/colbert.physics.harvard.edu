<?php
	$title="Code";
	include("header.inc");
?>
<div id="mainpanel" class ="span-16 append-1">
<h2>Schematic</h2>
<img class="image" src="images/colbert_schematic.png"> 
<p>
The CoLBeRT system can aquire an image of the worm , identify target neurons and direct its digital micromirror device to shine light on those targets in less than 20ms closed-loop. </p>

<h2>Computer Vision</h2>
<img class="image" src="images/computervision.png"> 
<p> The CoLBeRT system uses real-time computer vision algorithms to rapidly identify the worm. The system identifies the worm's head, tail and centerline and divides the worm into 100 segments that form a natural coordinate system, within which the location of its neuron are defined. The freely available software, called <a href="code.php" target="_blank">MindControl</a>, is written in C and uses the open source <a href="http://opencv.willowgarage.com/wiki/" target="_blank">OpenCV</a> computer vision library.</p> 

<h2>Optics</h2>
<a href="images/fullres/CoLBeRT_green1.jpg"><img class="image" src="images/CoLBeRT_green1_small.jpg"></a>
<p>
Lenses and mirrors are required to shine laser light onto the digital micromirror device (on the right) before heading into the microscope (not pictured on left). Photo by Elizabeth Kane.</p>


</div>
<?php
include("footer.inc");
?>

