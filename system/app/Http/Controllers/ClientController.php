<?php

namespace App\Http\Controllers;

use App\Models\produk;

class ClientController extends Controller
{


    function showabout()
    {
        return view('fontend.about');
    }

    function showlogin()
    {
        return view('fontend.login');
    }


    function showcart()
    {
        return view('fontend.cart');
    }


    function showcheckout()
    {
        return view('fontend.checkout');
    }


    function showsingle()
    {
        return view('fontend.single');
    }

    function showcontact()
    {
        return view('fontend.contact');
    }


    function showhome()
    {
        return view('fontend.home');
    }

    function showshop()
    {
        $data['list_produk'] = Produk::all();
        return view('fontend.shop', $data);
    }


    function filter()
    {
        $nama = request('nama');
        $data['nama'] = $nama;
        $data['produk_list'] = produk::where('nama', 'like', "%$nama%")->get();

        return view('fontend.shop', $data);
    }
}
