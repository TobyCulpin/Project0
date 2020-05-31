<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alaouy\Youtube\Facades\Youtube;

class VideosController extends Controller
{
        public function show()
	{
		$req = Youtube::getPlaylistItemsByPlaylistId(env('YOUTUBE_PLAYLIST_ID'), '', 12);

		$videos = array_reverse($req['results']);
		return view('videos', ['videos' => $videos]);
	}
}
