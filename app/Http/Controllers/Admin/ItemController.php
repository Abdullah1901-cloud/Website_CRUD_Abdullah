<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index(){
        $items = DB::table('items')->get();
        return view('pages.item.index',[
            "items" => $items,
        ]);
    }
    public function create(){
        return view('pages.item.create');
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            "nama_item" => "required|min:3",
            "uom" => "required|min:3",
            "harga_beli" => "required",
            "harga_jual" => "required",
        ]);
        Item::create([
            "nama_item" => $request->input('nama_item'),
            "uom" => $request->input('uom'),
            "harga_beli" => $request->input('harga_beli'),
            "harga_jual" => $request->input('harga_jual'),
        ]);
        return redirect('/item');
    }

    public function edit($id){
        $item = Item::findOrFail( $id);
        return view('pages.item.edit',[
            "item" => $item,
        ]);
    }
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            "nama_item" => "required|min:3",
            "uom" => "required|min:3",
            "harga_beli" => "required",
            "harga_jual" => "required",
        ]);
        Item::where('id_item',$id)->update([
            "nama_item" => $request->input('nama_item'),
            "uom" => $request->input('uom'),
            "harga_beli" => $request->input('harga_beli'),
            "harga_jual" => $request->input('harga_jual'),
        ]);
        return redirect('/item');
    }

    public function delete($id)
    {
        $item = Item::where('id_item',$id);
        $item->delete();
        return redirect('/item');
    }
}
