<html>
<head>
	<title>Список ситуаций</title>
</head>
<body>
	<h1><center>Список ситуаций</center></h1>
	
	
	<center><table border="0">
	
	
		<?php foreach($this->outputTable as $all): ?>
			<tr>
				<td style = "font-size:25px;" ><?= $all->Title ?></td>	
			</tr>

			
		<? endforeach ?>
		
	</table></center>

</body>
</html>

