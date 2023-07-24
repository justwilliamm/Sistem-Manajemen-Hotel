<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function user()
    {
        $user = DB::table('user')
            ->get();

        return view('dUser', ['user' => $user]);
    }

    public function tambahu()
    {
        return view('tambahUser');
    }

    function tambahpostu(Request $request)
    {
        $id_user = $request->input('id');
        $nama = $request->input('nama');
        $username = $request->input('un');
        $password = $request->input('pass');
        $akses = $request->input('akses');
        
        try {
            DB::table('user')->insert([
                'id_user' => $id_user,
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'akses' => $akses
            ]);

            return redirect()->intended('duser')->with("Sukses", "Tambah User berhasil!");
        } catch (\Exception $e) {
            //dd($e);
            return redirect(route('tambah'))->with("error", "Tambah User gagal, coba lagi!");
        }
    }

    public function editu(Request $request)
    {
        $nok = $request->route('user');
        $user = DB::table('user')
            ->where('id_user', $nok)
            ->first();
        return view('editUser', ['user' => $user]);
    }

    public function hapusu(Request $request)
    {
        $nok = $request->route('user');
        DB::table('user')
            ->where('id_user', $nok)
            ->delete();
        $user = DB::table('user')
            ->get();

        return view('dUser', ['user' => $user]);
    }

    function editpostu(Request $request)
    {
        $id_user = $request->input('id');
        $nama = $request->input('nama');
        $username = $request->input('un');
        $password = $request->input('pass');
        $akses = $request->input('akses');

        $nok = $request->input('primary');
        try {
            DB::table('user')
            ->where('id_user', $nok)
            ->update([
                'id_user' => $id_user,
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'akses' => $akses
            ]);

            return redirect()->intended('duser')->with("Sukses", "Edit User berhasil!");
        } catch (\Exception $e) {
            dd($e);
            //return redirect(route('tambah'))->with("error", "Edit User gagal, coba lagi!");
        }
    }
}
