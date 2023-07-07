<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Modules\Gallery\Entities\Gallery;
use Modules\Gallery\Entities\GalleryImages;
use Modules\Gallery\Entities\GalleryVideo;
use Modules\Setting\Entities\Stream;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::where('status', 'on')->latest()->paginate(16);

        return view('frontend.gallery.gallery', compact("galleries"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function video()
    {
        $main = GalleryVideo::where('status', 'on')->where('main', 'on')->latest()->first();
        if (!$main) {
            $main = GalleryVideo::where('status', 'on')->first();
        }

        $videos = GalleryVideo::where('status', 'on')->latest()->paginate(15);
        $comments = Comment::latest()->get();

        return view('frontend.gallery.video', compact("videos","main","comments"));
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
    public function show(string $slug)
    {
        $gallery = Gallery::where('slug', $slug)->first();
        $images = GalleryImages::where('gallery_id', $gallery->id)->where('status', 'on')->paginate(20);

        return view('frontend.gallery.image', compact("gallery", "images"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
