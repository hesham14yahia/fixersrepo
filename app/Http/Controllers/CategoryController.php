<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Fixer;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'asc')->paginate(10);
        return view('category.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $fixers = Fixer::pluck('name', 'id');

        $catData = [
            'categories' => $categories,
            'fixers' => $fixers
        ];
        return view('category.create')->with($catData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->input('category') !== null) {
            $this->validate($request, [
                'category' => 'required'
            ]);
            $category = new Category;
            $category->name = $request->input('category');
            $category->save();
        }

        if($request->input('fixer_id') !== null || $request->input('cat_id') !== null) {
            $this->validate($request, [
                'fixer_id' => 'required',
                'cat_id' => 'required'
            ]);
            $fixer = Fixer::findOrFail($request->input('fixer_id'));
            $fixer->category_id = $request->input('cat_id');
            $fixer->save();
        }

        return redirect('/category');
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
