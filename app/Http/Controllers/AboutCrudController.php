<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use DB;

class AboutCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about.kelola_about', [
            'abouts' => About::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create_about');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul' => 'required|max:50|min:5',
            'desc' => 'required'
        ]);
        
        About::create($validateData);
        return redirect('/admin-about')->with('success', 'Penambahan About Berhasil Di Lakukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('abouts')->where('id', $id)->first();;
        return view('admin.about.edit_about', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'judul' => 'max:50',
            'desc' => ''
        ]);

        About::find($id)->update($request->all());

        return redirect()->route('admin-about.index')->with('success', 'Edit About Berhasil Di Lakukan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        About::find($id)->delete();

        return redirect()->route('admin-about.index')->with('success', 'About Berhasil Dihapus');
    }
}
