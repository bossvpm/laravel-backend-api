<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function userVideoSize($userId)
    {   
        $response = array('status' => 'false');
        $responseCode = 200;
        if(!empty($userId))
        {
            $sum = Video::where('user_id', $userId)->sum('video_size');
            if(!empty($sum))
            {
                $response['status'] = true;
                $response['totalVideoSIze'] = (int)$sum;
            }
            else
            {
                $response['message'] = "No videos found for this user";
            }
        }
        else
        {
            $response['message'] = "Invalid request";
            $responseCode = 400;
        }
        return response()->json($response, $responseCode);
    }

    public function getVideoMetaData($videoId)
    {
        $response = array('status' => 'false');
        $responseCode = 200;
        if(!empty($videoId))
        {
            $result = Video::select('video_size as videoSize','viewers_count as viewers', 'user_id as createdBy')->where('id', $videoId)->first();
            if(!empty($result))
            {
                $response['status'] = true;
                $response['result'] = $result;
            }
            else
            {
                $response['message'] = "Video does not exists.";
            }
        }
        else
        {
            $response['message'] = "Invalid request.";
            $responseCode = 400;
        }
        return response()->json($response, $responseCode);
    }
}
