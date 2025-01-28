<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $video = Video::find(1);
        // return $video->comments;

        // $video = Video::find(1);
        // foreach($video->comments as $comment){
        //     echo $comment->details;
        //     echo "<hr>";
        // }

        // $video = Video::with("comments")->find(1);
        // return $video;

        $video = Video::with("comments")->find(1);
        echo "<h1>$video->title</h1>";
        echo "<h4>$video->url</h4>";
        
        foreach($video->comments as $comment){
            echo $comment->details;
            echo "<hr>";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $video = Video::find(1);
        // $video->comments()->create([
        //     'details'=>'Best Video'
        // ]);

        $video = Video::find(2);

        if ($video) {
            $video->comments()->create([
                'details' => 'Good Video',
            ]);
        } else {
            dd('Video not found.');
        }


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
    }
}
