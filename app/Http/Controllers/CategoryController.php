<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Route::get('/categories', function () {
    //     return view('categories', [
    //         'title' => 'Post Categories',
    //         'active' => 'categories',
    //         'categories' => Category::all()
    //     ]);
    // });
    public function index()
    {
        $data = [
            'title' => 'Post Categories',
            'categories' => Category::all()
        ];
        return view('categories', $data);
    }
}
