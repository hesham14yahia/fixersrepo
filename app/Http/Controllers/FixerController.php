<?php

namespace App\Http\Controllers;
use App\Fixer;
use App\Area;
use App\City;
use App\Category;
use App\Country;

use Illuminate\Http\Request;

class FixerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::pluck('name', 'id');
        $areas = Area::pluck('name', 'id');
        $cities = City::pluck('name', 'id');
        
        if(isset($_GET['city_id'])){
            $fixers = Fixer::where('city_id', $_GET['city_id'])->orderBy('id', 'asc')->paginate(10);
        } else if(isset($_GET['category_id'])) {
            $fixers = Fixer::where('category_id', $_GET['category_id'])->orderBy('id', 'asc')->paginate(10);
        } else {
            $fixers = Fixer::orderBy('id', 'asc')->paginate(10);
        }

        $fixerData = [
            'fixers' => $fixers,
            'cities' => $cities,
            'areas' => $areas,
            'categories' => $categories
        ];
        return view('fixers.index')->with($fixerData);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $cities = City::pluck('name', 'id');

        $fixerData = [
            'cities' => $cities,
            'categories' => $categories
        ];
        return view('fixers.create')->with($fixerData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'birth_date' => 'required',
            'city_id' => 'required',
            'category_id' => 'required',
            'image_bath' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('image_bath')){
            // Get file name with extension
            $filenameWithExt = $request->file('image_bath')->getClientOriginalName();
            // Get Just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Just file Extension
            $extension = $request->file('image_bath')->getClientOriginalExtension();
            // Filename for store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image_bath')->storeAs('public/image_bath', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // Create Fixer
        $post = new Fixer;
        $post->name = $request->input('name');
        $post->birth_date = $request->input('birth_date');
        $post->city_id = $request->input('city_id');
        $post->category_id = $request->input('category_id');
        $post->image_bath = $fileNameToStore;
        $post->save();

        return redirect('/');
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
