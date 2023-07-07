<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Blog\Entities\Blog;
use Modules\Event\Entities\Event;
use Modules\Gallery\Entities\Gallery;
use Modules\Match\Entities\UpcommingMatch;
use Modules\Setting\Entities\CompanyProfile;
use Modules\Slider\Entities\Slider;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = Blog::where('status','on')->latest()->take(8)->get();
        $profile = CompanyProfile::first();
        $sliders = Slider::where('status','on')->latest()->get();
        $events = Event::where('status','on')->take(4)->get();
        $galleries = Gallery::where('status','on')->latest()->take(6)->get();
        $match = UpcommingMatch::where('status','on')->where('date','>',Carbon::now())->first();

        return view('frontend.home.index',compact("news","profile","sliders","events","galleries","match"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
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
