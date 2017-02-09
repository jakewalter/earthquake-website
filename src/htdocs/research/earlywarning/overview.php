<?php
// Author: Lisa Wald
// Contact: Elizabeth Cochran
// Last modified: Lisa Wald, 2016/08/10
  if (!isset($TEMPLATE)) {
  $TITLE = 'Earthquake Early Warning';
  $NAVIGATION = true;
  include 'template.inc.php';
}
?>

<h2>Overview</h2>

<figure class='right'>
	<img src="images/shakealert_top.jpg" alt="ShakeAlert"/>
	<figcaption>
    A user of ShakeAlert receives a message like this on the screen of his computer. The message alerts the user to how many seconds before the shaking waves arrive at their location and the expected intensity of shaking at that site. The shaking intensity follows the Modified Mercalli scale; an intensity of VI, as shown here, would mean the shaking is felt by everyone, people find it difficult to stand, and structures may suffer some damage. The warning message also displays a map with the location of the epicenter, the magnitude of the quake, and the current position of the P and S waves. In this example, the alert is for the <a href="https://pubs.usgs.gov/circ/1324/">ShakeOut scenario earthquake</a>.
  </figcaption>
</figure>

<p>
  Earthquake early warning systems use earthquake science and the technology of monitoring systems to alert devices and people when shaking waves generated by an earthquake are expected to arrive at their location.  The seconds to minutes of advance warning can allow people and systems to take actions to protect life and property from destructive shaking.
</p>

<p>Even a few seconds of warning can enable protective actions such as:</p>

<ul>
	<li>Public: Citizens, including schoolchildren, drop, cover, and hold on; turn off stoves, safely stop vehicles.</li>
	<li>Businesses: Personnel move to safe locations, automated systems ensure elevators doors open, production lines are shut down, sensitive equipment is placed in a safe mode.</li>
	<li>Medical services: Surgeons, dentists, and others stop delicate procedures.</li>
	<li>Emergency responders: Open firehouse doors, personnel prepare and prioritize response decisions.</li>
	<li>Power infrastructure: Protect power stations and grid facilities from strong shaking.</li>
</ul>

<p>
  EEW systems are currently operating in several countries, and others are building them.  Since 2006 the USGS has been working to develop EEW for the United States, with the help of several cooperating organizations including the California Geological Survey (CGS), the California Institute of Technology (Caltech), the California Office of Emergency Services (CalOES), the Moore Foundation, the University of California, Berkeley, the University of Washington, and the University of Oregon.  The goal is to create and operate an EEW system for the highest risk areas of the United States beginning with the West Coast states: California, Washington, and Oregon.
</p>

<p>
  A demonstration EEW system called <a href="http://www.shakealert.org">ShakeAlert</a> began sending test notifications to selected users in California in January 2012.  The system detects earthquakes using the <a href="http://www.cisn.org">California Integrated Seismic Network (CISN)</a>,an existing network of about 400 high-quality ground motion sensors. CISN is a partnership between the USGS, State of California, Caltech, and University of California, Berkeley, and is one of seven regional networks that make up the <a href="https://earthquake.usgs.gov/monitoring/anss/">Advanced National Seismic System (ANSS)</a>.
</p>

<p>
  In February of 2016 the USGS, along with its partners, rolled-out the next-generation ShakeAlert early warning test system in California. This “production prototype” has been designed for redundant, reliable operations. The system includes geographically distributed servers, and allows for automatic fail-over if connection is lost. This next-generation system will not yet support public warnings but will allow selected early adopters to develop and deploy pilot implementations that take protective actions triggered by the ShakeAlert warnings in areas with sufficient coverage. The USGS has published an <a href="https://pubs.usgs.gov/of/2014/1097/">Implementation Plan</a> with the steps needed to complete the system and begin issuing public alerts.
</p>

<figure>
	<img src="images/eewbasics.gif" alt="Early Warning Basics"/>
	<figcaption>
    Earthquake early warning systems like ShakeAlert work because the warning message can be transmitted almost instantaneously, whereas the shaking waves from the earthquake travel through the shallow layers of the Earth at speeds of one to a few kilometers per second (0.5 to 3 miles per second). This diagram shows how such a system would operate. When an earthquake occurs, both compressional (P) waves and transverse (S) waves radiate outward from the epicenter. The P wave, which travels fastest, trips sensors placed in the landscape, causing alert signals to be sent ahead, giving people and automated electronic systems some time (seconds to minutes) to take precautionary actions before damage can begin with the arrival of the slower but stronger S waves and later-arriving surface waves. Computers and mobile phones receiving the alert message calculate the expected arrival time and intensity of shaking at your location. USGS image created by Erin Burkett (USGS) and Jeff Goertzen (Orange County Register).
  </figcaption>
</figure>

<h2>See also:</h2>
<ul>
	<li>USGS Fact Sheet on Early Warning and ShakeAlert<br/>
	<a href="https://pubs.usgs.gov/fs/2014/3083/">ShakeAlert—An Earthquake Early Warning System for the United States West Coast</a>
	</li>

  <li>Video - ShakeAlert&mdash;Earthquake Early Warning. How Does It Work?<br/>
  <a href="https://youtu.be/WWl3m4OyU44">English</a> | <a href="https://youtu.be/i1t_u6pz9ik">Spanish</a>
  </li>

	<li><a href="https://www.youtube.com/watch?v=qKJ0MBfIdus">Video example of the ShakeAlert display on a test user’s computer</a><br/>
	</li>
</ul>

<h2>Contacts</h2>
<ul>
  <li><a href="mailto:rdegroot@usgs.gov">Bob de Groot</a> - Shake Alert Coordinator for Communication, Education, and Outreach</li>
  <li><a href="mailto:ecochran@usgs.gov">Elizabeth Cochran</a> - Project Manager</li>
</ul>
