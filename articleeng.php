<!DOCTYPE html>
<!--
Design by n1ce
Design by n1ce
Design by n1ce
Design by n1ce
Design by n1ce
Design by n1ce

-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>PE "Fortuna"</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
	<meta content="width=1200" name="viewport" id="viewport">
	<link href="icon.ico" rel="shortcut icon" type="image/x-icon" />

</head>

<body>
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="menu">
				<ul>
					<li><a href="indexeng.php" accesskey="1" title="">The Main</a></li>

					<li><a href="articleeng.php" accesskey="2" title="">Articles</a></li>
					<li><a href="equipmenteng.php" accesskey="3" title="">Equipment</a></li>
					<li><a href="infoeng.php" accesskey="4" title="">System Description</a></li>
					<li><a href="sertifeng.php" accesskey="5" title="">Certificates</a></li>
					<li><a href="objecteng.php" accesskey="6" title="">Objects</a></li>
					<li><a href="contacteng.php" accesskey="8" title="">Сontacts</a></li>
					<li><a accesskey="8" title="" data-google-lang="en">'ENG'</a></li>
					<li><a accesskey="8" title="" data-google-lang="ru">'RU'</a></li>
					<li><a accesskey="8" title="" data-google-lang="uk">'UKR'</a></li>

				</ul>
			</div>
		</div>
	</div>
	<div id="wrapper">
		<div id="staff" class="container">
			<div class="title">
				<h2>
					PRACTICAL ASPECTS OF CREATION OF COMPUTER SYSTEMS FOR COMMERCIAL STOCK ACCOUNTING <br>
					IN RESERVOIR PARKS OF FAT AND OIL COMPLEX ENTERPRISES.
				</h2>
			</div>
			<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Director:
				Davidchuk A.N., Technical Director of PE "Fortuna": Baklushin Y.N, <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Director
				of GNPP "Eldorado", Dnipro: Prosyanyk A.V, <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Head
				of instrumentation service "Donetsk Margarine Plant": Sokolov V.O. <br>
			</p>
			<p>
				The solution of the problems of complex automation of enterprises of the fat-and-oil complex (MZhK) has
				many common solutions used in the integrated ACS of bakery plants [1]. As a consequence of this, such
				computer systems as weighing and dosing on strain gauges, measuring the temperature in the silos of the
				elevator, measuring the moisture content of grain in the flow, controlling the routes, and others, are
				completely identical. Technical solutions of such systems and the results of their implementation at a
				number of enterprises of the agro-industrial complex were repeatedly highlighted by us in the magazine
				"Grain Storage and Processing" in the period from 2002 to 2004. More detailed information can be found
				on the website www.dnvpeldorado.dp.ua. However, some of the tasks solved in the automation of MZhK
				enterprises are purely specific. These tasks include the task of creating computer systems for
				commercial accounting (KSKU) of commodity stocks in the tank farms of the enterprises of MZhK. For all
				MZhK enterprises that have tank farms with vegetable oils, the problem of creating a KSKU is urgent,
				since an objective picture of movement is required

				commodity and raw material flows, the possibility of its analysis, but very few enterprises of the
				Ukrainian MZHK have a system of truly commercial accounting, since many problems arise during its
				creation. Problems in the creation of KSKU begin already with the choice of a sensor for measuring the
				level of vegetable oil in the tank. The fact is that, along with a high level measurement accuracy (not
				worse than + -1 mm), the sensor must be reliable when working with such viscous and adhesive liquids,
				which is ensured by minimal contact of the primary transducer with vegetable oil. Perhaps the best
				solution would be to use radar level transmitters from well-known manufacturers (for example, SAAB), but
				their use is limited by their very high cost (more than $ 12,000). Cheaper level gauges of this class
				have unsatisfactory accuracy. Some enterprises have tried to use pressure sensors for these purposes,
				however, the inherent low accuracy of these sensors immediately excludes the possibility of creating
				commercial metering systems, and limits their use to the needs of technologists.
				<br>
				<br>
				<br>

				<img src="images/r1stat.jpg" width="148" height="236" class="leftimg">
				<img src="images/r2stat.jpg" width="277" height="260" class="rightimg">
				At the Donetsk Margarine Plant, a liquid level-density sensor of the IPZh series was used, developed by
				the Institute of Technical Mechanics of the National Academy of Sciences of Ukraine and the Fortuna
				State Enterprise, Dnipro, to measure the level-density of oil products.
				<br>
				<br>
				Principle of operation:
				weighing with the help of electronic strain gauges a control fluoroplastic cylinder suspended on a cable
				by a stepper motor. This provides the possibility of direct high-precision measurements of the density
				distribution in the liquid column, determination of its level by the coordinate of the density jump.
				<br>
				<br>
				<br>
				When tracking changes in the liquid level, the cylinder is in a semi-submerged state, while the distance
				from the roof of the tank to the liquid level is calculated by the formula:
				<br>
			<p style="text-align: center;"><img src="images/r3stat.jpg" alt="img" width="300" height="100" /></p>
			<br>
			</p>
			<p>
				where n is the number of steps of the stepper motor; <br>
				&nbsp;&nbsp;&nbsp;&nbsp;<b>k is the number of mm per step; <br>
					&nbsp;&nbsp;&nbsp;&nbsp;M is the current weight of the cylinder; <br>
					&nbsp;&nbsp;&nbsp;&nbsp;Mw is the weight of the cylinder in the liquid; <br>
					&nbsp;&nbsp;&nbsp;&nbsp;H is the height of the cylinder; <br>
					&nbsp;&nbsp;&nbsp;&nbsp;a - coefficient of immersion of the cylinder, in the semi-submerged state a
					= 0.5 <br></b>
				For vegetable oils a = 0.9, i.e. the cylinder hardly touches it, which ensures the absence of oil
				adhesion. To measure the average temperature of the oil, a thermal thermosensor is lowered into the
				tank, consisting of ten temperature sensors of the “DS 18B20” type, which allow the temperature to be
				measured with an accuracy of + -0.2º. The sensor and the thermal thermosensor are connected to an
				information collection unit connected to a PC, the Dnipro software of which determines the average oil
				temperature t from their data. In this case, the density of the oil is determined by the well-known
				formula:
				<br>
			<p style="text-align: center;"><img src="images/r4stat.jpg" alt="img" width="400" height="100" /></p>
			<br>
			</p>
			<p>
				where ρ20 = 916.5 g / l is the density of the oil at a temperature of 20 °; <br>
				β = 0.000742 - coefficient of thermal expansion of the oil. <br>
				The PC stores the calibration characteristics of the tanks, with the help of which and the level-density
				values, the amount of oil in liters and kilograms is calculated. <br>
				<br>
				This provides: <br>
				<b>● accuracy of level measurement - + -1mm; <br>
					● temperature measurement accuracy - + -0.2º; <br>
					● accuracy of density measurement - + -1 g / l; <br>
					● The accuracy of measuring the amount of oil in liters and kilograms is determined by the accuracy
					of the calibration table. </b><br>
				The measurement results are displayed on the monitor in the following form. <br>
				<br>
			<p style="text-align: center;"><img src="images/r5stat.jpg" alt="img" width="480" height="306" /></p>
			<br>
			</p>
			<p>
				Here you can see the status of the entire tank farm of the plant (up to 50 tanks), the status and
				measurement results of the selected tank. <br>
				The KSKU software of the tank farm has the following capabilities: <br>
				<b>● keep records of the oil entering the tanks according to the indications of the scales - oil
					dispensers <br>
					&nbsp;&nbsp;(manufacturer is a private enterprise "Fortuna", Dnipro); <br>
					● keep records of the receipt of oil from auto and railway tanks; <br>
					● set routes for the movement of oil from scales to tanks and from tanks to loading sites (auto- or
					&nbsp;railway tanks); <br>
					● keep records of oil delivery and acceptance according to the level gauge readings; <br>
					● keep the history of oil movement in databases; <br>
					● generate a single shift report. </b><br>
				In conclusion, we would like to note that the experience of using IPZH sensors at the Donetsk Margarine
				Plant has shown their high reliability. <br>
				<br>
				<br>
			</p>
		</div>
	</div>
	<div id="copyright" class="container">
		<p>&copy; <a href="indexeng.php">PE "Fortuna"</a>, 1998-
			<?php echo date('Y'); ?><br>+38-050-320-17-85, fortuna_dn@i.ua <br>Design: Leonid Davidchuk <br> All rights
			reserved.
		</p>
	</div>
</body>

</html>