<table border="1">
<?php
$columns = array();
$data = array();

// add the data from the database
// sort the data in the SQL
$data[] = array("l" => "line1", "c"=> "column1", "v" => "AAA");
$data[] = array("l" => "line1", "c"=> "column1", "v" => "BBB");
$data[] = array("l" => "line1", "c"=> "column3", "v" => "CCC");
$data[] = array("l" => "line2", "c"=> "column2", "v" => "AAA");
$data[] = array("l" => "line3", "c"=> "column2", "v" => "AAA");

// find the columns
foreach ($data as $line => $column) {
	if( ! in_array($column["c"], $columns) ){
		$columns[] = $column["c"];
	}
}

sort($columns);

// display column names
echo "<tr>";
echo "<td>&nbsp;</td>";
foreach ($columns as $index => $cname) {
	echo "<td>".$cname."</td>";
}
echo "</tr>";

$name = '';
$count = 0;
// display the data
foreach ($data as $line => $column) {
	echo "<tr>";
	
	if( $column['l'] == $name ){
		$count ++;
	} else {
		$name = $column['l'];
		$count = 0;
	}

	if( $count == 0 ){
		echo "<td>".$name."</td>";
	} else {
		echo "<td>&nbsp;</td>";
	}	

	foreach ($columns as $index => $cname) {
		if( $column['c'] == $cname ){
			echo "<td>".$column['v']."</td>";
		} else {
			echo "<td>&nbsp;</td>";
		}
    }
    echo "</tr>";
}
?>
</table>