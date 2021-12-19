<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth,DB;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = DB::table('transaksi')->get();
        $response = [
            'message' => 'Semua Transaksi',
            'data' => $data
        ];
        return response($response, 200);
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'tgl_transaksi' => 'required|string',
            'pemasukan' => 'required|integer',
            'pengeluaran' => 'required|integer',
            'keterangan' => 'required|string',
            'user_id' => 'required|string',
        ]);
        $transaksi = DB::table('transaksi')->insert([
            'tgl_transaksi' => $validate['tgl_transaksi'],
            'pemasukan' => $validate['pemasukan'],
            'pengeluaran' => $validate['pengeluaran'],
            'keterangan' => $validate['keterangan'],
            'user_id' => $validate['user_id'],
        ]);


        // $product = Product::create([
        //     'name' => $validate['name'],
        //     'slug' => Str::slug($validate['name'], '-'),
        //     // 'image' => $validate['image'],
        //     'image' => $image->hashName(),
        //     'price' => $validate['price'],
        //     'stock' => $validate['stock'],
        //     'specification' => $validate['specification'],
        //     'function' => $validate['function'],
        //     'utility' => $validate['utility'],
        //     'commodity' => $validate['commodity']
            
        // ]);

        $response = [
            'message' => 'Create Transaksi Successful',
            'data' => $transaksi,
        ];

        return response($response, 201);
    }
    public function chart($id_user){
        $chart = DB::table('transaksi')->where('user_id',$id_user)->get();
        
        $sum_bulan1 = DB::table('transaksi')->where('user_id',$id_user)->whereMonth('tgl_transaksi', '01')->get();
        $total1 = 0;
        $p1 = 0;
        $p2 = 0;

        foreach($sum_bulan1 as $row){
            $p1 += $row->pemasukan;
            $p2 += $row->pengeluaran;
            $result = $row->pemasukan - $row->pengeluaran;
            $total1 += $result;
        }
        $sum_bulan2 = DB::table('transaksi')->where('user_id',$id_user)->whereMonth('tgl_transaksi', '02')->get();
        $total2 = 0;
        foreach($sum_bulan2 as $row){
            $p1 += $row->pemasukan;
            $p2 += $row->pengeluaran;
            $result = $row->pemasukan - $row->pengeluaran;
            $total2 += $result;
        }
        $sum_bulan3 = DB::table('transaksi')->where('user_id',$id_user)->whereMonth('tgl_transaksi', '03')->get();
        $total3 = 0;
        foreach($sum_bulan3 as $row){
            $p1 += $row->pemasukan;
            $p2 += $row->pengeluaran;
            $result = $row->pemasukan - $row->pengeluaran;
            $total3 += $result;
        }
        $sum_bulan4 = DB::table('transaksi')->where('user_id',$id_user)->whereMonth('tgl_transaksi', '04')->get();
        $total4 = 0;
        foreach($sum_bulan2 as $row){
            $p1 += $row->pemasukan;
            $p2 += $row->pengeluaran;
            $result = $row->pemasukan - $row->pengeluaran;
            $total4 += $result;
        }
        $sum_bulan5 = DB::table('transaksi')->where('user_id',$id_user)->whereMonth('tgl_transaksi', '05')->get();
        $total5 = 0;
        foreach($sum_bulan5 as $row){
            $p1 += $row->pemasukan;
            $p2 += $row->pengeluaran;
            $result = $row->pemasukan - $row->pengeluaran;
            $total5 += $result;
        }
        $sum_bulan6 = DB::table('transaksi')->where('user_id',$id_user)->whereMonth('tgl_transaksi', '06')->get();
        $total6 = 0;
        foreach($sum_bulan6 as $row){
            $p1 += $row->pemasukan;
            $p2 += $row->pengeluaran;
            $result = $row->pemasukan - $row->pengeluaran;
            $total6 += $result;
        }
        $sum_bulan7 = DB::table('transaksi')->where('user_id',$id_user)->whereMonth('tgl_transaksi', '07')->get();
        $total7 = 0;
        foreach($sum_bulan7 as $row){
            $p1 += $row->pemasukan;
            $p2 += $row->pengeluaran;
            $result = $row->pemasukan - $row->pengeluaran;
            $total7 += $result;
        }
        $sum_bulan8 = DB::table('transaksi')->where('user_id',$id_user)->whereMonth('tgl_transaksi', '08')->get();
        $total8 = 0;
        foreach($sum_bulan8 as $row){
            $p1 += $row->pemasukan;
            $p2 += $row->pengeluaran;
            $result = $row->pemasukan - $row->pengeluaran;
            $total8 += $result;
        }
        $sum_bulan9 = DB::table('transaksi')->where('user_id',$id_user)->whereMonth('tgl_transaksi', '09')->get();
        $total9 = 0;
        foreach($sum_bulan9 as $row){
            $p1 += $row->pemasukan;
            $p2 += $row->pengeluaran;
            $result = $row->pemasukan - $row->pengeluaran;
            $total9 += $result;
        }
        $sum_bulan10 = DB::table('transaksi')->where('user_id',$id_user)->whereMonth('tgl_transaksi', '10')->get();
        $total10 = 0;
        foreach($sum_bulan10 as $row){
            $p1 += $row->pemasukan;
            $p2 += $row->pengeluaran;
            $result = $row->pemasukan - $row->pengeluaran;
            $total10 += $result;
        }
        $sum_bulan11 = DB::table('transaksi')->where('user_id',$id_user)->whereMonth('tgl_transaksi', '11')->get();
        $total11 = 0;
        foreach($sum_bulan11 as $row){
            $p1 += $row->pemasukan;
            $p2 += $row->pengeluaran;
            $result = $row->pemasukan - $row->pengeluaran;
            $total11 += $result;
        }
        $sum_bulan12 = DB::table('transaksi')->where('user_id',$id_user)->whereMonth('tgl_transaksi', '12')->get();
        $total12 = 0;
        foreach($sum_bulan12 as $row){
            $p1 += $row->pemasukan;
            $p2 += $row->pengeluaran;
            $result = $row->pemasukan - $row->pengeluaran;
            $total12 += $result;
        }
        $transaksi = [
            'sum_bulan1' => $total1,
            'sum_bulan2' => $total2,
            'sum_bulan3' => $total3,
            'sum_bulan4' => $total4,
            'sum_bulan5' => $total5,
            'sum_bulan6' => $total6,
            'sum_bulan7' => $total7,
            'sum_bulan8' => $total8,
            'sum_bulan9' => $total9,
            'sum_bulan10' => $total10,
            'sum_bulan11' => $total11,
            'sum_bulan12' => $total12,
            'p1' => $p1,
            'p2' => $p2,
            'total' => $p1-$p2,
        ];
        $response = [
            'transaksi' => $transaksi,
        ];
        return response($response, 211);
    }

    public function delete($id){
        
        DB::table('transaksi')->where('id',$id)->delete();
        $response = [
            'message' => 'Berhasil Menghapus Transaksi',
        ];
        return response($response, 209);
    }
}
