<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Str;
use App\Http\Controllers\Storage;
use App\Models\Portfolio;
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
        $datos["portfolio"]=Portfolio::orderby('id','desc')->paginate(1);
        
        return view('formProyecto', $datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  
    {

        $name = $request->post("name");
        $description = $request->post("description");
        $technology = $request->post("technology");

        /*
       $image1 = $request->file("image1");
        var_dump($image1);
*/

       $image1 = base64_encode(file_get_contents($request->file('image1')->path()));
       //var_dump($image1);

//FacadesDB::insert("INSERT INTO projects (name, description, technology, image1, image2) VALUES (?,?,?,?,?)", [$name,$description,$technology,$image1,$image2]);
        
FacadesDB::insert("INSERT INTO projects (name, description,image1) VALUES (?,?,?)", [$name,$description,$image1]);

        return $request->all();

       

/* PRUEBAS
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

        $datosProyecto= request()->except('_token');

       if($request->hasFile('image1')){
          $datosProyecto['image1']=$request->file('image1')->store('uploads','public');
       }

        if($request->image1){
            $name = time().'.' . explode('/', explode(':', substr($request->image1, 0, strpos($request->image1, ';')))[1])[1];
            $image1::make($request->image1)->save(public_path('formProyecto').$name);
            $request->merge(['image1' => $name]);
        
        }

      //     Project::insert($datosProyecto); 
*/


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
