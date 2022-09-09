<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddGallery;
class AddGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addgallery');
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
        $request->validate([
            'galleryname'=>'required',
            'galleryimage'=>'required'
        ]);
        // add or insert data
        // upload gallery images
        $gallimg=rand().'.'.$request->galleryimage->extension();
        $request->galleryimage->move(public_path('uploads/gallery'),$gallimg);

        $data=array(
            'gelleryname'=>$request->galleryname,
            'gelleryimage'=>$gallimg,
        );
        AddGallery::create($data);
        return redirect('/addgallery')->with('success','Your Gallery Addedd successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
          $data=Addgallery::all();
          return view('managegallery',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
