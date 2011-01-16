<?php
	$title="Videos";
	include("header.inc");
?>
<div id="mainpanel" class ="span-16 append-1">

<h2>Inactivating a worm's muscles</h2>

<div class="video">
<a target="S1"></a>
<iframe src="http://player.vimeo.com/video/16860699?byline=0&amp;portrait=0&amp;color=ff9933" width="512" height="384" frameborder="0"></iframe>
</div>
<p>The nematode <i>C. elegans</i> shown here expresses the gene for Channelrhodopsin in all of its muscle cells. 
When green laser light shines on the worm, its muscles relax and the worm paralyzes. When laser light shines everywhere else outside of the worm's boundary, the worm does not respond.
</p>

<h2>Inducing egg-laying</h2>
<div class ="video">
<a name="S2"></a>
<iframe src="http://player.vimeo.com/video/16899547?byline=0&amp;portrait=0&amp;color=ff9933" width="512" height="384" frameborder="0"></iframe>
</div>
<p>This worm expresses Channelrhodopsin in its HSN neurons (<i>Pegl-6::ChR2::GFP</i>). The worm has two HSN neurons that are located in the middle of the worm's body. As the worm swims, a narrow beam of blue light is scanned across the animal from its head to its tail.  At frame 8828, the beam of light reaches HSN which induces the worm to lay eggs.
</p>

<h2>Disrupting locomotion by inhibiting anterior muscles</h2>
<div class="video">
<a name="S3"></a>
<iframe src="http://player.vimeo.com/video/16932387?byline=0&amp;portrait=0&amp;color=ff9933" width="512" height="384" frameborder="0"></iframe>
</div>
<p>This worm expresses Halorhodopsin in its muscle cells (<i>Pmyo-3::Halo::CFP</i>). When green laser light shines on the worm's neck the muscles in that area are induced to relax. Note also how the worm's tail relaxes to a neutral position even as the worm's head continues to make bending waves. The Samuel Lab is interested in studying how bending waves are propogated from head to tail.
</p>

<h2>Disrupting locomotion by inhibiting motor neurons</h2>
<div class="video">
<a name="S4"></a>
<iframe src="http://player.vimeo.com/video/16932568?byline=0&amp;portrait=0&amp;color=ff9933" width="512" height="384" frameborder="0"></iframe>
</div>
<p>This worm expresses Halorhodopsin in its motor neurons (<i>Punc-17::Halo::CFP</i>). When green laser light shines on a small anterior region of the worm's ventral nerve cord, it inhibits those motor neurons and the worm's tail becomes paralyzed.  Note how the worm's tail retains its shape when the light is applied and it does not relax to neutral. The Samuel Lab is interested in understanding how these motor neurons propogate bending waves from the worm's head to tail.</p> 

<h2>Shutting down motor neurons in the ventral nerve cord</h2>
<div class = "video">
<a name="S5"></a>
<iframe src="http://player.vimeo.com/video/16933218?byline=0&amp;portrait=0&amp;color=ff9933" width="512" height="384" frameborder="0"></iframe>
</div>

<p>This worm expresses Halorhodopsin in its motor neurons (<i>Punc-17::Halo::CFP</i> ). When green laser light shines on its ventral nerve cord it inhibits the motor neurons and the worm paralyzes. When the laser light illuminates the dorsal nerve cord no effect is observed. </p>

<h2>Inducing the sensation of touch</h2>
<div class="video">
<a name="S6"></a>
<iframe src="http://player.vimeo.com/video/16933869?byline=0&amp;portrait=0&amp;color=ff9933" width="512" height="384" frameborder="0"></iframe>
</div>
<p>This worm expresses Channelrhodopsin in its mechanosensory neurons (<i>Pmec-4::ChR2::GFP</i>). When blue light shines on the worm's anterior it stimulates the worm's anterior touch receptors (ALM and AVM). The worm experiences the sensation of being touched and the worm responds by reversing. The Samueal Lab is interested in explorying the neurocircuitry underlying this touch response. </p>

<h2>Inducing the sensation of touch by stimulating a single neuron pair</h2>
<div class="video">
<a name="S8"></a>
<iframe src="http://player.vimeo.com/video/16933878?byline=0&amp;portrait=0&amp;color=ff9933" width="512" height="384" frameborder="0"></iframe>
</div>

<p>This worm expresses Channelrhodopsin in its mechanosensory neurons (<i>Pmec-4::ChR2::GFP</i> ). When blue light shines on the touch receptor neuron pair ALM, the worm experiences the illusion of touch and responds by reversing. The ability to stimulate only single neurons or neuron pairs allows resarchers to study the individual contribution of individual neurons.</p>


<h2>An early CoLBeRT prototype</h2>
<div class="video">
<a name="prototype"></a>
<iframe src="http://player.vimeo.com/video/18840631?byline=0&amp;portrait=0&amp;color=ff9933" width="512" height="384" frameborder="0"></iframe>

</div>
<p>
Before building the CoLBeRT system, Andrew Leifer first built this prototype that works with pretend worms as a proof-of-principle.  In this case the pretend worm is a an 8.5" by 11" printout of a picture of the nematode C. elegans. The software finds the worm, tracks it, and shines light on only a specific region of the worm. This early demonstration formed the basis for what grew into the CoLBeRT system. </p>

</div>
<?php
include("footer.inc");
?>

