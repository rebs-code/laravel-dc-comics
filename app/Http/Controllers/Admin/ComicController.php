<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'title' => 'required|max:100',
                'description' => 'required',
                //validate url to end with .jpg, .png, .jpeg, .webp
                'thumb' => 'max:2048 | url | ends_with:.jpg,.png,.jpeg,.webp',
                'price' => 'required|numeric',
                'series' => 'required|max:100',
                'sale_date' => 'required|date',
                'type' => 'required|max:50',
                'artists' => 'max:1000',
                'writers' => 'max:1000',
            ],
            //personalize the error messages
            [
                'title.required' => 'Insert a valid title',
                'max' => 'The :attribute must be max :max characters',
                'url' => 'The :attribute must be a valid url',
                'ends_with' => 'The :attribute must end with :values',
                'numeric' => 'The :attribute must be a number',
                'date' => 'The :attribute must be a valid date',
            ]
        );

        $data = $request->all();

        $comic = new Comic();

        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date  = $data['sale_date'];
        // $comic->type = $data['type'];
        // $comic->artists = $data['artists'];
        // $comic->writers = $data['writers'];

        // $comic->save();

        //using fill method to fill the model with the data from the form
        $comic->fill($data);
        $comic->save();

        //once the record is saved, we redirect to the show page of the comic
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::findOrFail($id);

        //if data is not found, return 404
        if ($comic === null) {
            abort(404);
        }

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $comic = Comic::findOrFail($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        // dd($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
