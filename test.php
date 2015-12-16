	<?php 
	//open Jewelry directory
	/*
	$dir = opendir("img/jewelry");
	$allowed_types=array('jpg','jpeg','gif','png'); 
	$file_parts=array();
	$i=0;
	$items=array();
	$srcs = array();
	while (($file = readdir($dir)) !== false)
		{
		if($file=='.' || $file=='..') continue; //skip links to the current and parent directories
		$src = (string)$file;
		$file_parts = explode('.',$file); //split file name and place into array
		$ext = strtolower(array_pop($file_parts)); //last element is the extension
		$item = array_pop($file_parts);


		if(in_array($ext,$allowed_types)) { //if the extension is an allowable type
			$items[]=$item;
			$srcs[] = $src;
			//echo $items[$i] . "<br />";
			//echo $srcs[$i] . "<br />";
			$i++;		
			}

		}

	closedir($dir);
	*/
	//function which takes a item and outputs its thumbnail html

	//function html_slides($items, $srcs) {

		//$output = "";

		//$output = $output . '<li class="span2">';
        //$output = $output .  '<a href="#" class="thumbnail">';
        //$output = $output .  '<img src="img/jewelry/' . $srcs[$j] . '" alt="' . $items[$j] . '">';            
       // $output = $output .  '</a>';
        //$output = $output .  '</li>';

       // return $output;

	//}

$connect = mysql_connect("localhost","user","ovation23");

if(!$connect){
	die("Failed to connect: " . mysql_error());
}

if(!mysql_select_db("OvationV")){
	die("Failed to select DB: " . mysql_error());
}

mysql_select_db("OvationV",$connect);

if( isset($_GET['designer']) && is_array($_GET['designer']) ){
	//foreach($_GET['designer'] as $designer){
		//echo " Designer: " . $designer . "<br/>";
	//}

	$designerList = "designer='" . implode("' or designer='", $_GET['designer']) . "' ";
	//echo "DesignerList: " . $designerList . "<br/><br/><br/>";
} else{
	$designerList = "designer='chanel' or designer='dior' or designer='gucci' or designer='unsigned'";
}

if(isset($_GET['type']) && is_array($_GET['type']) ){
	//foreach($_GET['type'] as $type){
		//echo "Type: " . $type . "<br/>";
	//}
	$typeList = "type='" . implode("' or type='", $_GET['type']) . "' ";
	//echo "TypeList: " . $typeList;
} else {
	$typeList = "type='necklace' or type='bracelet' or type='broach' or type='earrings' or type='ring'";
}

$query = "SELECT * FROM Items WHERE (". $typeList .") and (" . $designerList . ") ";

$results = mysql_query($query);

$total = 0;
$output = '';
while($row = mysql_fetch_array($results)){
		$output = $output . '<li class="span2 slide">';
        $output = $output .  '<a href="#" class="thumbnail">';
        $output = $output .  '<img src="img/jewelry/' . $row['imgSource'] . '" alt="' . $row['item'] . '" style="width: 100%">';            
        $output = $output .  '<div style="display:none" class="description">' . $row['description'] . '</div>';
        $output = $output .  '<div style="display:none" class="name">' . $row['item'] . '</div>';
        if($row['xtraimg1'] != '') {$output = $output .  '<div style="display:none" class="xtraimg">' . $row['xtraimg1'] . ' </div>';}
        if($row['xtraimg2'] != '') {$output = $output .  '<div style="display:none" class="xtraimg">' . $row['xtraimg2'] . ' </div>';}
        if($row['xtraimg3'] != '') {$output = $output .  '<div style="display:none" class="xtraimg">' . $row['xtraimg3'] . ' </div>';}
        if($row['xtraimg4'] != '') {$output = $output .  '<div style="display:none" class="xtraimg">' . $row['xtraimg4'] . '</div>';}
        $output = $output .  '</a>';
        $output = $output .  '</li>';
	$total = $total + 1;
}




if ($total % 5 != 0) {
	$extra_spans = 5 - ($total % 5);
	for($k=0;$k<($extra_spans);$k++){
		$output = $output . '<li class="span2 slide">';
		$output = $output .  '<a href="#">';      
        $output = $output .  '</a>';
		$output = $output .  '</li>';
	}
}




	?>







































