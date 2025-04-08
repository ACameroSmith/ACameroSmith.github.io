<h1>Hwk <?= $HWID; ?>: A nice login page and an nice administrator's page</h1>

<?php
$PATHLABTH="pages/Hw/";
// $exFolders = glob($PATHLABTH);
$exFolders = glob($PATHLABTH."Ex*");
?>

<ol>
	<?php foreach ($exFolders as $exFolder){ ?>
		<li>
			<?php
				include $exFolder . "/topic.html";
				$baseName=basename($exFolder);
				$baseNameNr=extractExNumber($exFolder);
			?>
			<div class="exercise" id=<?= "exHw".$baseNameNr ?> style="display:none">
				<?php include $exFolder . "/ex.html"; ?>
			</div>
			<div class="todo" id=<?= "todoHw".$baseNameNr ?> style="display:none"> <b>To do. </b>
				<?php include $exFolder . "/todo.html";?>
			</div>
		</li> 
	<?php };?>
</ol>
