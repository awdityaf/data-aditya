<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pembayaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MembershipController extends Controller
{
    public function showForm()
    {

        $data = Kategori::get();
        $data = $data->map(function ($item) {
            $originalHarga = intval(str_replace('.', '', $item->harga)); // Hapus titik dan konversi ke integer
            $item->harga_asli = $originalHarga; // Harga asli tanpa perubahan
            $item->harga_diskon = $originalHarga - ($originalHarga * 0.1); // Harga setelah diskon 10%
            return $item;
        });
        return view('users.membership', ['data' => $data]);
    }

    public function register(Request $request)
    {
        // dd($request);
        // Validasi input
        $request->validate([
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'password' => 'required|min:8',
            'no_handpone' => 'required|max:12',
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email sudah terdaftar',
            'email.email' => 'Email tidak valid',
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 8 karakter',
            'no_handpone.required' => 'No Handpone tidak boleh kosong',
            'no_handpone.max' => 'No Handpone maksimal 12 karakter',
        ]);

        // Membuat pengguna baru
        $user = User::insert([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'no_handphone' => $request->no_handpone,
            'id_kategori' => $request->id_kategori
        ]);
        if ($user) {
            return redirect('login');
        } else {
            return 'gagal';
        }
    }

    public function showSuccess()
    {
        return view('tamplate.register-success');
    }

    public function users(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Mengarahkan ke halaman sukses setelah registrasi
        return redirect()->route('tamplate.register-success');
    }
    public function Dasboarduser()
    {
        $data = Kategori::get();
        return view('users.dasboarduser', ['data' => $data]);
    }
    public function Buttonhalaman()
    {
        return view('users.halamanbutton');
    }
    public function Transaksi()
    {
        $id = auth()->user()->id;
        $data = User::where('id', $id)->with('kategori')->get();
        // $data = User::with('kategori')->where('status','Mati')->get();
        return view('users.transaksi', compact('data',));
    }
    public function confrimPembayaran(Request $request)
    {
        $randStr = $this->randomstring(6);
        $user = Pembayaran::insert([
            'nomor_pembayaran' => $randStr,
            'nomor_rekening' => $request->nomor_rekening,
            'nama_bank' => $request->nama_bank,
            'nama_penerima' => $request->nama_penerima,
            'nomor_hp_penerima' => $request->nomor_hp_penerima,
            'jumlah_pembayaran' => $request->jumlah_pembayaran

        ]);
        return redirect('viewngenteni');
    }
    private function randomstring($length)
    {
        $str = "";
        $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
        $max = strlen($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }
    public function Ngenteni(){
        return view('users.viewngenteni');
    }
}
