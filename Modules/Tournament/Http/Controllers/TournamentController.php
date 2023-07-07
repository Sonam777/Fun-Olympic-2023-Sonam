<?php

namespace Modules\Tournament\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Modules\Tournament\Entities\Tournament;
use Modules\Tournament\Http\Requests\StoreTournamentRequest;
use Modules\Tournament\Http\Requests\UpdateTournamentRequest;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        abort_if(Gate::denies('show_blogs'), 403);
        $tournaments = Tournament::latest()->get();

        return view('tournament::tournament.index',compact("tournaments"));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        abort_if(Gate::denies('create_blogs'), 403);
        return view('tournament::tournament.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreTournamentRequest $request)
    {
        $imageName = '';
       $slug = Str::slug($request->title);
        if ($request->image)
        {
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('upload/images/tournament'), $imageName);

        }
        $file="";
        if ($request->file)
        {
            $file = time().'.'.$request->file->extension();

            $request->file->move(public_path('upload/file/tournament'), $file);

        }
        if($request->status){
            $status = $request->status;
        }
        else{
            $status = 'off';
        }
        Tournament::create([
            'title' => $request['title'],
            'description'=> $request['description'],
            'slug'=> $slug,
            'file' => $file,
            'status' => $status,
            'image' => $imageName
        ]);
        
        return redirect()->route('tournaments.index')->with('success', 'Added Successfully');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('tournament::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        abort_if(Gate::denies('edit_blogs'), 403);
        $tournament = Tournament::findorfail($id);

        return view('tournament::tournament.edit',compact("tournament"));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateTournamentRequest $request, $id)
    {
        $tournament = Tournament::findorfail($id);
        $imageName = $tournament->image;
       $slug = Str::slug($request->title);
        if ($request->image)
        {
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('upload/images/tournament'), $imageName);

        }
        $file=$tournament->file;
        if ($request->file)
        {
            $file = time().'.'.$request->file->extension();

            $request->file->move(public_path('upload/file/tournament'), $file);

        }
        if($request->status){
            $status = $request->status;
        }
        else{
            $status = 'off';
        }
        $tournament->update([
            'title' => $request['title'],
            'description'=> $request['description'],
            'slug'=> $slug,
            'file' => $file,
            'status' => $status,
            'image' => $imageName
        ]);
        
        return redirect()->route('tournaments.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('delete_tournaments'), 403);
        $tournament = Tournament::findOrfail($id);
        $tournament->delete();
        return redirect()->route('tournaments.index')->with('success', 'Deleted Successfully');
    }
    public function status($id)
    {
        abort_if(Gate::denies('access_tournaments'), 403);
        $tournament = Tournament::findOrfail($id);
        if($tournament->status == 'on')
        {
            $status = 'off';
        }else{
            $status = 'on';
        }
        $tournament->update([
           'status' => $status 
        ]);
        return redirect()->route('tournaments.index')->with('success', 'Status Updated Successfully');
    } 
}
