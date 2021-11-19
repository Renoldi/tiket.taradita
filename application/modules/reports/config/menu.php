<?php

// module name
$HmvcMenu["reports"] = array(
    //set icon
    "icon"           => "<i class='fa fa-pie-chart'></i>", 

    // booking
    'booking'  => array( 
        "controller" => "booking",
        "method"     => "report",
        "permission" => "read"
    ),
    
    // assign
    'assign'  => array( 
        "controller" => "assign",
        "method"     => "report",
        "permission" => "read"
    ), 
    // vehicle
    'vehicle'  => array( 
        "controller" => "assign",
        "method"     => "report_vehicle",
        "permission" => "read"
    ),
    // vehicle trip
    'trip'  => array( 
        "controller" => "assign",
        "method"     => "report_vehicle_trip",
        "permission" => "read"
    ),
     // agent log
    'agent_log'  => array( 
        "controller" => "agent",
        "method"     => "agent_log",
        "permission" => "read"
    ),
      // agent log
    'sales_report'  => array( 
        "controller" => "sales_report",
        "method"     => "sales_report",
        "permission" => "read"
    ),
  
);
   

 