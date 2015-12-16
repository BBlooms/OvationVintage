<?php

//Build Item Array

$items = array();
$item[001] = array(
	"name" => "j1",
	"description" => "Description here.",
	"img" => "img/jewelry/j1.jpg",
);
$item[002] = array(
	"name" => "j2",
	"description" => "Description here.",
	"img" => "img/jewelry/j2.jpg",
);
$item[003] = array(
	"name" => "j3",
	"description" => "Description here.",
	"img" => "img/jewelry/j3.jpg",
);
$item[004] = array(
	"name" => "j4",
	"description" => "Description here.",
	"img" => "img/jewelry/j4.jpg",
);
$item[005] = array(
	"name" => "j5",
	"description" => "Description here.",
	"img" => "img/jewelry/j5.jpg",
);
$item[006] = array(
	"name" => "j6",
	"description" => "Description here.",
	"img" => "img/jewelry/j6.jpg",
);
$item[007] = array(
	"name" => "j7",
	"description" => "Description here.",
	"img" => "img/jewelry/j7.jpg",
);
$item[008] = array(
	"name" => "j8",
	"description" => "Description here.",
	"img" => "img/jewelry/j8.jpg",
);
$item[009] = array(
	"name" => "j9",
	"description" => "Description here.",
	"img" => "img/jewelry/j9.jpg",
);
$item[010] = array(
	"name" => "j10",
	"description" => "Description here.",
	"img" => "img/jewelry/j10.jpg",
);
$item[011] = array(
	"name" => "j11",
	"description" => "Description here.",
	"img" => "img/jewelry/j11.jpg",
);

?>

<?php
// Carousel Code (In Progress)
foreach($items as item){ ?>
<a href="#">
	<img src="<?php echo $item["img"]; ?>" alt="<?php echo $item["name"]; ?>">
</a>
<?php } ?>


<?php // Version two
?>

<?php 
foreach($items as item){ 
	echo '<a href="#">';
	echo '<img src="' . $item["img"] . '" alt="' . $item["name"] . '">';
	echo '</a>';
} 
?>


<?php 
function get_thumb_html($item) {

	$output = "";
	$output = $output . '<a href="#">';
	$output = $output . '<img src="' . $item["img"] . '" alt="' . $item["name"] . '">';
	$output = $output . '</a>';


return $output;
};
?>

//in INDEX: this goes through every item of the array and echoes it in html

<?php 

$total_items = count($items);
$position = 0;
foreach($items as $item) {
	$position = $position + 1;
	//use conditionals to determine which thumbnails are displayed
	// concatonate together the items u want displayed as thumbnails into a variable and return that variable
	echo get_thumb_html($item);
}
?>
















































?>