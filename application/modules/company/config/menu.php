<?php

// module name
$HmvcMenu["company"] = array(
    //set icon
    "icon" => "<i class='fa fa-user' aria-hidden='true'></i>", 
    
    'company_list'   => array(  
        "controller" => "company_controller",
        "method"     => "create_company", 
        "permission" => "read"
    ),
   
 );
   

 