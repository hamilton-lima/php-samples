<pre>
<?php
$columns = array();
$data = array();

// add the data from the database
$data["line1"]["column1"] += 34;
$data["line2"]["column1"] += 34;
$data["line3"]["column4"] += 34;
$data["line5"]["column2"] += 34;

$data["line1"]["column1"] += 34;
$data["line3"]["column4"] += 34;

// find the columns
foreach ($data as $line => $column) {
	foreach ($column as $cname => $value) {
		if( ! in_array($cname, $columns) ){
			$columns[] = $cname;
		}
    }
}

sort($columns);

// display column names
echo " \t";
foreach ($columns as $index => $cname) {
	echo $cname . "\t";
}
echo "\n";

// display the data
foreach ($data as $line => $column) {
	echo $line . "\t";
	foreach ($columns as $index => $cname) {
		echo $column[$cname] . "\t";
    }
    echo "\n";
}
?>
</pre>