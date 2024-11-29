<?php
//add wordpress functions
require_once('../../../../../wp-load.php'); 
$postID =isset( $_POST['post_id'])?sanitize_text_field($_POST['post_id']):0; 
$all_data = [];
$all_data ['ErrorMessage'] = [];
$all_data ['is_sent'] = true;
$all_data['is_favorite']=false;

if(!is_user_logged_in()){
    $all_data ['is_sent'] = false;
    array_push($all_data ['ErrorMessage'] , 'user_not_login');
    echo json_encode($all_data);
    die();
}

$userId = get_current_user_id();
$favorite_list = get_user_meta($userId, 'favorite_list', true);

if($favorite_list){
    if(in_array($postID , $favorite_list)){
        $new_array = array_diff($favorite_list , array($postID));
        update_user_meta($userId, 'favorite_list', $new_array);
        $all_data['is_favorite']=false;
        echo json_encode($all_data);
    }else{
        array_push($favorite_list , $postID); 
        update_user_meta($userId, 'favorite_list', $favorite_list);
        $all_data['is_favorite']=true;
        echo json_encode($all_data);
    }
}else{
    $favorite_list = array($postID);
    update_user_meta($userId, 'favorite_list', $favorite_list);
    $all_data['is_favorite']=true;
    echo json_encode($all_data);
}

?>