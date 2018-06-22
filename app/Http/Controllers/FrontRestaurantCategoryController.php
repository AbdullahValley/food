<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RestaurantCategory;

class FrontRestaurantCategoryController extends Controller
{
    public function index()
    {
        $restaurant_categories = RestaurantCategory::orderBy('id', 'desc')->get();
        return view ('front-view.layouts.app', compact('restaurant_categories'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}