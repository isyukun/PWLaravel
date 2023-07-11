<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    // Validasi input dari form
    public function store(Request $request){
        $validated = $request->validate([
            'kode_buku' => 'required',
            'judul_buku' => 'required',
            'penerbit_buku' => 'required',
            'pengarang_buku' => 'required',
            'jumlah_buku' => 'required|integer|min:1',
        ]);

        $book = Book::create ([
        'kode_buku' => $request->input('kode_buku'),
        'judul_buku' => $request->input('judul_buku'),
        'penerbit_buku' => $request->input('penerbit_buku'),
        'pengarang_buku' => $request->input('pengarang_buku'),
        'jumlah_buku' => $request->input('jumlah_buku'),
        ]);

        if($book){
            return redirect()->route('books.index')->with('success', 'Buku Berhasil Disimpan');
        }else{
            return redirect()->back()->with('error', 'Buku gagal Disimpan');
        }
    }

    public function show(Book $book){
        return view('books.show', ['book' => $book]);
    }


    public function edit($id){
        $book = book::find($id);
        return view('books.edit', ['book' => $book]);
    }

    public function update(Request $request, Book $book){
        $validated = $request->validate([
            'kode_buku' => 'required',
            'judul_buku' => 'required',
            'penerbit_buku' => 'required',
            'pengarang_buku' => 'required',
            'jumlah_buku' => 'required|integer|min:0',
        ]);

        $book->update([
            'kode_buku' => $request->input('kode_buku'),
            'judul_buku' => $request->input('judul_buku'),
            'penerbit_buku' => $request->input('penerbit_buku'),
            'pengarang_buku' => $request->input('pengarang_buku'),
            'jumlah_buku' => $request->input('jumlah_buku'),
        ]);

        if ($book) {
            return redirect()->route('books.index')->with('success', 'Buku Berhasil Diperbarui');
        } else {
            return redirect()->back()->with('error', 'Buku Gagal Diperbarui');
        }
    }


    public function destroy($id){
        $book = book::destroy($id);
        $books = book::all();
        return view('books.index', ['books' => $books]);
    }
}
