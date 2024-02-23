<?php

// fetch bootloader
require('../bootloader.php');


// user access
if ($user->_logged_in || !$system['system_public']) {
    user_access();
}

global $db, $system;

if(!empty($_POST)){ 
    $state_id  = $_POST['state_id'];
    $country_id  = $_POST['country_id'];

    $city_div = ''; 
    
    $get_cities = $db->query("SELECT * FROM cities WHERE state_id =".$state_id." ORDER BY name ASC");

    if ($get_cities->num_rows > 0) {
        $state_div .= '<option value="">Please Select City</option>';  
        while ($cities = $get_cities->fetch_assoc()) {
        
            if(!empty($cities['name'])){
                $city_div .= '<option value="'.$cities['id'].'">'.$cities['name'].'</option>';
            }
           
        }
    
    }

    echo $city_div;
}

