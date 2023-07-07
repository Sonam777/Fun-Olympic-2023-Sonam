<?php

namespace Modules\Setting\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Setting\Entities\Stream;

class StreamController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $stream = Stream::first();

        return view('setting::stream.index',compact("stream"));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('setting::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $stream = Stream::first();

        $fb_img = $stream->fb_img;
        if ($request->fb_img)
        {
            $filename=$request->fb_img->getClientOriginalName();
            $fb_img = time().$filename;

            $request->fb_img->move(public_path('upload/images/stream'), $fb_img);

        }
        $yt_img = $stream->yt_img;
        if ($request->yt_img)
        {
            $filename=$request->yt_img->getClientOriginalName();
            $yt_img = time().$filename;

            $request->yt_img->move(public_path('upload/images/stream'), $yt_img);

        }

        $stream->update([
            'fb_img' => $fb_img,
            'fb_link' => $request->fb_link,
            'yt_img' => $yt_img,
            'yt_link' => $request->yt_link,
        ]);

        return back()->with('success','Updated Successfully.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('setting::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('setting::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
