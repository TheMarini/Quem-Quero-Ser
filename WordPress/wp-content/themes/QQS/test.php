<?php
    include('video_gallery.php'); //VIDEO_GALLERY FUNCTIONS

    //$r = getVideo(12); //select result
    //$v_infos = videoInfos($r->sl_url); //[direct source | Youtube | Vimeo] + ID
    //$src = embedThis($v_infos[0], $v_infos[1]); //embed src

    global $wpdb; //call wp_database
    //$r = $wpdb->get_row("SELECT id, name, description, sl_url FROM `wp_xyopztwu192_huge_it_videogallery_videos` ORDER BY videogallery_id, ordering ASC LIMIT 1", OBJECT);
    //$r = $wpdb->get_row( "SELECT id, name, description, sl_url FROM `wp_xyopztwu192_huge_it_videogallery_videos` ORDER BY videogallery_id, ordering ASC LIMIT 1", OBJECT);

    //echo json_encode($r->id);
    $id = $_POST['id'];
    echo json_encode($last_error);
    //echo json_encode($row);  // pass array in json_encode
    //echo $video_id;
?>
