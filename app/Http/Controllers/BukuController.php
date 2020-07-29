<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Category;

class BukuController extends Controller
{
    public function welcome(){
        return view('buku.dashboard');
    }

    public function index(){
        $batas = 5;
        $jumlah_buku = Buku::count();
    	$databuku = Buku::orderBy('id','desc')->paginate($batas);
    	$no = $batas * ($databuku->currentPage() -1);
    	return view('buku.index', compact('databuku', 'no', 'jumlah_buku'));
    }

    public function create(){
        $categories = Category::all();
    	return view('buku.create', compact('categories'));
    }

    public function store(Request $request){
    	$this->validate($request,[
    		'judul' => 'required',
    		'penulis' => 'required',
    		'harga' => 'required',
    		'tgl_terbit' => 'required',
            'category_id' => 'required'
    	]);

    	$buku = new Buku;
    	$buku->judul = $request->judul;
    	$buku->penulis = $request->penulis;
    	$buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
    	$buku->category_id = $request->category_id;
		$buku->save();
		
    	return redirect('/buku')->with('success','Data Berhasil Disimpan');
    }

    public function edit($id){
    	$buku = Buku::find($id);
        $categories = Category::all();
    	return view('buku.edit', compact('buku', 'categories'));
    }

    public function update(Request $request, $id){
    	$this->validate($request,[
    		'judul' => 'required',
    		'penulis' => 'required',
    		'harga' => 'required',
            'tgl_terbit' => 'required',
    		'category_id' => 'required'
    	]);

    	$buku = Buku::find($id);
    	$buku->judul = $request->judul;
    	$buku->penulis = $request->penulis;
    	$buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
    	$buku->category_id = $request->category_id;
    	$buku->update();
    	return redirect('/buku')->with('update','Data Berhasil Diupdate');
    }

    public function destroy($id){
    	$buku = Buku::find($id);
    	$buku->delete();
    	return redirect('/buku')->with('delete','Data Berhasil Dihapus');
    }

    public function search(Request $request){
        $batas = 5;
        $cari = $request->kata;
        $databuku = Buku::where('judul', 'like', "%".$cari."%")->paginate($batas);
        $no = $batas * ($databuku->currentPage() -1);
        return view('buku.search', compact('databuku', 'no', 'cari'));
    }
}
