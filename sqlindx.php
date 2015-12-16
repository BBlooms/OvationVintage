<?php

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

$total=0;

while($row = mysql_fetch_array($results)){
	echo "Item: " . $row['designer'] . " " . $row['type'] . " " . $row['imgSource']. "<br/>";
	$total = $total+1;
}


echo "Total " . $total;

?>

<!DOCTYPE html>
<html>
  <head>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,300,500' rel='stylesheet' type='text/css'>
    <title>test sql</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </style>
  </head>
  <body>

          <div class="span12">
            <form action="#" method="GET" name="filters">
            Designers: <label class="checkbox inline"><input type="checkbox" name="designer[]" value="chanel">Chanel</label> 
            <label class="checkbox inline"><input type="checkbox" name="designer[]" value="gucci">Gucci</label> 
            <label class="checkbox inline"><input type="checkbox" name="designer[]" value="dior">Dior</label> 
            <label class="checkbox inline"><input type="checkbox" name="designer[]" value="unsigned">Unsigned</label>
            <br />
            Type: <label class="checkbox inline"><input type="checkbox" name="type[]" value="necklace">Necklace</label> 
            <label class="checkbox inline"><input type="checkbox" name="type[]" value="bracelet">Bracelet</label> 
            <label class="checkbox inline"><input type="checkbox" name="type[]" value="broach">Broach</label> 
            <label class="checkbox inline"><input type="checkbox" name="type[]" value="earrings">Earrings</label>
            <label class="checkbox inline"><input type="checkbox" name="type[]" value="ring">Ring</label>
            <div class="form-actions">
              <button type="submit" class="btn" value="Go">Filter</button>
              <button type="reset" class="btn">Reset Filter</button>
            </div>
            </form>

      <br/>
      <br/>



  </body>
</html>

