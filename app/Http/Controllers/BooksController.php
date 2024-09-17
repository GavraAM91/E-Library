<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\BooksResource;
use Illuminate\Support\Facades\Validator;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all data from database books
        $books = Books::all();

        if (request()->wantsJson()) {
            if ($books->isEmpty()) {
                return response()->json([
                    'message' => 'Data kosong'
                ], 200);
            }

            return response()->json([
                'data' => $books,
            ], 200);
        }
        //view to index
        return view(
            'books.index',
            [
                'books' => $books,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data_json = $request->json()->all();
        $data_json = json_decode($request, true);

        $validator = Validator::make($data_json, [
            'title' => 'required|min:3|string',
            'image' => 'required|mimes:jpg,png,jpeg,gif,svg',
            'author_id' => 'required',
            'category_id' => 'required',
            'description' => 'required|min:10|string'
        ]);


        if ($validator->fails()) {
            return response()->json([
                'message' => 'All fields is mandatory',
                'error' => $validator->messages()
            ], 422);
        }

        //get id creator
        $authId = Auth::id();

        $data = Books::create([
            'title' => $data_json['title'],
            'author_id' => $authId,
            'image' => null,
            'description' => $data_json['description'],
            'category_id' => $data_json['category_id'],
            'slug' =>  Str::slug($request->title),
        ]);

        return response()->json([
            'message' => 'Data added succesfuly',
            'data' => new BooksResource($data),
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $books)
    {
        //
    }
}
