
<h1>Lab <?= $LABTHID; ?>: Forms, Php, Write to text files</h1>

<?php
$PATHLABTH="pages/LabTh/";
// $exFolders = glob($PATHLABTH);
$exFolders = glob($PATHLABTH."Ex*");
?>

<ol>
	<?php $nrFolder = 0;
		foreach ($exFolders as $exFolder){ 
	?>
		<li>
			<?php
				include $exFolder . "/topic.html";
				// $baseName=basename($exFolder);
				// $baseNameNr=extractExNumber($exFolder);
				$nrFolder++;
				$baseNameNr = $nrFolder;
			?>
			<div class="exercise" id=<?= "exTh".$baseNameNr ?> style="display:none">
				<?php include $exFolder . "/ex.html"; ?>
			</div>
			<div class="todo" id=<?= "todoTh".$baseNameNr ?> style="display:none"> <b>To do. </b>
				<?php include $exFolder . "/todo.html";?>
			</div>
		</li> 
	<?php };?>
</ol>

