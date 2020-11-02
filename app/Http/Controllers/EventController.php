<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function showEvent(){
        session_start();
        if (!isset($_SESSION['admin']))
        {
            echo '<script language="javascript"> alert("Anda harus login terlebih dahulu untuk mengakses halaman ini!"); document.location="/login"; </script>';
        }
        else 
        {
            $events = DB::table('events')
            ->orderBy('uploaded_at')
            ->get();

            return view('admin_events', ['events'=>$events]);
        }

    }

    public function listEvent(){
        $events = DB::table('events')
        ->orderBy('uploaded_at')
        ->get();

        return view('event', ['events'=>$events]);
    }

    public function addEventView(){
        session_start();
        if (!isset($_SESSION['admin']))
        {
            echo '<script language="javascript"> alert("Anda harus login terlebih dahulu untuk mengakses halaman ini!"); document.location="/login"; </script>';
        }
        else 
        {
            return view('admin_add_events');
        }
    }

    public function addEvent(Request $request)
    {   
        $this->validate($request, [
            'file' => 'required'
        ]);

        $t1 =  $this->code_gen(3);
        $id = $t1."".time(); //bikin item id

        DB::table('events')->insert([
            'id'=>$id,
            'judul'=>$request->judul,
            'isi'=>$request->isi,
            'uploaded_at'=>date('Y-m-d H:i:s')
        ]);
        
        $file = $request->file('file');           
        $name = $file->getClientOriginalName();
        $path = $file->getRealPath();
        $file->move(\base_path() ."\public/uploads", $name);
        DB::table('events')->where('id', $id)->update([
            'file' => $name
        ]);

        

        return redirect('/admin')->with('sukses', 'event has been added');
    }

    public function deleteEvent($id){
        $file = DB::table('events')->select('file', 'id')->where('id', $id)->first();

        File::delete('uploads/'.$file->file);
        DB::table('events')->where('id', $id)->delete();
        return redirect('/a_event')->with('info', 'Event dihapus dari list');
    }

    public function code_gen($n){
        $num = Str::random($n);
   
        return $num;
       }
}
