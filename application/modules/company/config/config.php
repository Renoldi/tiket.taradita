<?php
// module directory name
$HmvcConfig['company']["_title"]     = "Copmany";
$HmvcConfig['company']["_description"] = "Company information";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['company']['_database'] = true;
$HmvcConfig['company']["_tables"] = array( 
	'company_info', 
);
