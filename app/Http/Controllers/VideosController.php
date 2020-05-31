<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alaouy\Youtube\Facades\Youtube;

class VideosController extends Controller
{
        public function show()
	{
		$req = Youtube::getPlaylistItemsByPlaylistId('PLNVA8V4eec_sIuoMhv5tPn_0N425hgwkJ');

		$videos = $req['results'];
		return view('videos', ['videos' => $videos]);
	}
}
