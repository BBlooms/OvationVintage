	<?php 
	//open Jewelry directory
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
	
	$total = count($items);
	$output = '';
	for($j=0;$j<$total;$j++){
		$output = $output . '<li class="span2 slide">';
        $output = $output .  '<a href="#" class="thumbnail">';
        $output = $output .  '<img src="img/jewelry/' . $srcs[$j] . '" alt="' . $items[$j] . '" style="width: 100%">';            
        $output = $output .  '</a>';
        $output = $output .  '</li>';
	}


	$extra_spans = 5 - ($total % 5);
	for($k=0;$k<($extra_spans);$k++){
		$output = $output . '<li class="span2 slide">';
		$output = $output .  '<a href="#">';      
        $output = $output .  '</a>';
		$output = $output .  '</li>';
	}




	?>







































