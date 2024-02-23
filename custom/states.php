<?php

// fetch bootloader
require('../bootloader.php');


// user access
if ($user->_logged_in || !$system['system_public']) {
    user_access();
}

global $db, $system;

if(!empty($_POST)){ 

    $country_id  = $_POST['country_id'];

    $state_div = '';
    
    $get_states = $db->query("SELECT * FROM states WHERE country_id =".$country_id." ORDER BY name ASC");

    if ($get_states->num_rows > 0) {
        $state_div .= '<option value="">Please Select State</option>';
        while ($states = $get_states->fetch_assoc()) {
        
            if(!empty($states['name'])){
                $state_div .= '<option value="'.$states['id'].'">'.$states['name'].'</option>';
            }
        }
    }

    echo $state_div;
    
}



