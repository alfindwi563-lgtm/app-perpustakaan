<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = [
            ['id' => 1, 'nama' => 'Budi Santoso', 'nim' => '312350001', 'email' => 'budi@pens.ac.id', 'status' => 'aktif'],
            ['id' => 2, 'nama' => 'Siti Aminah', 'nim' => '312350002', 'email' => 'siti@pens.ac.id', 'status' => 'non aktif'],
            ['id' => 1, 'nama' => 'Putra Pertama', 'nim' => '312350003', 'email' => 'putra@pens.ac.id', 'status' => 'aktif'],
        ];

        return view('members.index', compact('members'));
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
        return redirect()->route('members.index')
            ->with('success', 'Data anggota berhasil ditambahkan (Dummy)!');    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "MemberController@show, id: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "MemberController@edit, id: {$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "MemberController@update, id: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "MemberController@destroy, id: {$id}";
    }
}
