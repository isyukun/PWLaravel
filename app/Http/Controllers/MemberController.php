<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('members.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //melakukan validasi form
        $validated = $request->validate([
            'nama_anggota' => 'required',
            'ktp' => 'required',
            'email' => 'required',
            'telp' => 'required',
            'tanggal_daftar' => 'required',
        ]);

        $member = Member::create ([
            'nama_anggota' => $request->input('nama_anggota'),
            'ktp' => $request->input('ktp'),
            'email' => $request->input('email'),
            'telp' => $request->input('telp'),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}
