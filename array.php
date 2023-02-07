<?php
/*---------------
---Indexed array
---------------- */

//First way
$heading = array("Update software", "Clean database", "Cron job running", "Fix and squish bugs");

//Second way
$heading = ["Update software", "Clean database", "Cron job running", "Fix and squish bugs"];

//Third way
$heading = array();
$heading[] = "Update software";
$heading[] = "Clean database";
$heading[] = "Cron job running";
$heading[] = "Fix and squish bugs";

/*--------------------
---Associative array
---------------------- */

//First way
$software_list = array(
    'name' => "Update software",
    'percentage' => "55"
);

//Second way
$software_list = [
    'name' => "Update software",
    'percentage' => "55"
];

//Third way
$software_list = [];
$software_list['name'] = "Update software";
$software_list['percentage'] = "55";
