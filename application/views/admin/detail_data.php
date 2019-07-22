<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
<?php for ($i=0; $i < count($datanya); $i++) { ?>
	<tr <?php if($i < $batas){echo 'bgcolor="#FF0000"';} ?>>
		<td><center><?php echo $datanya[$i]->nama ?></center></td>
		<td><center><?php echo $datanya[$i]->gaya_belajar ?></center></td>
	</tr>	
<?php } ?>
</table>

</body>
</html>