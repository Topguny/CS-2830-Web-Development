<DOCTYPE html>
<!--	Lukas Heading
		18131083
		10/24/16-->
<html>
	<head> 
		<title>Challenge 8</title>
		<style>
			.photo{
				height: 500px;
				width: 800px;
				text-align: left;
				padding: 5px;
			}
		</style>
	</head>
	<body>
		<?php
			$dir  = 'challenge8/images';
			$file_display = array('jpg', 'jpeg', 'png', 'gif');
			if (file_exists($dir) == false) {
				echo 'Directory \''. $dir. '\' not found!';
			} 
			else {
				$dir_contents = scandir($dir);
				if(scandir($dir) == null){
					echo 'Directory could not be opened';
				}
				foreach ($dir_contents as $file) {
					$file_type = strtolower(end(explode('.', $file)));
					if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
						echo '<img class = photo src="'. $dir. '/'. $file. '" alt="'. $file. '" />';
					}
				}
			}
		?>
	</body>
</html>