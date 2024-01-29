<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Job\Job;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function singleCategory($name)
    {
        $category = Job::where('category', $name)
            ->take(5)      
            ->orderby('created_at', 'desc')
            ->get();

        return view('categories.single', compact('category', 'name'));
    }
}
