<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Anime;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animes = Anime::all();
        $categories = Category::all();
        return view('user.categories.index', compact('animes', 'categories'));
    }
    
    

    public function show($id)
    {
        // Mengambil data kategori berdasarkan ID
        $category = Category::findOrFail($id);

        // Mengirimkan data kategori dan animes ke view 'user.categories.show'
        return view('user.categories.show', [
            'animes' => $category->animes,
            'category' => $category->kategori
        ]);
    }


}
