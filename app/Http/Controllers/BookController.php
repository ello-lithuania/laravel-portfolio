<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreBookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use Intervention\Image\Facades\Image as Image;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        return view('admin.books.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
        $data = $request->validated();
        $data['cover'] = $request->hasFile('cover') ? $this->uploadCover($request->file('cover')) : null;

        $book = auth()->user()->books()->create($data);
        $book->genres()->attach($request->input('genres'));

        $author = Author::updateOrCreate(['name'=> $request->input('authors')]);
        $book->authors()->attach($author->id);

        return redirect()->route('dashboard.index')->with('message', 'Book Created Successfully');
    }
    private function uploadCover($cover) {
        $coverName = auth()->user()->id . '_' . time() . '.' . $cover->getClientOriginalExtension();
        $destinationPath = public_path('images/book_covers') . '/' . $coverName;
        $resize_image = Image::make($cover->getRealPath());
        $resize_image ->resize(400,700)->save($destinationPath);

        return $coverName;
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
