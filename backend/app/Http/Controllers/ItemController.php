<?php

namespace App\Http\Controllers;

use App\Item;//モデルの指定
//use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function getList(Request $request)
    {
        $data = Item::all();
//    条件で絞り込む時はクエリビルダで
//    $data = Item::where('id', '>', 10)->get();
//    これでも同じ
//    $data = DB::table('items')->where('id', '>', 10)->where('price',100)->get();

        return view('item.list', ['data' => $data]);
//   そのまま値をreturnするとJSONになります。
//   return $data;
    }
}