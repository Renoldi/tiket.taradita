<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-10-22 01:15:12 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:16:46 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:18:05 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:22:09 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:22:29 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:22:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND (!FIND_IN_SET(DAYOFWEEK('2021-10-21'),ta.`weekend`))
AND pp.`price`
GROUP...' at line 38 - Invalid query: SELECT 
            ta.`trip_id` AS trip_id_no,
            ta.`company_id`,
            ta.`route`,
            ta.`shedule_id`,
            tr.`name` AS trip_route_name, 
            tl1.`name` AS pickup_trip,
            tl2.`name` AS drop_trip,
            ta.`type`,
            tp.*,
            fc.*,
            tp.`total_seat` AS fleet_seats, 
            pp.`price` AS price,
            pp.`children_price`,
            pp.`special_price`,
            tr.`approximate_time` AS duration,
            tr.`stoppage_points`,
            tr.`distance`,
            shedule.`start`,
            shedule.`end`,
            tras.`closed_by_id`,
            tras.`assign_time`,
            com.`company_id`,
            com.`company_name`
FROM trip AS ta
LEFT JOIN shedule ON shedule.`shedule_id` = ta.`shedule_id`
LEFT JOIN trip_route AS tr ON tr.`id` = ta.`route`
LEFT JOIN trip_assign AS tras ON tras.`trip` = ta.`trip_id`
LEFT JOIN fleet_type AS tp ON tp.`id` = ta.`type`
LEFT JOIN fleet_category AS fc ON fc.`id` = ta.`fleet_category` 
LEFT JOIN company_info AS com ON com.`company_id` = ta.`company_id`
LEFT JOIN pri_price AS pp ON pp.`route_id` = ta.`route` AND pp.`vehicle_type_id`= ta.`type`
LEFT JOIN trip_location AS tl1 ON tl1.`id` = tr.`start_point`
LEFT JOIN trip_location AS tl2 ON tl2.`id` = tr.`end_point`
WHERE (FIND_IN_SET('Banda Aceh',tr.`stoppage_points`))
AND (FIND_IN_SET('Takengon',tr.`stoppage_points`))
AND ta.`fleet_type` = 
AND (!FIND_IN_SET(DAYOFWEEK('2021-10-21'),ta.`weekend`))
AND pp.`price`
GROUP BY ta.`trip_id`


ERROR - 2021-10-22 01:22:59 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp74\htdocs\bisaceh\application\modules\website\models\Website_model.php 214
ERROR - 2021-10-22 01:23:25 --> Query error: Unknown table 'bisaceh.fc' - Invalid query: SELECT 
            ta.`trip_id` AS trip_id_no,
            ta.`company_id`,
            ta.`route`,
            ta.`shedule_id`,
            tr.`name` AS trip_route_name, 
            tl1.`name` AS pickup_trip,
            tl2.`name` AS drop_trip,
            ta.`type`,
            tp.*,
            fc.*,
            tp.`total_seat` AS fleet_seats, 
            pp.`price` AS price,
            pp.`children_price`,
            pp.`special_price`,
            tr.`approximate_time` AS duration,
            tr.`stoppage_points`,
            tr.`distance`,
            shedule.`start`,
            shedule.`end`,
            tras.`closed_by_id`,
            tras.`assign_time`,
            com.`company_id`,
            com.`company_name`
FROM trip AS ta
LEFT JOIN shedule ON shedule.`shedule_id` = ta.`shedule_id`
LEFT JOIN trip_route AS tr ON tr.`id` = ta.`route`
LEFT JOIN trip_assign AS tras ON tras.`trip` = ta.`trip_id`
LEFT JOIN fleet_type AS tp ON tp.`id` = ta.`type`
LEFT JOIN company_info AS com ON com.`company_id` = ta.`company_id`
LEFT JOIN pri_price AS pp ON pp.`route_id` = ta.`route` AND pp.`vehicle_type_id`= ta.`type`
LEFT JOIN trip_location AS tl1 ON tl1.`id` = tr.`start_point`
LEFT JOIN trip_location AS tl2 ON tl2.`id` = tr.`end_point`
WHERE (FIND_IN_SET('Banda Aceh',tr.`stoppage_points`))
AND (FIND_IN_SET('Takengon',tr.`stoppage_points`))
AND ta.`fleet_category` = 1
AND (!FIND_IN_SET(DAYOFWEEK('2021-10-21'),ta.`weekend`))
AND pp.`price`
GROUP BY ta.`trip_id`


ERROR - 2021-10-22 01:23:25 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp74\htdocs\bisaceh\application\modules\website\models\Website_model.php 213
ERROR - 2021-10-22 01:23:55 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:25:55 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:26:18 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 687
ERROR - 2021-10-22 01:26:18 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 712
ERROR - 2021-10-22 01:26:18 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 722
ERROR - 2021-10-22 01:26:18 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 735
ERROR - 2021-10-22 01:26:18 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 746
ERROR - 2021-10-22 01:26:18 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 759
ERROR - 2021-10-22 01:26:18 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 769
ERROR - 2021-10-22 01:26:18 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 779
ERROR - 2021-10-22 01:26:20 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:26:54 --> Query error: Unknown column 'ta.fleet_type' in 'where clause' - Invalid query: SELECT 
            ta.`trip_id` AS trip_id_no,
            ta.`company_id`,
            ta.`route`,
            ta.`shedule_id`,
            tr.`name` AS trip_route_name, 
            tl1.`name` AS pickup_trip,
            tl2.`name` AS drop_trip,
            ta.`type`,
            ta.`fleet_category`,
            tp.*,
            fc.*,
            tp.`total_seat` AS fleet_seats, 
            pp.`price` AS price,
            pp.`children_price`,
            pp.`special_price`,
            tr.`approximate_time` AS duration,
            tr.`stoppage_points`,
            tr.`distance`,
            shedule.`start`,
            shedule.`end`,
            tras.`closed_by_id`,
            tras.`assign_time`,
            com.`company_id`,
            com.`company_name`
FROM trip AS ta
LEFT JOIN shedule ON shedule.`shedule_id` = ta.`shedule_id`
LEFT JOIN trip_route AS tr ON tr.`id` = ta.`route`
LEFT JOIN trip_assign AS tras ON tras.`trip` = ta.`trip_id`
LEFT JOIN fleet_type AS tp ON tp.`id` = ta.`type`
LEFT JOIN fleet_category AS fc ON fc.`id` = ta.`fleet_category` 
LEFT JOIN company_info AS com ON com.`company_id` = ta.`company_id`
LEFT JOIN pri_price AS pp ON pp.`route_id` = ta.`route` AND pp.`vehicle_type_id`= ta.`type`
LEFT JOIN trip_location AS tl1 ON tl1.`id` = tr.`start_point`
LEFT JOIN trip_location AS tl2 ON tl2.`id` = tr.`end_point`
WHERE (FIND_IN_SET('Banda Aceh',tr.`stoppage_points`))
AND (FIND_IN_SET('Takengon',tr.`stoppage_points`))
AND ta.`fleet_type` = 1
AND (!FIND_IN_SET(DAYOFWEEK('2021-10-21'),ta.`weekend`))
AND pp.`price`
GROUP BY ta.`trip_id`


ERROR - 2021-10-22 01:26:54 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp74\htdocs\bisaceh\application\modules\website\models\Website_model.php 215
ERROR - 2021-10-22 01:27:32 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:28:54 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:29:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 687
ERROR - 2021-10-22 01:29:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 712
ERROR - 2021-10-22 01:29:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 722
ERROR - 2021-10-22 01:29:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 735
ERROR - 2021-10-22 01:29:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 746
ERROR - 2021-10-22 01:29:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 759
ERROR - 2021-10-22 01:29:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 769
ERROR - 2021-10-22 01:29:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 779
ERROR - 2021-10-22 01:29:40 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:30:16 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:30:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 687
ERROR - 2021-10-22 01:30:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 712
ERROR - 2021-10-22 01:30:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 722
ERROR - 2021-10-22 01:30:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 735
ERROR - 2021-10-22 01:30:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 746
ERROR - 2021-10-22 01:30:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 759
ERROR - 2021-10-22 01:30:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 769
ERROR - 2021-10-22 01:30:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 779
ERROR - 2021-10-22 01:30:32 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:31:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 687
ERROR - 2021-10-22 01:31:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 712
ERROR - 2021-10-22 01:31:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 722
ERROR - 2021-10-22 01:31:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 735
ERROR - 2021-10-22 01:31:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 746
ERROR - 2021-10-22 01:31:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 759
ERROR - 2021-10-22 01:31:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 769
ERROR - 2021-10-22 01:31:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 779
ERROR - 2021-10-22 01:31:22 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:31:40 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 01:31:40 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 01:31:40 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 01:31:40 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 01:31:40 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 01:31:40 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 01:31:40 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 01:31:40 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 01:31:40 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 01:31:40 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 01:31:42 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:31:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 687
ERROR - 2021-10-22 01:31:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 712
ERROR - 2021-10-22 01:31:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 722
ERROR - 2021-10-22 01:31:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 735
ERROR - 2021-10-22 01:31:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 746
ERROR - 2021-10-22 01:31:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 759
ERROR - 2021-10-22 01:31:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 769
ERROR - 2021-10-22 01:31:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 779
ERROR - 2021-10-22 01:32:08 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:32:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 01:32:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 01:32:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 01:32:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 01:32:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 01:32:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 01:32:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 01:32:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 01:32:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 01:32:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 01:32:26 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:33:00 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 01:33:00 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 01:33:00 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 01:33:00 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 01:33:00 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 01:33:00 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 01:33:00 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 01:33:00 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 01:33:00 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 01:33:00 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 01:33:00 --> Query error: Unknown column 'ta.tp.type' in 'on clause' - Invalid query: SELECT 
            ta.`trip_id` AS trip_id_no,
            ta.`company_id`,
            ta.`route`,
            ta.`shedule_id`,
            tr.`name` AS trip_route_name, 
            tl1.`name` AS pickup_trip,
            tl2.`name` AS drop_trip,
            ta.`type`,
            ta.`fleet_category`,
            tp.`total_seat` AS fleet_seats, 
            pp.`price` AS price,
            pp.`children_price`,
            pp.`special_price`,
            tr.`approximate_time` AS duration,
            tr.`stoppage_points`,
            tr.`distance`,
            shedule.`start`,
            shedule.`end`,
            tras.`closed_by_id`,
            tras.`assign_time`,
            com.`company_id`,
            com.`company_name`
FROM trip AS ta
LEFT JOIN shedule ON shedule.`shedule_id` = ta.`shedule_id`
LEFT JOIN trip_route AS tr ON tr.`id` = ta.`route`
LEFT JOIN trip_assign AS tras ON tras.`trip` = ta.`trip_id`
LEFT JOIN fleet_type AS tp ON tp.`id` = ta.`type`
LEFT JOIN fleet_category AS fc ON fc.`id` = ta.`tp.type` 
LEFT JOIN company_info AS com ON com.`company_id` = ta.`company_id`
LEFT JOIN pri_price AS pp ON pp.`route_id` = ta.`route` AND pp.`vehicle_type_id`= ta.`type`
LEFT JOIN trip_location AS tl1 ON tl1.`id` = tr.`start_point`
LEFT JOIN trip_location AS tl2 ON tl2.`id` = tr.`end_point`
WHERE (FIND_IN_SET('Banda Aceh',tr.`stoppage_points`))
AND (FIND_IN_SET('Takengon',tr.`stoppage_points`))
AND ta.`fleet_category` = 1
AND (!FIND_IN_SET(DAYOFWEEK('2021-10-21'),ta.`weekend`))
AND pp.`price`
GROUP BY ta.`trip_id`


ERROR - 2021-10-22 01:33:00 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp74\htdocs\bisaceh\application\modules\website\models\Website_model.php 213
ERROR - 2021-10-22 01:33:12 --> Query error: Column 'type' in on clause is ambiguous - Invalid query: SELECT 
            ta.`trip_id` AS trip_id_no,
            ta.`company_id`,
            ta.`route`,
            ta.`shedule_id`,
            tr.`name` AS trip_route_name, 
            tl1.`name` AS pickup_trip,
            tl2.`name` AS drop_trip,
            ta.`type`,
            ta.`fleet_category`,
            tp.`total_seat` AS fleet_seats, 
            pp.`price` AS price,
            pp.`children_price`,
            pp.`special_price`,
            tr.`approximate_time` AS duration,
            tr.`stoppage_points`,
            tr.`distance`,
            shedule.`start`,
            shedule.`end`,
            tras.`closed_by_id`,
            tras.`assign_time`,
            com.`company_id`,
            com.`company_name`
FROM trip AS ta
LEFT JOIN shedule ON shedule.`shedule_id` = ta.`shedule_id`
LEFT JOIN trip_route AS tr ON tr.`id` = ta.`route`
LEFT JOIN trip_assign AS tras ON tras.`trip` = ta.`trip_id`
LEFT JOIN fleet_type AS tp ON tp.`id` = ta.`type`
LEFT JOIN fleet_category AS fc ON fc.`id` = `type` 
LEFT JOIN company_info AS com ON com.`company_id` = ta.`company_id`
LEFT JOIN pri_price AS pp ON pp.`route_id` = ta.`route` AND pp.`vehicle_type_id`= ta.`type`
LEFT JOIN trip_location AS tl1 ON tl1.`id` = tr.`start_point`
LEFT JOIN trip_location AS tl2 ON tl2.`id` = tr.`end_point`
WHERE (FIND_IN_SET('Banda Aceh',tr.`stoppage_points`))
AND (FIND_IN_SET('Takengon',tr.`stoppage_points`))
AND ta.`fleet_category` = 1
AND (!FIND_IN_SET(DAYOFWEEK('2021-10-21'),ta.`weekend`))
AND pp.`price`
GROUP BY ta.`trip_id`


ERROR - 2021-10-22 01:33:12 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp74\htdocs\bisaceh\application\modules\website\models\Website_model.php 213
ERROR - 2021-10-22 01:33:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`type` 
LEFT JOIN company_info AS com ON com.`company_id` = ta.`company_id`
L...' at line 29 - Invalid query: SELECT 
            ta.`trip_id` AS trip_id_no,
            ta.`company_id`,
            ta.`route`,
            ta.`shedule_id`,
            tr.`name` AS trip_route_name, 
            tl1.`name` AS pickup_trip,
            tl2.`name` AS drop_trip,
            ta.`type`,
            ta.`fleet_category`,
            tp.`total_seat` AS fleet_seats, 
            pp.`price` AS price,
            pp.`children_price`,
            pp.`special_price`,
            tr.`approximate_time` AS duration,
            tr.`stoppage_points`,
            tr.`distance`,
            shedule.`start`,
            shedule.`end`,
            tras.`closed_by_id`,
            tras.`assign_time`,
            com.`company_id`,
            com.`company_name`
FROM trip AS ta
LEFT JOIN shedule ON shedule.`shedule_id` = ta.`shedule_id`
LEFT JOIN trip_route AS tr ON tr.`id` = ta.`route`
LEFT JOIN trip_assign AS tras ON tras.`trip` = ta.`trip_id`
LEFT JOIN fleet_type AS tp ON tp.`id` = ta.`type`
LEFT JOIN fleet_category AS fc ON fc.`id` = tp`type` 
LEFT JOIN company_info AS com ON com.`company_id` = ta.`company_id`
LEFT JOIN pri_price AS pp ON pp.`route_id` = ta.`route` AND pp.`vehicle_type_id`= ta.`type`
LEFT JOIN trip_location AS tl1 ON tl1.`id` = tr.`start_point`
LEFT JOIN trip_location AS tl2 ON tl2.`id` = tr.`end_point`
WHERE (FIND_IN_SET('Banda Aceh',tr.`stoppage_points`))
AND (FIND_IN_SET('Takengon',tr.`stoppage_points`))
AND ta.`fleet_category` = 1
AND (!FIND_IN_SET(DAYOFWEEK('2021-10-21'),ta.`weekend`))
AND pp.`price`
GROUP BY ta.`trip_id`


ERROR - 2021-10-22 01:33:27 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp74\htdocs\bisaceh\application\modules\website\models\Website_model.php 213
ERROR - 2021-10-22 01:33:35 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:33:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 01:33:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 01:33:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 01:33:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 01:33:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 01:33:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 01:33:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 01:33:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 01:33:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 01:33:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 01:33:44 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:34:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 01:34:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 01:34:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 01:34:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 01:34:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 01:34:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 01:34:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 01:34:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 01:34:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 01:34:16 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 01:34:17 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:34:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 01:34:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 01:34:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 01:34:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 01:34:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 01:34:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 01:34:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 01:34:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 01:34:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 01:34:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 01:34:39 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:35:06 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:35:19 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:35:39 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:35:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 687
ERROR - 2021-10-22 01:35:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 712
ERROR - 2021-10-22 01:35:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 722
ERROR - 2021-10-22 01:35:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 735
ERROR - 2021-10-22 01:35:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 746
ERROR - 2021-10-22 01:35:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 759
ERROR - 2021-10-22 01:35:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 769
ERROR - 2021-10-22 01:35:49 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 779
ERROR - 2021-10-22 01:35:52 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:36:17 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:36:30 --> 404 Page Not Found: /index
ERROR - 2021-10-22 01:36:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 01:36:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 01:36:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 01:36:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 01:36:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 01:36:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 01:36:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 01:36:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 01:36:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 01:36:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 01:37:15 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 06:37:18 --> Severity: Warning --> sizeof(): Parameter must be an array or an object that implements Countable C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 88
ERROR - 2021-10-22 06:37:18 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 155
ERROR - 2021-10-22 01:49:41 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\trip\controllers\Trip.php 42
ERROR - 2021-10-22 01:50:50 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\trip\controllers\Trip.php 42
ERROR - 2021-10-22 01:51:06 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\trip\controllers\Trip.php 42
ERROR - 2021-10-22 01:51:26 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\trip\controllers\Trip.php 42
ERROR - 2021-10-22 01:51:26 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\trip\controllers\Trip.php 42
ERROR - 2021-10-22 01:52:07 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\trip\controllers\Trip.php 42
ERROR - 2021-10-22 01:52:18 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\trip\controllers\Trip.php 42
ERROR - 2021-10-22 01:52:18 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\trip\controllers\Trip.php 42
ERROR - 2021-10-22 01:56:48 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\fleet\controllers\Fleet_type.php 34
ERROR - 2021-10-22 01:56:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp74\htdocs\bisaceh\application\modules\fleet\views\type\form.php 350
ERROR - 2021-10-22 01:56:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp74\htdocs\bisaceh\application\modules\fleet\views\type\form.php 363
ERROR - 2021-10-22 01:57:11 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\fleet\controllers\Fleet_type.php 34
ERROR - 2021-10-22 01:57:11 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\fleet\controllers\Fleet_type.php 34
ERROR - 2021-10-22 01:57:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp74\htdocs\bisaceh\application\modules\fleet\views\type\form.php 350
ERROR - 2021-10-22 01:57:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp74\htdocs\bisaceh\application\modules\fleet\views\type\form.php 363
ERROR - 2021-10-22 01:58:52 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\fleet\controllers\Fleet_type.php 34
ERROR - 2021-10-22 01:58:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp74\htdocs\bisaceh\application\modules\fleet\views\type\form.php 350
ERROR - 2021-10-22 01:58:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp74\htdocs\bisaceh\application\modules\fleet\views\type\form.php 363
ERROR - 2021-10-22 01:59:16 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\fleet\controllers\Fleet_type.php 34
ERROR - 2021-10-22 01:59:16 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\fleet\controllers\Fleet_type.php 34
ERROR - 2021-10-22 01:59:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp74\htdocs\bisaceh\application\modules\fleet\views\type\form.php 350
ERROR - 2021-10-22 01:59:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp74\htdocs\bisaceh\application\modules\fleet\views\type\form.php 363
ERROR - 2021-10-22 02:00:42 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\trip\controllers\Trip.php 42
ERROR - 2021-10-22 02:00:55 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\trip\controllers\Trip.php 42
ERROR - 2021-10-22 02:00:55 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\trip\controllers\Trip.php 42
ERROR - 2021-10-22 02:01:05 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\trip\controllers\Trip.php 42
ERROR - 2021-10-22 02:01:16 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\trip\controllers\Trip.php 42
ERROR - 2021-10-22 02:01:17 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\trip\controllers\Trip.php 42
ERROR - 2021-10-22 02:02:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 02:02:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 02:02:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 02:02:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 02:02:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 02:02:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 02:02:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 02:02:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 02:02:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 02:02:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 02:03:06 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\fleet\controllers\Fleet_type.php 34
ERROR - 2021-10-22 02:03:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp74\htdocs\bisaceh\application\modules\fleet\views\type\form.php 350
ERROR - 2021-10-22 02:03:07 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp74\htdocs\bisaceh\application\modules\fleet\views\type\form.php 363
ERROR - 2021-10-22 02:03:39 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\fleet\controllers\Fleet_type.php 34
ERROR - 2021-10-22 02:03:39 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\fleet\controllers\Fleet_type.php 34
ERROR - 2021-10-22 02:03:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp74\htdocs\bisaceh\application\modules\fleet\views\type\form.php 350
ERROR - 2021-10-22 02:03:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp74\htdocs\bisaceh\application\modules\fleet\views\type\form.php 363
ERROR - 2021-10-22 02:05:03 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\trip\controllers\Trip.php 42
ERROR - 2021-10-22 02:05:13 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\trip\controllers\Trip.php 42
ERROR - 2021-10-22 02:05:13 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp74\htdocs\bisaceh\application\modules\trip\controllers\Trip.php 42
ERROR - 2021-10-22 03:42:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 687
ERROR - 2021-10-22 03:42:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 712
ERROR - 2021-10-22 03:42:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 722
ERROR - 2021-10-22 03:42:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 735
ERROR - 2021-10-22 03:42:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 746
ERROR - 2021-10-22 03:42:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 759
ERROR - 2021-10-22 03:42:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 769
ERROR - 2021-10-22 03:42:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 779
ERROR - 2021-10-22 03:43:15 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 03:43:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 03:43:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 03:43:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 03:43:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 03:43:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 03:43:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 03:43:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 03:43:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 03:43:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 03:43:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 03:43:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 687
ERROR - 2021-10-22 03:43:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 712
ERROR - 2021-10-22 03:43:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 722
ERROR - 2021-10-22 03:43:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 735
ERROR - 2021-10-22 03:43:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 746
ERROR - 2021-10-22 03:43:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 759
ERROR - 2021-10-22 03:43:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 769
ERROR - 2021-10-22 03:43:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 779
ERROR - 2021-10-22 03:49:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 687
ERROR - 2021-10-22 03:49:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 712
ERROR - 2021-10-22 03:49:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 722
ERROR - 2021-10-22 03:49:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 735
ERROR - 2021-10-22 03:49:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 746
ERROR - 2021-10-22 03:49:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 759
ERROR - 2021-10-22 03:49:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 769
ERROR - 2021-10-22 03:49:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 779
ERROR - 2021-10-22 03:49:32 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 08:49:34 --> Severity: Warning --> sizeof(): Parameter must be an array or an object that implements Countable C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 88
ERROR - 2021-10-22 08:49:34 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 155
ERROR - 2021-10-22 04:51:16 --> 404 Page Not Found: /index
ERROR - 2021-10-22 04:51:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 04:51:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 04:51:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 04:51:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 04:51:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 04:51:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 04:51:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 04:51:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 04:51:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 04:51:24 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 04:51:27 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 09:51:29 --> Severity: Warning --> sizeof(): Parameter must be an array or an object that implements Countable C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 88
ERROR - 2021-10-22 09:51:29 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 155
ERROR - 2021-10-22 17:31:08 --> 404 Page Not Found: /index
ERROR - 2021-10-22 17:31:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 17:31:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 17:31:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 17:31:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 17:31:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 17:31:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 17:31:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 17:31:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 17:31:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 17:31:28 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 18:24:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 18:24:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 18:24:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 18:24:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 18:24:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 18:24:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 18:24:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 18:24:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 18:24:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 18:24:21 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 18:24:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 18:24:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 18:24:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 18:24:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 18:24:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 18:24:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 18:24:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 18:24:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 18:24:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 18:24:27 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 18:24:29 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 23:24:31 --> Severity: Warning --> sizeof(): Parameter must be an array or an object that implements Countable C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 88
ERROR - 2021-10-22 23:24:31 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 155
ERROR - 2021-10-22 18:24:55 --> 404 Page Not Found: /index
ERROR - 2021-10-22 18:27:14 --> 404 Page Not Found: /index
ERROR - 2021-10-22 18:27:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 18:27:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 18:27:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 18:27:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 18:27:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 18:27:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 18:27:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 18:27:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 18:27:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 18:27:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 18:27:20 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 23:27:22 --> Severity: Warning --> sizeof(): Parameter must be an array or an object that implements Countable C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 88
ERROR - 2021-10-22 23:27:22 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 155
ERROR - 2021-10-22 18:27:48 --> 404 Page Not Found: /index
ERROR - 2021-10-22 18:47:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 18:47:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 18:47:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 18:47:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 18:47:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 18:47:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 18:47:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 18:47:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 18:47:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 18:47:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 18:47:52 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 23:47:54 --> Severity: Warning --> sizeof(): Parameter must be an array or an object that implements Countable C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 88
ERROR - 2021-10-22 23:47:54 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 155
ERROR - 2021-10-22 18:49:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 18:49:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 18:49:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 18:49:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 18:49:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 18:49:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 18:49:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 18:49:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 18:49:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 18:49:17 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 18:49:20 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 23:49:23 --> Severity: Warning --> sizeof(): Parameter must be an array or an object that implements Countable C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 88
ERROR - 2021-10-22 23:49:23 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 155
ERROR - 2021-10-22 18:52:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 18:52:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 18:52:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 18:52:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 18:52:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 18:52:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 18:52:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 18:52:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 18:52:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 18:52:13 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 18:52:17 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 23:52:19 --> Severity: Warning --> sizeof(): Parameter must be an array or an object that implements Countable C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 88
ERROR - 2021-10-22 23:52:19 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 155
ERROR - 2021-10-22 18:53:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 18:53:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 18:53:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 18:53:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 18:53:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 18:53:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 18:53:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 18:53:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 18:53:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 18:53:02 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 18:55:17 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1035
ERROR - 2021-10-22 18:55:17 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:55:17 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1035
ERROR - 2021-10-22 18:55:17 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:55:17 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1035
ERROR - 2021-10-22 18:55:17 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:55:18 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1035
ERROR - 2021-10-22 18:55:18 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:55:18 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1035
ERROR - 2021-10-22 18:55:18 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:55:18 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1035
ERROR - 2021-10-22 18:55:18 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:55:19 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1035
ERROR - 2021-10-22 18:55:19 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:55:19 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1035
ERROR - 2021-10-22 18:55:19 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:55:19 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1035
ERROR - 2021-10-22 18:55:19 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:55:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 18:55:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 18:55:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 18:55:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 18:55:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 18:55:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 18:55:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 18:55:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 18:55:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 18:55:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 18:55:48 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1035
ERROR - 2021-10-22 18:55:48 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:55:48 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1035
ERROR - 2021-10-22 18:55:48 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:55:49 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1035
ERROR - 2021-10-22 18:55:49 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:55:49 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:55:49 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:55:50 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:55:50 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1035
ERROR - 2021-10-22 18:55:50 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:55:50 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1035
ERROR - 2021-10-22 18:55:50 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:56:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 18:56:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 18:56:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 18:56:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 18:56:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 18:56:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 18:56:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 18:56:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 18:56:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 18:56:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 18:56:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 18:56:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 18:56:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 18:56:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 18:56:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 18:56:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 18:56:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 18:56:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 18:56:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 18:56:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 18:57:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 18:57:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 18:57:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 18:57:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 18:57:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 18:57:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 18:57:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 18:57:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 18:57:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 18:57:37 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 18:58:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 18:58:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 18:58:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 18:58:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 18:58:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 18:58:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 18:58:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 18:58:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 18:58:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 18:58:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 18:58:51 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:58:52 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1035
ERROR - 2021-10-22 18:58:52 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 18:58:53 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 23:58:56 --> Severity: Warning --> sizeof(): Parameter must be an array or an object that implements Countable C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 88
ERROR - 2021-10-22 23:58:56 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 155
ERROR - 2021-10-22 19:03:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 19:03:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 19:03:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 19:03:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 19:03:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 19:03:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 19:03:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 19:03:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 19:03:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 19:03:34 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 19:03:44 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1036
ERROR - 2021-10-22 19:04:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 19:04:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 19:04:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 19:04:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 19:04:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 19:04:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 19:04:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 19:04:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 19:04:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 19:04:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 19:04:13 --> 404 Page Not Found: /index
ERROR - 2021-10-22 19:07:38 --> 404 Page Not Found: /index
ERROR - 2021-10-22 19:07:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 19:07:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 19:07:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 19:07:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 19:07:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 19:07:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 19:07:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 19:07:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 19:07:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 19:07:42 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 19:08:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 19:08:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 19:08:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 19:08:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 19:08:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 19:08:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 19:08:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 19:08:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 19:08:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 19:08:46 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 19:09:10 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 19:10:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 19:10:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 19:10:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 19:10:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 19:10:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 19:10:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 19:10:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 19:10:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 19:10:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 19:10:03 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 19:10:09 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 19:10:52 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 19:10:52 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 19:10:52 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 19:10:52 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 19:10:52 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 19:10:52 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 19:10:52 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 19:10:52 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 19:10:52 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 19:10:52 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 19:11:01 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1033
ERROR - 2021-10-22 19:11:01 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 19:11:02 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1033
ERROR - 2021-10-22 19:11:02 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 19:11:02 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1033
ERROR - 2021-10-22 19:11:02 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 19:11:03 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 19:11:04 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1033
ERROR - 2021-10-22 19:11:04 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 19:11:05 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1033
ERROR - 2021-10-22 19:11:05 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 19:11:06 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 19:12:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 19:12:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 19:12:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 19:12:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 19:12:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 19:12:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 19:12:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 19:12:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 19:12:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 19:12:29 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 19:14:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 19:14:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 19:14:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 19:14:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 19:14:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 19:14:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 19:14:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 19:14:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 19:14:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 19:14:25 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 19:16:19 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1033
ERROR - 2021-10-22 19:16:19 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 19:16:19 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 19:16:29 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1033
ERROR - 2021-10-22 19:16:29 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 19:16:31 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 19:16:37 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1033
ERROR - 2021-10-22 19:16:37 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 19:16:37 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 19:18:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 19:18:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 19:18:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 19:18:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 19:18:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 19:18:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 19:18:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 19:18:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 19:18:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 19:18:41 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 19:18:48 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 19:58:39 --> 404 Page Not Found: /index
ERROR - 2021-10-22 19:58:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 19:58:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 19:58:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 19:58:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 19:58:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 19:58:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 19:58:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 19:58:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 19:58:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 19:58:48 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 19:58:53 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1033
ERROR - 2021-10-22 19:58:53 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 19:58:54 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 20:01:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 20:01:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 20:01:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 20:01:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 20:01:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 20:01:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 20:01:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 20:01:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 20:01:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 20:01:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 20:01:13 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1033
ERROR - 2021-10-22 20:01:13 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 20:01:14 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 20:01:46 --> 404 Page Not Found: /index
ERROR - 2021-10-22 20:02:16 --> 404 Page Not Found: /index
ERROR - 2021-10-22 20:02:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 20:02:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 20:02:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 20:02:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 20:02:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 20:02:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 20:02:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 20:02:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 20:02:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 20:02:19 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 20:02:22 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
ERROR - 2021-10-22 20:03:06 --> 404 Page Not Found: /index
ERROR - 2021-10-22 20:03:25 --> 404 Page Not Found: /index
ERROR - 2021-10-22 20:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 560
ERROR - 2021-10-22 20:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 586
ERROR - 2021-10-22 20:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 596
ERROR - 2021-10-22 20:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 606
ERROR - 2021-10-22 20:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 619
ERROR - 2021-10-22 20:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 630
ERROR - 2021-10-22 20:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 640
ERROR - 2021-10-22 20:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 653
ERROR - 2021-10-22 20:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 664
ERROR - 2021-10-22 20:03:54 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 674
ERROR - 2021-10-22 20:03:57 --> Severity: Warning --> A non-numeric value encountered C:\xampp74\htdocs\bisaceh\application\modules\website\controllers\Search.php 1034
