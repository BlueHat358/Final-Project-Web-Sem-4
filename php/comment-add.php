<?php
    require_once ("db.php");
    $dbName = $_POST['db_name'];
    $commentId = isset($_POST['comment_id']) ? $_POST['comment_id'] : "";
    $comment = isset($_POST['comment']) ? $_POST['comment'] : "";
    $admin_id = "N00";
    $commentSenderName = isset($_POST['name']) ? $_POST['name'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $image_profile = isset($_POST['profil_imgae']) ? $_POST['profil_imgae'] : "null";
    $date = date('Y-m-d H:i:s');
    
    $keys = array("1891", "1892", "1895", "1896", "1903");
    $emails = array("kurniawan.1896@students.amikom.ac.id","kurniawan.1896@students.amikom.ac.id",
        "kurniawan.1896@students.amikom.ac.id","kurniawan.1896@students.amikom.ac.id","kurniawan.1896@students.amikom.ac.id");
    $getRawKey = strstr($commentSenderName, '$');
    $getKey = str_replace('$', '', $getRawKey);
    
    if($image_profile == "null"){
        $image_profile = "../image/profile-placeholder.png";
    }
    
    for($i = 0; $i < 5; $i++){
        if($keys[$i] == $getKey){
            $admin_id = "Y85";
            $commentSenderName = strstr($commentSenderName, "$", 1);
        }else if($email == $emails[$i]){
            $admin_id = "Y85";
        }
    }
    
    // foreach($keys as $key){
        // if($key == $getKey){
        //     $admin_id = "Y85";
        //     $commentSenderName = strstr($commentSenderName, "$", 1);
        // }
    // }
    
    $sql = "INSERT INTO `" . $dbName . "` (parent_comment_id,admin_id,comment,comment_sender_name,email,image_profile,date) VALUES 
    ('" . $commentId . "','" . $admin_id . "','" . $comment . "','" . $commentSenderName . "','". $email . "','" . $image_profile . "','" . $date . "')";
    
    $result = mysqli_query($conn, $sql);
    
    if (! $result) {
        $result = mysqli_error($conn);
    }
    echo $result;
?>
