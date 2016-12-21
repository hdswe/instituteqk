<?php
include('header.php');

		for($i=2; $i<=50; $i++){
			$f = 'f'.$i.'';
			$im = $i - 1;
			$f_o = 'f'.$im.'';
			$insert	= $pdo->pdoExecute("ALTER TABLE `account_assessment_student` ADD `".$f."` VARCHAR(200) NOT NULL AFTER `".$f_o."`");
		}

?>