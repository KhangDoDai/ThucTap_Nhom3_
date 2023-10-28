<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function listBook()
    {
        $query = DB::table('books')
            ->select('id', 'category_id', 'title', 'author', 'description', 'price', 'discount', 'quantity', 'status')
            ->orderBy('id', 'asc')
            ->limit(10);

        $books = $query->get();

        return view('Admin.book.book', ['books' => $books]);
    }

    public function create(Request $request)
    {
        DB::table('books')->insert([
            'category_id' => $request->category_id = 1,
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'price' => $request->price,
            'discount' => $request->discount,
            'quantity' => $request->quantity,
            'status' => 0,
            'created_at' => now(),
        ]);
        return redirect()->route('book.list');
    }

    public function getBook($id)
    {
        $book = DB::table('books')->where("id", $id)->get();
        return response()->json($book);
    }

    public function update(Request $request, $id)
    {
        $resource = DB::table('books')->where("id", $id);

        if (!$resource) {
            return response()->json(['message' => 'Resource not found'], 404);
        }

        // Update the resource based on the request data
        $resource->update($request->all());

        return response()->json(['message' => 'Resource updated successfully'], 200);
    }

    public function delete(Request $request, $id)
    {
        $request->status == 0 ? $request->status = 1 : $request->status;
        DB::table('books')->where("id", $id)->update(['status' => $request->status]);
        return redirect()->route('book.list');
    }

}
