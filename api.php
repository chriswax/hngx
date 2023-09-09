<?php
header("Content-Type:application/json");


    if ((isset($_GET['slack_name']) && $_GET['slack_name']!="") && (isset($_GET['track']) && $_GET['track']!="") ){
        $slackname =  $_GET['slack_name'];
        $track = $_GET['track'];
        getData($slackname, $track);
    }
    else{
        $data = [
            "message" =>"Invalid Request Query Format",
            "status_code" =>200
        ];

	    $data = json_encode($data);
        echo $data;
    }

    function getData($slackname, $track){
        //set time zone
        date_default_timezone_set("Africa/Lagos");
        $utc = gmdate("Y-m-d\TH:i:s\Z");
        $data = [
            "slack_name" =>$slackname,
            "current_day" =>date('l'),
            "utc_time" =>$utc,
            "track" =>$track,
            "github_file_url" =>"https://github.com/chriswax/hngx/blob/main/api.php",
            "github_repo_url" =>"https://github.com/chriswax/hngx",
            "status_code" =>200
        ];
        echo json_encode($data);
    }

?>
