<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::where('status', 2)->latest('id');
        $authors = Author::all()->sortBy('autor');
        $categories = Category::all()->sortBy('categoria');

        return view('index', compact('books', 'authors', 'categories'));
    }

    public function filter(Request $request) {
        $author = $request->get('author');
        $category = $request->get('category');
        $book = $request->get('book');
        $books = Book::all();

        $book = mb_strtoupper($book);

        if($author != null){
            $books = $books->whereIn('author_id', $author);           
        }

        if($category != null){
            $books = $books->whereIn('category_id', $category);           
        }

        if ($book != null) {
            $books = Book::whereIn('id', $books->pluck('id'))
                ->where('titulo', 'LIKE', '%' . mb_strtoupper($book) . '%')
                ->orderBy('id', 'desc')->get();
        }

        return view('routes.table', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
