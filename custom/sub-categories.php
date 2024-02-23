<?php

// fetch bootloader
require('../bootloader.php');


// user access
if ($user->_logged_in || !$system['system_public']) {
    user_access();
}

global $db, $system;

if(!empty($_POST)){ 

    $category_id  = $_POST['category_id'];

    $subcategory_div = '';
    
    $get_subcategory = $db->query("SELECT * FROM i_profile_sub_categories WHERE c_fk =".$category_id." ORDER BY sc_key ASC");

    if ($get_subcategory->num_rows > 0) {
        $state_div .= '<option value="">Please select subcategory</option>';
        while ($subcategory = $get_subcategory->fetch_assoc()) {
        
            if(!empty($subcategory['sc_key'])){
                $subcategory_div .= '<option value="'.$subcategory['sc_id'].'">'.$subcategory['sc_key'].'</option>';
            }
        }
    }

    echo $subcategory_div;
    
}



