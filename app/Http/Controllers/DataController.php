<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pembayaran;
use App\Models\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        return redirect()->route('index');
    }
    public function dasboard()
    {
        $data = User::all();
        return view('admin.dasboard', ['data' => $data]);
    }
    public function tambah()
    {
        return view('admin.tambah');
    }
    public function kategori()
    {
        $data = Kategori::get();
        return view('admin.adkategori ', ['data' => $data]);
    }
    public function Adkategori()
    {
        $data = Kategori::get();
        return view('admin.adkategori ', ['data' => $data]);
    }
    public function createK(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'harga' => 'required',
            'durasi' => 'required',
        ], [
            'kategori.required' => 'masukkan jenis kategori berlangganan'
        ]);
        Kategori::insert([
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'waktu' => $request->durasi,
            'deskripsi' => $request->deskripsi
        ]);
        return back();
    }
    public function deleteK($id)
{
    // Cari kategori berdasarkan ID
    $kategori = Kategori::find($id);

    // Periksa apakah kategori ada
    if (!$kategori) {
        return back()->with('error', 'Kategori tidak ditemukan.');
    }

    // Periksa apakah ada relasi di tabel users
    $relatedUsersCount = $kategori->users()->count();

    if ($relatedUsersCount > 0) {
        return back()->with('error', 'Kategori tidak dapat dihapus karena masih digunakan oleh pengguna.');
    }

    // Jika tidak ada relasi, hapus kategori
    $kategori->delete();

    return back()->with('success', 'Kategori berhasil dihapus.');
}

    
    public function deleteU($id)
    {
        $hapus = User::where('id', $id);
        $hapus->delete();
        return back();
    }

    public function editK($id)
    {
        $data = Kategori::where('id', $id)->get();
        return view('admin.editK', ['data' => $data]);
    }
    public function updateK(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required'
        ], [
            'kategori.required' => 'masukkan jenis kategori berlangganan'
        ]);
        $edit = Kategori::where('id', $id)->update([
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'waktu' => $request->durasi,
            'deskripsi' => $request->deskripsi

        ]);
        if ($edit) {
            echo "<script> alert('kategori berhasil di edit')
            window.location.href='/kategori';</script>";
        } else {
            echo "<script> alert('kategori gagal di tambahkan')
            window.location.href='/kategori';</script>";
        }
    }
    public function DataMember()
    {
        $data = User::where('status','Aktif')->get();
        return view('admin.datamember', ['data' => $data]);
    }
    public function Page()
    {
        $data = User::with('kategori')->get();
        return view('admin.page', ['data' => $data]);
    }
    public function confrim(Request $request){
        User::where('id',$request->id)->update([
            "status" => $request->status
        ]);
        return back();
    }
    public function Datamasuk(){
        $data = User::where('status','Mati')->get();
        return view('admin.datamasuk', ['data' => $data]);
    }
    public function ConfrimP($id ){
        User::where('id',$id)->update([
            "status" => "aktif"
        ]);
        return back();
    }
}