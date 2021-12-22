<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Str;
use App\Http\Controllers\Storage;
use Illuminate\Support\Facades\DB as FacadesDB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('portfolio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('formProyecto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  //PREGUNTAR A MAR COMO ES EL ORIGINAL ....
    {
       // $proyecto = new Project();
        $name = $request->post("name");
        $description = $request->post("description");
        //$technology = $request->post("technology");

    //    $image1 = $request->file("image1");

    $image = $request->image;  // your base64 encoded
    $image = str_replace('data:image/png;base64,', '', $image);
    $image = str_replace(' ', '+', $image);
    $imageName = str_random(10).'.'.'png';
    \File::put(storage_path(). '/' . $imageName, base64_decode($image));

        //$image2 = $request->post("image2");
/*
        $datosProyecto= request()->except('_token');

       if($request->hasFile('image1')){
          $datosProyecto['image1']=$request->file('image1')->store('uploads','public');
       }
/*
        if($request->image1){
            $name = time().'.' . explode('/', explode(':', substr($request->image1, 0, strpos($request->image1, ';')))[1])[1];
            $image1::make($request->image1)->save(public_path('formProyecto').$name);
            $request->merge(['image1' => $name]);
        
        }*/

      //     Project::insert($datosProyecto); 

        FacadesDB::insert("INSERT INTO projects (name, description) VALUES (?,?)", [$name,$description]);

        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
