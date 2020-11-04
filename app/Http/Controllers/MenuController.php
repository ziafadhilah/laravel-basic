<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
        return view('menu-halucoft/index', ['menu' => $menu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu-halucoft/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Menu::create([
        //     'nama' => $request->nama,
        //     'harga' => $request->harga,
        //     'gambar' => $request->gambar,
        // ]);
        $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required|numeric',
        ]);
        
        Menu::create($request->all());
        return redirect('/menu')->with('status', 'Berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $id)
    {
        return view('menu-halucoft/edit', ['menu' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required|numeric',
        ]);
        
        Menu::where('id', $id->id)
            ->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'detail' => $request->detail,
                'gambar' => $request->gambar,
            ]);
        return redirect('/menu')->with('status', 'Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $id)
    {
        Menu::destroy($id->id);
        return redirect('/menu')->with('status', 'Berhasil di hapus');
    }
}
