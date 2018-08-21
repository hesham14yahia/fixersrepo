<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Country;
use App\Area;
use App\Fixer;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::orderBy('id', 'asc')->paginate(10);
        $countries = Country::orderBy('id', 'asc')->paginate(10);
        $areas = Area::orderBy('id', 'asc')->paginate(10);
        // $x = count($cities);
        // $y = count($countries);
        // $z = count($areas);
        // if($x > $y && $x > $z) {
        //     $i = $x;
        // } else if($y > $x && $y > $z) {
        //     $i = $y;
        // } else {
        //     $i = $z;
        // }
        
        $locdata = [
            'cities' => $cities,
            'countries' => $countries,
            'areas'=> $areas
        ];
        return view('location.index')->with($locdata);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::pluck('name', 'id');
        $cities = City::pluck('name', 'id');
        $areas = Area::pluck('name', 'id');
        $fixers = Fixer::pluck('name', 'id');

        $relationData = [
            'cities' => $cities,
            'countries' => $countries,
            'areas' => $areas,
            'fixers' => $fixers
        ];
        return view('location.create')->with($relationData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if($request->input('country') !== null) {
            $this->validate($request, [
                'country' => 'required'
            ]);
            $country = new Country;
            $country->name = $request->input('country');
            $country->save();
        }

        if($request->input('city') !== null) {
            $this->validate($request, [
                'city' => 'required',
                'country_id' => 'required'
            ]);
            $city = new City;
            $city->name = $request->input('city'); 
            $city->country_id = $request->input('country_id');
            $city->save();
        }

        if($request->input('area') !== null) {
            $this->validate($request, [
                'area' => 'required',
                'city_id' => 'required'
            ]);
            $area = new Area;
            $area->name = $request->input('area'); 
            $area->city_id = $request->input('city_id');
            $area->save();
        }

        if($request->input('fixer_id') !== null || $request->input('area_id') !== null) {
            $this->validate($request, [
                'fixer_id' => 'required',
                'area_id' => 'required'
            ]);
            $fixerid = $request->input('fixer_id');
            $area = Area::findOrFail($request->input('area_id'));
            $area->fixers()->attach($fixerid);
        }

        return redirect('/location');
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
