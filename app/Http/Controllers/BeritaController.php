<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use DB;

class BeritaController extends Controller
{
    public function index()
    {
        $datas = Berita::get();
        return view('berita.index', compact('datas'));
    }

    public function tambah()
    {
        return view('berita.tambah');
    }
    
    public function store(Request $request)
    {
        $data = Berita::create($request->all());
        return redirect('/')->with('success','Data berhasil dihapus');
    }

    public function view($id)
    {
        $increment = Berita::find($id)->update([
            'dilihat' => DB::raw('dilihat+1')
        ]);

        $data = Berita::find($id);

        return view('berita.view', compact('data'));
    }

    public function edit($id)
    {
        $data = Berita::find($id);
        return view('berita.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Berita::find($id)->update($request->all());

        return redirect('/')->with('success','Data berhasil dihapus');
        
    }

    public function destroy($id)
    {
        
        $data = Berita::find($id)->delete();
        return redirect()->back()->with('success','Data berhasil dihapus');
    }
}