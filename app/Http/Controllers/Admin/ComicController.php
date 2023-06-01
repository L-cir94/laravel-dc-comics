<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreComicRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        /* dd($request->all()); */
        $val_data = $request->validate([
            'thumb' => 'min:5|nullable|string',
            'title' => 'required|min:1|max:500',
            'price' => 'nullable|numeric|max:1000',
            'description' => 'nullable|max:1000',
            'type' => 'nullable',
            'sale_date' => 'required',
            'series' => 'nullable'
        ]);
       
        $data = [
            "thumb" => $request->thumb,
            "price" => $request->price,
            "title" => $request->title,
            "description" => $request->description,
            "type" => $request->type,
            "sale_date" => $request->sale_date,
            "series" => $request->series,
        ];
        Comic::create($data);
        return to_route('admin.comics.index')->with('message', 'is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        /* dd($request->all()); */
        $val_data = $request->validate([
            'thumb' => 'min:5|nullable|string',
            'title' => 'required|min:1|max:500',
            'price' => 'nullable|numeric|max:1000',
            'description' => 'nullable|max:1000',
            'type' => 'nullable',
            'sale_date' => 'required',
            'series' => 'nullable'
        ]);
        $data = [
            "thumb" => $request->thumb,
            "price" => $request->price,
            "title" => $request->title,
            "description" => $request->description,
            "type" => $request->type,
            "sale_date" => $request->sale_date,
            "series" => $request->series,
        ];
        $comic->update($val_data);
        return to_route('admin.comics.index')->with('message', 'valore modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('admin.comics.index')->with('message', 'valore cancellato correttamente');
    }
}
