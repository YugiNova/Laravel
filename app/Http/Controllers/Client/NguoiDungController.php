<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NguoiDungController extends Controller
{
    public function luuNguoiDung(Request $req) {
        $req->validate([
            'email' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'password' => 'required|min:3|max:20'
        ]);

        $check = DB::insert('INSERT INTO nguoidung (name,email,password)
        VALUES (?,?,?)', [$req->name,$req->email,Hash::make($req->password)]);

        return redirect()->route('client.home')->with('message','Dang ky thanh cong');
    }

    public function dangNhap(Request $req) {
        dd($req->all());
    }
}
