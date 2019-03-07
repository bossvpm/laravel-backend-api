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
}
