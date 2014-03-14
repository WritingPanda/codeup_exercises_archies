<?php 

$mysqli = @new mysqli('127.0.0.1', 'omar', 'geekdom1100', 'codeup_mysqli_test_db');

if ($mysqli->connect_errno) {
	echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error . PHP_EOL;
} else {
	echo $mysqli->host_info . PHP_EOL;	
}

// Create variable query and create table
$tableCreate = "CREATE TABLE national_parks (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	location VARCHAR(50) NOT NULL,
	description TEXT  NOT NULL,
	date_established DATE  NOT NULL,
	area_in_acres NUMERIC(10,2) DEFAULT 0,
	PRIMARY KEY (id)
	);";

// Run query, if there are errors then display them
if (!$mysqli->query($tableCreate)) {
    throw new Exception("Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error);
}

// Create INSERT query
$parks = [
    [
    'name' => 'Acadia', 
    'location' => 'Maine', 
    'description' => "Covering most of Mount Desert Island and other coastal islands, Acadia features the tallest mountain on the Atlantic coast of the United States, granite peaks, ocean shoreline, woodlands, and lakes. There are freshwater, estuary, forest, and intertidal habitats.", 
    'date_established' => '1919-02-26', 
    'area_in_acres' => '47389.67'
    ],
    [
    'name' => 'American Samoa', 
    'location' => 'American Samoa', 
    'description' => "The southernmost national park is on three Samoan islands and protects coral reefs, rainforests, volcanic mountains, and white beaches. The area is also home to flying foxes, brown boobies, sea turtles, and 900 species of fish.", 
    'date_established' => '1988-10-31', 
    'area_in_acres' => '9000'
    ],
    [
    'name' => 'Arches', 
    'location' => 'Utah', 
    'description' => "This site features more than 2,000 natural sandstone arches, including the Delicate Arch. In a desert climate millions of years of erosion have led to these structures, and the arid ground has life-sustaining soil crust and potholes, natural water-collecting basins. Other geologic formations are stone columns, spires, fins, and towers.", 
    'date_established' => '1971-11-12', 
    'area_in_acres' => '76518.98'
    ],
    [
    'name' => 'Badlands', 
    'location' => 'South Dakota', 
    'description' => "The Badlands are a collection of buttes, pinnacles, spires, and grass prairies. It has the world's richest fossil beds from the Oligocene epoch, and there is wildlife including bison, bighorn sheep, black-footed ferrets, and swift foxes.", 
    'date_established' => '1978-11-10', 
    'area_in_acres' => '242755.94'
    ],
    [
    'name' => 'Big Bend', 
    'location' => 'Texas', 
    'description' => "Named for the Bend of the Rio Grande along the US–Mexico border, this park includes a part of the Chihuahuan Desert. A wide variety of Cretaceous and Tertiary fossils as well as cultural artifacts of Native Americans exist within its borders.", 
    'date_established' => '1944-06-12', 
    'area_in_acres' => '801163.21'
    ],
    [
    'name' => 'Biscayne', 
    'location' => 'Florida', 
    'description' => "Located in Biscayne Bay, this park at the north end of the Florida Keys has four interrelated marine ecosystems: mangrove forest, the Bay, the Keys, and coral reefs. Threatened animals include the West Indian Manatee, American crocodile, various sea turtles, and peregrine falcon.", 
    'date_established' => '1980-06-28', 
    'area_in_acres' => '172924.07'
    ],
    [
    'name' => 'Black Canyon of the Gunnison', 
    'location' => 'Colorado', 
    'description' => "The park protects a quarter of the Gunnison River, which has dark canyon walls from the Precambrian era. The canyon has very steep descents, and it is a site for river rafting and rock climbing. The narrow, steep canyon, made of gneiss and schist, is often in shadow, appearing black.", 
    'date_established' => '1999-10-21', 
    'area_in_acres' => '32950.03'
    ],
    [
    'name' => 'Bryce Canyon', 
    'location' => 'Utah', 
    'description' => "Bryce Canyon is a giant natural amphitheatre along the Paunsaugunt Plateau. The unique area has hundreds of tall sandstone hoodoos formed by erosion. The region was originally settled by Native Americans and later by Mormon pioneers.", 
    'date_established' => '1928-02-25', 
    'area_in_acres' => '35835.08'
    ],
    [
    'name' => 'Canyonlands', 
    'location' => 'Utah', 
    'description' => "This landscape was eroded into canyons, buttes, and mesas by the Colorado River, Green River, and their tributaries, which divide the park into three districts. There are rock pinnacles and other naturally sculpted rock, as well as artifacts from Ancient Pueblo Peoples.", 
    'date_established' => '1964-09-12', 
    'area_in_acres' => '337597.83'
    ],
    [
    'name' => 'Capitol Reef', 
    'location' => 'Utah', 
    'description' => "The park's Waterpocket Fold is a 100-mile (160 km) monocline that shows the Earth's geologic layers. Other natural features are monoliths and sandstone domes and cliffs shaped like the United States Capitol.", 
    'date_established' => '1971-12-18', 
    'area_in_acres' => '241904.26'
    ]
];

foreach ($parks as $park) {
	$escaped_desc = $mysqli->real_escape_string($park['description']);
    $query = "INSERT INTO national_parks (name, location, description, date_established, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}', '{$escaped_desc}', '{$park['date_established']}', '{$park['area_in_acres']}');";

	if (!$mysqli->query($query)) {
    	throw new Exception("Query failed: (" . $mysqli->errno . ") " . $mysqli->error);
	}
}

?>