
<h1>Lab <?= $LABTUID; ?>: Forms, Php, Write to text files</h1>

<?php
$PATHLABTU="pages/LabTu/";
// $exFolders = glob($PATHLABTU);
$exFolders = glob($PATHLABTU."Ex*");
?>

<ol>
	<?php foreach ($exFolders as $exFolder){ ?>
		<li>
			<?php
				include $exFolder . "/topic.html";
				$baseName=basename($exFolder);
				$baseNameNr=extractExNumber($exFolder);
			?>
			<div class="exercise" id=<?= "exTu".$baseNameNr ?> style="display:none">
				<?php include $exFolder . "/ex.html"; ?>
			</div>
			<div class="todo" id=<?= "todoTu".$baseNameNr ?> style="display:none"> <b>To do. </b>
				<?php include $exFolder . "/todo.html";?>
			</div>
		</li> 
	<?php };?>
</ol>

