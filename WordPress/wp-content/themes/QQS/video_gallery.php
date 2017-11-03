<?php
    /* ----- ! FUNCTIONS ! ----- */

    //SINGLE VIDEO
    function getVideo($id = null){
        global $wpdb; //call wp_database
        if($id === null){ //get the first video in database
            return $wpdb->get_row( "SELECT id, name, description, sl_url FROM `wp_xyopztwu192_huge_it_videogallery_videos` ORDER BY videogallery_id, ordering ASC LIMIT 1", OBJECT);
        }
        else{ //get video by ID
            return $wpdb->get_row( "SELECT id, name, description, sl_url FROM `wp_xyopztwu192_huge_it_videogallery_videos` WHERE id = $id", OBJECT);
        }
    }

    //MULTIPLE VIDEOS
    function getVideos($id = null){
        global $wpdb; //call wp_database
        if($id === null){ //all videos in database
             return $wpdb->get_results( "SELECT id, name, description, sl_url, thumb_url FROM `wp_xyopztwu192_huge_it_videogallery_videos` ORDER BY videogallery_id, ordering ASC", OBJECT);
        }
        else{ //get videos excluding ID
            return $wpdb->get_results( "SELECT id, name, description, sl_url, thumb_url FROM `wp_xyopztwu192_huge_it_videogallery_videos` WHERE id NOT IN ($id) ORDER BY videogallery_id, ordering ASC", OBJECT);
        }
    }

    //WICH TYPE OF VIDEO IS
    function videoInfos($videoURL) { //return -> [ video_type | ID only ]
        if((strpos($videoURL, 'youtube.com') !== false)) { //link url
            return array(1, explode('/watch?v=', $videoURL)[1]);
        }
        else {
            if((strpos($videoURL, 'youtu.be') !== false)) { //link share
                return array(1, explode('youtu.be/', $videoURL)[1]);
            }
            else {
                if((strpos($videoURL, 'vimeo.com') !== false)) { //link both
                    return array(2, explode('vimeo.com/', $videoURL)[1]);
                }
                else{
                    return array(0, $videoURL); //direct source
                }
            }
        }
    }

    //URL options
    function embedThis($from, $id, $muted = true){
        switch ($from) {
            case 0: return $id;
                break;

            case 1: return 'http://www.youtube.com/embed/' . $id . '?autoplay=1&enablejsapi=1&loop=1&color=white&rel=0&showinfo=0';
                break;

            case 2: return 'https://player.vimeo.com/video/' . $id  . (($muted == 'true') ? '?background=1' : '?autoplay=1&loop=1&title=0&byline=0&portrait=0');
                break;
        }
    }

    //THUMBNAIL
    function thumbThis($from, $id){
        switch ($from) {
            case 0:
            case 2:
                return get_bloginfo('template_url') . '/assets/img/_all/bluebox.png';  //Ih filhão, se fudeu
                break;

            case 1: return 'https://img.youtube.com/vi/' . $id . '/0.jpg';
                break;
        }
    }

    //HTML
    class htmlThis
    {
        //FEATURED VIDEO
        public static function featured($from, $id, $muted = true){
            switch ($from) {
                case 0: return '<video src="' . $id . '" autoplay' . (($muted == 'true') ? ' muted ' : ' ') . 'loop controls></video>';
                    break;

                case 1:
                case 2: return '<iframe id="' . (($from == 1) ? "YT_player" : "") . '" src="' . embedThis($from, $id, $muted) . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
                    break;
            }
        }

        //RECOMMENDATIONS VIDEOS
        public static function recommendations() {
            //allocated for multiple use on 'foreach'
            $results = getVideos(getVideo()->id);
            foreach ( $results as $row ) {
                $html .= htmlThis::v_other($row);
            }
            return $html;
        }

        //V_Other
        public static function v_other($row) {
            $video = videoInfos($row->sl_url);
            $html .= '<div class="v_other" _vid="' . $row->id . '">';
            $html .= '  <div class="v_other_play _center-child">';
            $html .= '      <img src="' . get_bloginfo('template_url') . '/assets/img/_all/icons/play.svg" >';
            $html .= '  </div>';
            $html .= '  <img src="' . (($row->thumb_url != "") ? $row->thumb_url : thumbThis($video[0], $video[1])) . '" alt="' . $row->name . '">';
            $html .= '</div>';
            return $html;
        }
    }

    /*
    //echo '<div style="background-color:red">' . $src . '</div>';

    /*
    <iframe id="YT_player" src="https://www.youtube.com/embed/y35DsSh6Tyk?autoplay=1&controls=0&enablejsapi=1&loop=1&modestbranding=1&color=white" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

    <iframe src="https://player.vimeo.com/video/217723625?autoplay=1&loop=1&title=0&byline=0&portrait=0&background=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    */
?>
