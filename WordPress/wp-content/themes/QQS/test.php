<?php
    require_once('../../../wp-load.php'); //WordPress functions
    include('video_gallery.php'); //Video_gallery functions

    $r = getVideo($_POST['id']); //select result
    $v_infos = videoInfos($r->sl_url); //[direct source | Youtube | Vimeo] + ID

    $video = [$v_infos[0], htmlThis($v_infos[0], $v_infos[1], $_POST['muted']), $r->name, $r->description];
    echo json_encode($video);
?>
