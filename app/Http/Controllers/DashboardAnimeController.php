<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardAnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anime = Anime::all();
        return view('dashboard.animes.index', [
            'animes' => $anime
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.animes.create', [
            'categories' => Category::all() 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
{
    $validateData = $request->validate([
        'judul' => 'required',
        'category_id' => 'required',
        'rilis' => 'required',
        'rating' => 'required|numeric',
        'sinopsis' => 'required',
        'durasi' => 'required',
        'genre' => 'required',
        'episode' => 'required',
        'studio' => 'required',
        'image' => 'required|file|image|max:2024'
    ]);

    if ($request->hasFile('image')) {
    $imagePath = $request->file('image')->store('photos-animes');
    $validateData['image'] = $imagePath;
}

    Anime::create($validateData);   

    return redirect('/dashboard/animes')->with('succes', 'Create new anime successfully!');
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function show(Anime $anime)
    {
           return view('dashboard.animes.show', [
            'anime' => $anime
    ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function edit(Anime $anime)
    {
        return view('dashboard.animes.edit',[
            'categories' => Category::all(), 
            'animes' => $anime
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anime $anime)
    {
         $validateData = $request->validate([
        'judul' => 'required',
        'category_id' => 'required',
        'rilis' => 'required',
        'rating' => 'required|numeric',
        'sinopsis' => 'required',
        'durasi' => 'required',
        'genre' => 'required',
        'episode' => 'required',
        'studio' => 'required',
        'image' => 'required|file|image|max:1024'
    ]);

    if ($request->hasFile('image')) {
    $imagePath = $request->file('image')->store('animes-photos', 'public');
    $validateData['image'] = $imagePath;
}

    Anime::where('id', $anime->id)->update($validateData);
    return redirect('/dashboard/animes')->with('succes', 'update anime successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anime $anime)
    {
        Anime::destroy($anime->id);
        return redirect('/dashboard/animes')->with('succes', 'deleted anime succes');
    }
}
