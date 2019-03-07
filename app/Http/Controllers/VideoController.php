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
                $response['total_video_size'] = (int)$sum;
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
            $result = Video::select('video_size','viewers_count', 'user_id as created_by')->where('id', $videoId)->first();
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

    public function patchVideoMetaData(Request $request, Video $video)
    {
        $requestData = $request->all();
        if(isset($requestData['video_size']) && isset($requestData['viewers_count']) && is_numeric($requestData['video_size'])&& is_numeric($requestData['viewers_count']))
        {
            $video->update($requestData);
            return response()->json($video, 200);
        }
        else
        {
            $response = array('status' => 'false', 'message' => "Invalid request.");
            return response()->json($response, 400);
        }
    }
}
