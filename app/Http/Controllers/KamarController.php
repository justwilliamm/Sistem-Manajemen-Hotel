<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KamarController extends Controller
{
    public function kamar()
    {
        $kamar = DB::table('kamar')
            ->get();

        return view('dKamar', ['kamar' => $kamar]);
    }

    public function detailk(Request $request)
    {
        $nok = $request->route('kamar');
        $kamar = DB::table('kamar')
            ->where('no_kamar', $nok)
            ->first();

        return view('detailKamar', ['kamar' => $kamar]);
    }

    public function tambahk()
    {
        $jenis_kamar = DB::table('kamar')->get();
        return view('tambahKamar', ['jenis' => $jenis_kamar]);
    }

    function tambahpostk(Request $request)
    {
        $no_kamar = $request->input('no');
        $lantai = $request->input('lt');
        $jenis = $request->input('jenis');
        $breakfast = $request->input('bf');
        $housekeep = $request->input('hk');
        $free_wifi = $request->input('wf');
        $tv = $request->input('tv');
        $swimming_pool = $request->input('sw');
        $harga = $request->input('hrg');
        $status = $request->input('st');

        try {
            DB::table('kamar')->insert([
                'no_kamar' => $no_kamar,
                'lantai' => $lantai,
                'jenis' => $jenis,
                'breakfast' => $breakfast,
                'housekeep' => $housekeep,
                'free_wifi' => $free_wifi,
                'tv' => $tv,
                'swimming_pool' => $swimming_pool,
                'harga' => $harga,
                'status' => $status
            ]);

            return redirect()->intended('dkamar')->with("Sukses", "Tambah Kamar berhasil!");
        } catch (\Exception $e) {
            //dd($e);
            return redirect(route('tambah'))->with("error", "Tambah Kamar gagal, coba lagi!");
        }
    }

    public function editk(Request $request)
    {
        $nok = $request->route('kamar');
        $kamar = DB::table('kamar')
            ->where('no_kamar', $nok)
            ->first();
        return view('editKamar', ['kamar' => $kamar]);
    }

    public function hapusk(Request $request)
    {
        $nok = $request->route('kamar');
        DB::table('kamar')
            ->where('no_kamar', $nok)
            ->delete();
        $kamar = DB::table('kamar')
            ->get();

        return view('dKamar', ['kamar' => $kamar]);
    }

    function editpostk(Request $request)
    {
        $no_kamar = $request->input('no');
        $lantai = $request->input('lt');
        $jenis = $request->input('jenis');
        $breakfast = $request->input('bf');
        $housekeep = $request->input('hk');
        $free_wifi = $request->input('wf');
        $tv = $request->input('tv');
        $swimming_pool = $request->input('sw');
        $harga = $request->input('hrg');
        $status = $request->input('st');

        $nok = $request->input('primary');
        try {
            DB::table('kamar')
            ->where('no_kamar', $nok)
            ->update([
                'no_kamar' => $no_kamar,
                'lantai' => $lantai,
                'jenis' => $jenis,
                'breakfast' => $breakfast,
                'housekeep' => $housekeep,
                'free_wifi' => $free_wifi,
                'tv' => $tv,
                'swimming_pool' => $swimming_pool,
                'harga' => $harga,
                'status' => $status
            ]);

            return redirect()->intended('dkamar')->with("Sukses", "Edit Pemesanan berhasil!");
        } catch (\Exception $e) {
            dd($e);
            //return redirect(route('tambah'))->with("error", "Edit Pemesanan gagal, coba lagi!");
        }
    }
}
