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
        return view('fixers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
