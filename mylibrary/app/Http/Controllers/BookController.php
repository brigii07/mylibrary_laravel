<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return response()->json([$books, "msg"=> "Books retrieved successfully"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = Book::create($request->all());
        return response()->json([$book, "msg"=> "Book created successfully"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
         $book->update($request->all());
        return response()->json([$book, "msg"=> "Book updated successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
         $book->delete();
        return response()->json([$book, "msg"=> "Book deleted successfully"]);
    }
    
}
