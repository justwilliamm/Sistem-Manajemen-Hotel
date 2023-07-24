<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesanController extends Controller
{
    public function pesan()
    {
        $book = DB::table('book')
            ->get();

        return view('dPesan', ['book' => $book]);
    }

    public function detail(Request $request)
    {
        $nok = $request->route('book');
        $book = DB::table('book')
            ->where('no_kamar', $nok)
            ->first();

        return view('detailPesan', ['book' => $book]);
    }

    public function tambah()
    {
        $jenis_kamar = DB::table('kamar')->get();
        return view('tambahPesan', ['jenis' => $jenis_kamar]);
    }

    function tambahpost(Request $request)
    {
        $nama_konsumen = $request->input('konsumen');
        $no_ktp = $request->input('ktp');
        $tgl_lahir = $request->input('lhr');
        $jk = $request->input('jk');
        $no_telp = $request->input('telp');
        $jenis = $request->input('jenis');
        $no_kamar = $request->input('no');
        $tgl_in = $request->input('in');
        $tgl_out = $request->input('out');
        $sub_total = null;
        $sub1 = $request->input('sub1');
        $sub2 = $request->input('sub2');
        $sub3 = $request->input('sub3');
        $sub4 = $request->input('sub4');
        $sub5 = $request->input('sub5');

        if ($sub1) {
            $sub_total = $sub1;
        } else if ($sub2) {
            $sub_total = $sub2;
        } else if ($sub3) {
            $sub_total = $sub3;
        } else if ($sub4) {
            $sub_total = $sub4;
        } else if ($sub5) {
            $sub_total = $sub5;
        }

        try {
            DB::table('book')->insert([
                'nama_konsumen' => $nama_konsumen,
                'no_ktp' => $no_ktp,
                'tgl_lahir' => $tgl_lahir,
                'jk' => $jk,
                'no_telp' => $no_telp,
                'jenis' => $jenis,
                'no_kamar' => $no_kamar,
                'tgl_in' => $tgl_in,
                'tgl_out' => $tgl_out,
                'sub_total' => $sub_total
            ]);

            return redirect()->intended('dpesan')->with("Sukses", "Tambah Pemesanan berhasil!");
        } catch (\Exception $e) {
            //dd($e);
            return redirect(route('tambah'))->with("error", "Tambah Pemesanan gagal, coba lagi!");
        }
    }

    public function edit(Request $request)
    {
        $jenis_kamar = DB::table('kamar')->get();
        $nok = $request->route('book');
        $book = DB::table('book')
            ->where('no_kamar', $nok)
            ->first();
        return view('editPesan', ['book' => $book, 'jenis'=>$jenis_kamar]);
    }

    public function hapus(Request $request)
    {
        $nok = $request->route('book');
        DB::table('book')
            ->where('no_kamar', $nok)
            ->delete();
        $book = DB::table('book')
            ->get();

        return view('dPesan', ['book' => $book]);
    }

    function editpost(Request $request)
    {
        $nama_konsumen = $request->input('konsumen');
        $no_ktp = $request->input('ktp');
        $tgl_lahir = $request->input('lhr');
        $jk = $request->input('jk');
        $no_telp = $request->input('telp');
        $jenis = $request->input('jenis');
        $no_kamar = $request->input('no');
        $tgl_in = $request->input('in');
        $tgl_out = $request->input('out');
        $sub_total = null;
        $sub1 = $request->input('sub1');
        $sub2 = $request->input('sub2');
        $sub3 = $request->input('sub3');
        $sub4 = $request->input('sub4');
        $sub5 = $request->input('sub5');

        if ($sub1) {
            $sub_total = $sub1;
        } else if ($sub2) {
            $sub_total = $sub2;
        } else if ($sub3) {
            $sub_total = $sub3;
        } else if ($sub4) {
            $sub_total = $sub4;
        } else if ($sub5) {
            $sub_total = $sub5;
        }

        $nok = $request->input('primary');
        try {
            DB::table('book')
            ->where('no_kamar', $nok)
            ->update([
                'nama_konsumen' => $nama_konsumen,
                'no_ktp' => $no_ktp,
                'tgl_lahir' => $tgl_lahir,
                'jk' => $jk,
                'no_telp' => $no_telp,
                'jenis' => $jenis,
                'no_kamar' => $no_kamar,
                'tgl_in' => $tgl_in,
                'tgl_out' => $tgl_out,
                'sub_total' => $sub_total
            ]);

            return redirect()->intended('dpesan')->with("Sukses", "Edit Pemesanan berhasil!");
        } catch (\Exception $e) {
            dd($e);
            //return redirect(route('tambah'))->with("error", "Edit Pemesanan gagal, coba lagi!");
        }
    }
}
