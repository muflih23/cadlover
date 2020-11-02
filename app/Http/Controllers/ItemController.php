<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    public function catItemsUser(){
        $items = DB::table('items')->where('kategori', 'kucing')->orderby('nama')->get();
        return view('ackucing', ['items'=>$items]);
    }

    public function dogItemsUser(){
        $items = DB::table('items')->where('kategori', 'anjing')->orderby('nama')->get();
        return view('acanjing', ['items'=>$items]);
    }
    
    public function catItems(){
        session_start();
        if (!isset($_SESSION['admin']))
        {
            echo '<script language="javascript"> alert("Anda harus login terlebih dahulu untuk mengakses halaman ini!"); document.location="/login"; </script>';
        }
        else 
        {
            $items = DB::table('items')->where('kategori', 'kucing')->orderby('nama')->get();
            return view('admin_kucing', ['items'=>$items]);
        }   
    }

    public function dogItems(){
        session_start();
        if (!isset($_SESSION['admin']))
        {
            echo '<script language="javascript"> alert("Anda harus login terlebih dahulu untuk mengakses halaman ini!"); document.location="/login"; </script>';
        }
        else 
        {
            $items = DB::table('items')->where('kategori', 'anjing')->orderby('nama')->get();
            return view('admin_anjing', ['items'=>$items]);
        }
    }

    public function searchResult(Request $request){
        session_start();
        if (!isset($_SESSION['admin']))
        {
            echo '<script language="javascript"> alert("Anda harus login terlebih dahulu untuk mengakses halaman ini!"); document.location="/login"; </script>';
        }
        else 
        {
            $cari = $request->search;
            $items = DB::table('items')->where('nama', 'like', "%".$cari."%")->orderby('nama')->get();
            return view('searchResult', ['items' => $items]);
        }
    }

    public function userSearchResult(Request $request){
        $cari = $request->search;
        $items = DB::table('items')->where('nama', 'like', "%".$cari."%")->orderby('nama')->get();
        return view('userSearchResult', ['items' => $items]);
    }

    public function addItemView(){
        session_start();
        if (!isset($_SESSION['admin']))
        {
            echo '<script language="javascript"> alert("Anda harus login terlebih dahulu untuk mengakses halaman ini!"); document.location="/login"; </script>';
        }
        else 
        {
            return view('admin_add_item');
        }
    }

    public function addItem(Request $request){
        $t1 =  $this->code_gen(3);
        $id = $t1."".time(); //bikin item id

        DB::table('items')->insert([
            'id'=>$id,
            'nama'=>$request->nama,
            'harga'=>$request->harga,
            'kategori'=>$request->kategori,
        ]);
        
        $file = $request->file('file');           
        $name = $file->getClientOriginalName();
        $path = $file->getRealPath();
        $file->move(\base_path() ."\public/items", $name);
        DB::table('items')->where('id', $id)->update([
            'file' => $name
        ]);

        

        return redirect()->back();
    }

    public function deleteItems($id){
        $file = DB::table('items')->select('file', 'id')->where('id', $id)->first();

        File::delete('items/'.$file->file);
        DB::table('items')->where('id', $id)->delete();
        return redirect()->back()->with('info', 'Items dihapus dari list');
    }

    public function code_gen($n){
        $num = Str::random($n);
   
        return $num;
       }
}
