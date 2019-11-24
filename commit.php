<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>家庭作业提交系统</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		#hw-img{
			height: 1000px;
			width: 600px;
			border: 5px solid black;
			margin: 0 auto;
		}
	</style>
	<script type="text/javascript">
		function commit(event){
			var file = event.target.files[0];
			//alert(URL.createObjectURL(file));
			//document.getElementById("hw-img").innerHTML = "aaa";
			document.getElementById("hw-img").setAttribute("src",URL.createObjectURL(file));
		}
	</script>
</head>
<body>
	<div id="main">
		<img id="hw-img" src=""></img>
		<?php
		$file = $_FILES["img"];
		//var_dump($_FILES["img"]);
		//var_dump(file_get_contents($_FILES["img"]["tmp_name"]));
		if(!isset($file) || $file["error"] != 0){
			echo
			'<form method="post" enctype="multipart/form-data">
			<p>名字:<input type="text" name="name"></p>
		    <p><input type="file" name="img" onchange="commit(event)"></p>
		    <input type="submit" value="submit">
		    </form>
		    ';
		}else{
			file_put_contents("images/".$_POST["name"].".jpg",file_get_contents($file["tmp_name"]));
			echo "上传成功";
		}
		?>
	</div>
</body>
</html>