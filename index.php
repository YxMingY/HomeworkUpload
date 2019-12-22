<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>家庭作业提交系统</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="index">
	<div id="main">
		<div id="title">家庭作业提交系统</div>
		<div id="nav">
			<?php
				$commited = 5;
				$total = 5;
				//echo '今日已交'.$commited.'人，应交'.$total.'人';
			//			<a href="non-commited.php">查看未交名单</a>
			?>
			&nbsp; 
			&nbsp;
			<a href="commit.php">提交作业</a>
		</div>
		<?php
			require "data.php";
			foreach(get_namelist() as $name){
   if(is_commited($name)){
		  		$im = imagecreatefromjpeg(get_pic($name));
     imagejpeg($im,'images/comp_'.$name.'.jpg',1);
     imagedestroy($im);
     $pic = 'images/comp_'.$name.'.jpg';
   }else{
     $pic = "non-commited.jpg";
   }
   echo '<div class="item"><a href="'.get_pic($name).'"><img class="img" src='.$pic.'></a>'.$name.'</div>';
			}
		?>
	</div>
</body>
</html>