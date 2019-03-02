<?php require "datab.php"; ?>
<?php require "func.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>anime </title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>	

<body>
<?php require "header.html"; ?>

<div id="main">
	<div class="rand">
    <form action="?p=<?php  echo $array[$ran][0] ?>" method="post">
		<div id="qct">
       		 <div id="quote"><?php echo $array[$ran]["quote"] ?></div>
             <div id="charq"> <?php echo $array[$ran]["nchar"] ?> </div>
        </div>
        <input  class="butt" type="submit"   value="ngẫu nhiên" />
     </form>
	</div><!--rand-->
	<div class="catectn">
		<div class="cate"></div>
	</div><!--cate-->
</div><!--main-->
</body>
</html>