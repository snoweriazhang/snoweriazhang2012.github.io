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

echo("<p class='title'>".$art->item(5)->childNodes->item(0)->nodeValue."</p>"); // print title in title format
echo("<p>".$art->item(7)->childNodes->item(0)->nodeValue."</p>"); // print date
echo("<p>".$art->item(9)->childNodes->item(0)->nodeValue."</p>"); // print content
echo("<p><a href='portfolio_pages/".$art->item(1)->childNodes->item(0)->nodeValue.".php'>Click here to read more or share.</a></p>"); // print link
echo("<img src=".$art->item(3)->childNodes->item(0)->nodeValue." class='art'/>"); // print image

?>