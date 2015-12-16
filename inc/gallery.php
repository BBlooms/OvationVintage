<?php 

$directory = 'jewelry'; //where images are located
$allowed_types=array('jpg','jpeg','gif','png'); //allowed image types

$file_parts=array();
$ext='';
$title='';
$i=0;
$items = array();

//try to open directory
$dir_handle = @opendir($directory) or die("There is an error with your image directory"); //traverse through files

while (false !== ($file = readdir($dir_handle))){
	if($file=='.' || $file=='..') continue; //skip links to the current and parent directories

	$file_parts = explode('.',$file); //split file name and place into array
	$ext = strtolower(array_pop($file_parts)); //last element is the extension

	if(in_array($ext,$allowed_types)) { //if the extension is an allowable type
		$title = implode('.',$file_parts));
		$title = htmlspecialchars($title);
		$items[i]=array($title,$ext);
		i++;		
	}
} 
closeddir($dir_handle);
$test='test';
?>