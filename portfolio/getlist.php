<?php
$q=$_GET["q"];

$xmlDoc = new DOMDocument();
$xmlDoc->load("portfolio_images_full_list.xml");

$x=$xmlDoc->getElementsByTagName('ID');

for ($i=0; $i<=$x->length-1; $i++){

	//Process only element nodes
	if ($x->item($i)->nodeType==1){
		if ($x->item($i)->childNodes->item(0)->nodeValue == $q){
	    	$y=($x->item($i)->parentNode);
	    }
	}
}

$art=($y->childNodes);

for ($i=0;$i<$art->length;$i++){ 

	//Process only element nodes
	if ($art->item($i)->nodeType==1){
		if ($art->item($i)->nodeName=="IMAGE")
	  		echo("<img src=".$art->item($i)->childNodes->item(0)->nodeValue." class='art'/>");
	  	else{
		  	echo("<b>" . $art->item($i)->nodeName . ":</b> ");
		  	echo($art->item($i)->childNodes->item(0)->nodeValue);
		  	echo("<br />");
	  	}
	}
}
?>