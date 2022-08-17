<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['skills']=Skill::latest()->get();
        return view('skill.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate( [
            'name' => 'required|max:255'
        ] );
        if (Skill::create(['name' => $request->name])) {
            return back()->withSuccess("saved");
        }
        return back()->withError("not saved");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return view('skill.index',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        $request -> validate( [
            'name' => 'required|max:255'
        ] );
        $skill->name = $request->name;
        $skill->save();
        if ($skill) {
            return redirect(route('skills.create'))->withSuccess("updated");
        }
        return back()->withError("not updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        if ($skill->delete()) {
            return back()->withSuccess("deleted");
        }
        return back()->withError("not deleted");
    }
}
