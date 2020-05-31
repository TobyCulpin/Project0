<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alaouy\Youtube\Facades\Youtube;

class VideosController extends Controller
{
        public function show()
	{
		$videos = Youtube::listChannelVideos('UCfRVM_B5VswMjFS_24cH8PQ', '12', 'date');
		//var_dump($videos);
		return view('videos', ['videos' => $videos]);
	}
}
