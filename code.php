<?php
	$title="Code";
	include("header.inc");
?>
<div id="mainpanel" class ="span-16 append-1">
<h2>Software</h2>
<p>
All of the software written for the CoLBeRT system is freely available under the open source GNU General Public License. Visit the <a href="http://github.com/samuellab" target="_blank">Samuel Lab page</a> at GitHub.
</p>
<h2>MindControl</h2>
<a href="images/fullres/mindcontrol_screenshot_full.png"> <img class="image" src="images/mindcontrol_screenshot.png"></a>
<p>
The software to track a moving worm and generate illumination patterns targeted at specific neurons or muscle is called  MindControl. MindControl was written in C by Andrew Leifer using the open source <a href="http://opencv.willowgarage.com/wiki/" target="_blank">OpenCV</a> computer vision library. The source code for mindcontrol is available <a href="http://github.com/samuellab/mindcontrol">on GitHub</a>. MindControl also runs in a simulation mode, so anyone with a Windows computer can download the <a href="https://github.com/downloads/samuellab/mindcontrol/MindControlDEMO.zip">Mindcontrol Demo</a> package and run the software using included video of a swimming worm. 
</p>

<h2>MindControl Access Utilities</h2>
<p>
MindControl software creates data files in the human- and computer-readable YAML file format. To load YAML formatted files into MATLAB use the <a href="https://github.com/samuellab/MindControlAccessUtils">MindControl Access Utilities script</a>. 
</p>


</div>
<?php
include("footer.inc");
?>

