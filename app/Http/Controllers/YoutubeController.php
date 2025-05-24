<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Tymon\JWTAuth\Facades\JWTAuth;

class YoutubeController extends Controller
{
    public function getVideos()
    {

        $response = Http::withHeaders([
            'x-rapidapi-host' => 'youtube-data8.p.rapidapi.com',
            'x-rapidapi-key' => '1b812429c3msh4b9f65d7d87aca9p1db3f8jsn215336a96d60',
        ])->get('https://youtube-data8.p.rapidapi.com/playlist/videos/?id=PL2qylM3RAZfhtimACJUawSfmY2KoQouSq&hl=en&gl=US');

        return response()->json($response->json());
    }

    public function videosPage()
    {
        return view('videos');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'video' => 'required|file|mimes:mp4,mov,ogg,webm|max:51200'
        ]);

        $user = JWTAuth::parseToken()->authenticate();

        $file = $request->file('video');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('videos', $filename, 'public');

        $video = Video::create([
            'path' => $path,
            'user_id' => $user->id,
        ]);

        $video = Video::create([
            'path' => $path,
            'user_id' => $user->id,
        ]);

        return response()->json(['message' => 'Video uploaded successfully', 'video' => $video], 201);
    }
}
