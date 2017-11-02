<?php
    require_once('../../../wp-load.php'); //WordPress functions
    include('video_gallery.php'); //Video_gallery functions

    $r = getVideo($_POST['id']); //select result
    $v_infos = videoInfos($r->sl_url); //[direct source | Youtube | Vimeo] + ID

    $featured = [$v_infos[0], htmlThis::featured($v_infos[0], $v_infos[1], $_POST['muted']), $r->name, $r->description];
    $v_other = htmlThis::v_other(getVideo($_POST['featured']));

    $data = array("featured" => $featured, "v_other" => $v_other);
    echo json_encode($data);
    exit();
?>
