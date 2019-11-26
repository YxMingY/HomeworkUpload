<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>家庭作业提交系统</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="main">
		<div id="title">家庭作业提交系统</div>
		<div id="nav">
			<?php
				$commited = 5;
				$total = 5;
				echo '今日已交'.$commited.'人，应交'.$total.'人';
			?>
			&nbsp;
			<a href="non-commited.php">查看未交名单</a> 
			&nbsp;
			<a href="commit.php">提交作业</a>
		</div>
		<?php
			foreach(explode("\n",file_get_contents('名单.txt')) as $name){
				echo '<div class="item"><img class="img" src=non-commited.jpg></img>'.$name.'</div>';
			}
		?>
	</div>
</body>
</html>