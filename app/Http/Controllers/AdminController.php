<?php

namespace App\Http\Controllers;

use App\Item;
use App\Item_Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function itemlist()
    {
        $dataitem = Item::get();
        return view('admin.item', [
            'dataitem' => $dataitem
        ]);
    }
    public function itemaction(Request $req)
    {
        if (Input::get('detail')) {
            $id = $req->id;
            return redirect()->route('viewitem0', [$id]);
        } else if (Input::get('edit')) {
            $id = $req->id;
            return redirect()->route('edititem0', [$id]);
        } else if (Input::get('warna')) {
            echo 'warna';
        } else if (Input::get('hapus')) {
            echo 'hapus';
        }
    }
    public function viewitem($id)
    {
        $dataitem = Item::where('id', $id)->get();
        $datawarna = Item_Color::where('id_item', $id)->get();
        return view('admin.itemview', [
            'dataitem' => $dataitem,
            'datawarna' => $datawarna
        ]);
    }
    public function edititem($id)
    {
        $dataitem = Item::where('id', $id)->get();
        $datawarna = Item_Color::where('id_item', $id)->get();
        return view('admin.itemedit', [
            'dataitem' => $dataitem,
            'datawarna' => $datawarna
        ]);
    }
    public function updateitem(Request $req)
    {
        Item::where('id', $req->id)->update([
            'namaitem' => $req->namaitem,
            'harga' => $req->harga,
            'diskonstate' => $req->diskonstate,
            'diskon' => $req->diskon
        ]);
        return redirect('admin/item');
    }
}
