<?php

namespace Modules\Match\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;
use Modules\Match\Entities\Match;
use Modules\Match\Entities\UpcommingMatch;
use Modules\Match\Http\Requests\StoreMatchRequest;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        abort_if(Gate::denies('show_match'), 403);
        $match = UpcommingMatch::latest()->get();

        return view('match::match.index',compact("match"));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        abort_if(Gate::denies('create_match'), 403);
        return view('match::match.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreMatchRequest $request)
    {
        abort_if(Gate::denies('create_match'), 403);
        $imageName1 = '';
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $imageName1=time().'1.'.$extension;
            $file->move('upload/images/match/',$imageName1);
        }
        $imageName2 = '';
        if($request->hasfile('image2')){
            $file=$request->file('image2');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $imageName2=time().'2.'.$extension;
            $file->move('upload/images/match/',$imageName2);
        }
        if($request->status){
            $status = $request->status;
        }
        else{
            $status = 'off';
        }
        UpcommingMatch::create([
            'title' => $request['title'],
            'date'=> $request['date'],
            'time'=> $request['time'],
            'stadium'=> $request['stadium'],
            'team1'=> $request['team1'],
            'team2'=> $request['team2'],
            'status' => $status,
            'image1' => $imageName1,
            'image2' => $imageName2
        ]);
        
        return redirect()->route('match.index')->with('success', 'Added Successfully');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('match::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        abort_if(Gate::denies('edit_match'), 403);
        $match = UpcommingMatch::findorfail($id);

        return view('match::match.edit',compact("match"));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $match = UpcommingMatch::findorfail($id);
        $imageName1 = $match->image1;
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $imageName1=time().'1.'.$extension;
            $file->move('upload/images/match/',$imageName1);
        }
        $imageName2 = $match->image2;
        if($request->hasfile('image2')){
            $file=$request->file('image2');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $imageName2=time().'2.'.$extension;
            $file->move('upload/images/match/',$imageName2);
        }
        if($request->status){
            $status = $request->status;
        }
        else{
            $status = 'off';
        }
        $match->update([
            'title' => $request['title'],
            'date'=> $request['date'],
            'time'=> $request['time'],
            'stadium'=> $request['stadium'],
            'team1'=> $request['team1'],
            'team2'=> $request['team2'],
            'status' => $status,
            'image1' => $imageName1,
            'image2' => $imageName2
        ]);
        
        return redirect()->route('match.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('delete_match'), 403);
        $match = UpcommingMatch::findOrfail($id);
        $match->delete();
        return redirect()->route('match.index')->with('success', 'Deleted Successfully');
    }
    public function status($id)
    {
        abort_if(Gate::denies('access_match'), 403);
        $match = UpcommingMatch::findOrfail($id);
        if($match->status == 'on')
        {
            $status = 'off';
        }else{
            $status = 'on';
        }
        $match->update([
           'status' => $status 
        ]);
        return redirect()->route('match.index')->with('success', 'Status Updated Successfully');
    } 
}
