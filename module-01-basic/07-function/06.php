<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content">
	<?php
		$value = "ABC";
		
		function createBox($content, $width = 150, $height = 50){
			$result  =  '<div style="width: '.$width.'px; height: '.$height.'px;">';
			$result .= '<p>'.$content.'<span>(200x50)</span></p>';
			$result .= '</div>';
			
			// Cach 01
			//global $value;
			//echo $value;
			
			// Cach 02
			echo $GLOBALS["value"];
			
			return $result;
		}
		
		$boxA = createBox("Box A");
		echo $boxA;
	?>
		
			
		
		
	</div>
</body>
</html>
<?php
	echo $value; 
?>