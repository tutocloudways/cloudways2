<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Illuminate\Support\Facades\Request;
//use Request;
use App\Category;
use App\Http\Requests\CategoryRequest;


use App\Http\Requests;
use App\Http\Controllers\Controller;

//use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

    $categories=Category::all();
        return view('categories.index',compact('categories'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('categories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
 

    // $category = new Category;

     $category = new Category(array(
      'name' => $request->get('name')
      
    ));

    $category->save();

    $imageName = $category->id . '.' . 
        $request->file('name')->getClientOriginalExtension();

    $request->file('name')->move(
        base_path() . '/public/images/catalog/', $imageName
    );

    return \Redirect::route('categories.edit', 
        array($category->id))->with('message', 'Category added!');    


   // $category=Request::all();
   //Category::create($category);
   //return redirect('categories');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        


   $category=Category::find($id);
   return view('categories.show',compact('category'));



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
