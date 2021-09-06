<?php

namespace App\Http\Controllers;

use App\Models\Undangan;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     

    public function index(Undangan $undangan)
    {
        $undangans = undangan::latest()->paginate(5);
    
        return view('undangans.index',compact('undangans'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $undangans = undangan::latest()->paginate(5);
    
        return view('undangans.create',compact('undangans'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'opsi' => 'required',
            'detail' => 'required',
        ]);
    
        undangan::create($request->all());
     
        return redirect()->route('undangans.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Undangan  $undangan
     * @return \Illuminate\Http\Response
     */
    public function show(Undangan $undangan)
    {
        return view('undangans.show',compact('undangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Undangan  $undangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Undangan $undangan)
    {
        return view('undangans.edit',compact('undangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Undangan  $undangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Undangan $undangan)
    {
        $request->validate([
            'name' => 'required',
            'opsi' => 'required',
            'detail' => 'required',
        ]);
    
        $undangan->update($request->all());
    
        return redirect()->route('undangans.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Undangan  $undangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Undangan $undangan)
    {
        $undangan->delete();
    
        return redirect()->route('undangans.index')
                        ->with('success','Product deleted successfully');
    }
}
