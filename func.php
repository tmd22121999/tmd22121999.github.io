<?php 
  require "datab.php";
	$ran =0;
	
    $array = array();
	$qr="
		SELECT * FROM quote AS q, charact AS c
		WHERE q.charid = c.charid
		ORDER BY qid 
	";
	$dulieu = $db -> query($qr);
	while($row = $dulieu -> fetch_assoc()) {
	$array[] = array( 0 =>$row["qid"] , "quote" =>$row["quote"] ,"nchar" => $row["name"] ) ;
	$ran++;
	};
	
	$ran = rand(0,$ran-1);
	 echo $ran;
	// 	echo "<h1><pre>";
  //	 print_r ($array);
  //  echo "<h1><pre>";
?>