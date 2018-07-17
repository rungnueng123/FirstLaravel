<?php

namespace App\Http\Controllers\Music;

use App\Http\Controllers\Controller;

class SongController extends Controller
{

    function __construct()
    {

    }

    public function index()
    {
//        return 'Hello From Song Controller';
//        return view('song.index');
        return view('song/index');
    }

    public function play()
    {
//        return view('song/player')
//            ->with('band', 'POTATO')
//            ->with('album', 'LIFE');

        //Array
//        return view('song/player')->with([
//            'band' => 'POTATO',
//            'album' => 'LIFE'
//        ]);

//        return view('song/player')->withBand('POTATO')->withAlbum('LIFE');

        $this->data = array(
            'band' => 'POTATO',
            'album' => 'LIFE'
        );
        return view('song/player', $this->data);
    }

    public function band()
    {
        $this->data = array(
            'band' => 'POTATO',
            'song' => '<u>CIRCLE</u>'
        );
        return view('song/band', $this->data);
    }

}