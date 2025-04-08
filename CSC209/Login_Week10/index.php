<!DOCTYPE html>
<?php
// include php libs
include "php/utils.php";
/**
 * @todo Modify the variables below as necessary
 * @todo Make sure the number in the Week folder name matches $WEEKID
 * @todo Rename Lab folders as necessary to avoid confusion
 * @todo Verify that the content in the Lab tabs references the correct Steps
**/
$MIDTERMWEEK = 7;
$NRCLASSESPERWEEK = 1;
$WEEKID = getWeekId();
$WEBSERVER = "github";
$CLASSINFO = "CSC 209 Spring 2025";
// $WEBSERVER = "aurora";
if ($NRCLASSESPERWEEK > 1) {
	$LABTUID = 2*$WEEKID - 1;
	$LABTHID = 2*$WEEKID;
	$DATELABTU = "Tu Sep 29, 2020";
	$DATELABTH = "Th Oct 1, 2020";
	$DAYDUE = "Monday";
}
else {
	$LABTUID = 1;
	$LABTHID = 2;
	$DATELABTU = "Wed Apr 9, 2025";
	$DATELABTH = "";
	$DAYDUE = "Tuesday";
}
if ($WEEKID < $MIDTERMWEEK)
	$HWID = $WEEKID;
else
	$HWID = $WEEKID - 1;
?>
<html>
  <head>
		
	  <!-- Style files -->
	  <link rel="stylesheet" href="css/lab.css">
	  <link rel="stylesheet" href="css/layout.css">
		
	  <!-- javascript lib files -->
	  <script src="js/layout.js"></script>
	  <script src="js/lab.js"></script>
		
	  <script>
		  var nrStepsLabTu;
		  var nrStepsLabTh;
		  var nrStepsHw;
	  </script>
  </head>
  <body>
	  <header>
		  <div class="date"><?= $DATELABTU ?><br><?= $DATELABTH ?></div>
		  <div class="labNr">Week <?= $WEEKID ?> <br>A mini-login app</div>
		  <div class="labDescription">Php: forms and files</div>		  
	  </header>
		
	  <section>
		  <!-- the top navigation has to be in one-on-one correspondence with the pages in main -->
		  <div class="topnav">
			  <a href="javascript:void(0)" onclick="showMain('labTuM'); showSteps('labTuS');">Lab <?= $LABTUID; ?></a>
			  <a href="javascript:void(0)" onclick="showMain('labThM');showSteps('labThS'); ">Lab <?= $LABTHID ; ?></a>
			  <a href="javascript:void(0)" onclick="showMain('hwM');showSteps('hwS'); ">Hw <?= $HWID ; ?></a>
				
			  <a href="javascript:void(0)" onclick="showMain('timeline'); ">Timeline</a>
			  <a href="javascript:void(0)" onclick="showMain('guidelines'); ">Guidelines</a>
		  </div>
			
		  <!-- the side navigation is generated with a javascript below, from the pages in main -->
		  <div class="sidenav" id="mySidenav" >
			  <?php include "templates/sidenav.html"; ?> 
		  </div>
					
		  <nav>
			  <span style="font-variant: small-caps;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
		  </nav>
			
		  <!-- <main> -->
			  <main> 
				  <div class="main" id="labTuM">
					  <?php include "views/labTu.html.php"; ?> 
				  </div>
				  <div class="main" id="labThM">
					  <?php include "views/labTh.html.php"; ?> 
				  </div>
				   
				  <div class="main" id="hwM">
					  <?php include "views/hw.html.php"; ?> 
				  </div>
				   
				  <div class="main" id="timeline">
					  <?php include "pages/timeline.html"; ?> 
				  </div>			
				  <div class="main" id="guidelines">
					  <?php include "pages/guidelines.html"; ?> 
				  </div>	
			  </main>
			
			  <!-- script to generate the side navigation and to show the Tuesday Lab -->
			  <script>
				  computeNrStepsPerLabHw();
				  makeAllSideNav(nrStepsLabTu,nrStepsLabTh,nrStepsHw);
				  showMain('labTuM');
				  showSteps('labTuS');
			  </script>
				
		</section>
		
		<footer>
			<?= $CLASSINFO ?><br>
			Ileana Streinu
		</footer>		
		
  </body>
</html>
