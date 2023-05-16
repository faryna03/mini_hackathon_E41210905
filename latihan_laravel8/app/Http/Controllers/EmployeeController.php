<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        
        $data = Employee::all();
        return view('datapegawai', compact('data'));
    }
    // menampilkan data di page tambah
    public function tambahpegawai(){
        return view('tambahdata');
    }
    // memasukkan data
    public function insertdata(Request $request){
        Employee::create($request->all());
        return redirect()->route('pegawai')->with('success','Data Berhasil Di Tambahkan');
    }
     // menampilkan data di page edit data 
    public function tampilkandata($id){
        $data = Employee::find($id);

        return view('tampildata', compact('data'));
    }
    // menampilkan data yang telah di edit ke database
    public function updatedata(Request $request, $id){
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success','Data Berhasil Di update');
    }
    // menghapus data 
    public function delete($id){
        $data = Employee::find($id);
        $data->delete(); 
        return redirect()->route('pegawai')->with('success','Data Berhasil Di Hapus');
    }
    // menampilkan data image
    public function dropzone_store(Request $request)
    {
        
        $request->validate([
            'picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        ]);
        return redirect()->back();

        $imgname = $request->imgname('picture');

        $fileName = 'pdf_'.time().'.'.$imgname->extension();
    //file tsb masuk ke dalam folder dataImage
        $imgname->move(public_path('/dataImage'), $imgname);

    }
}
