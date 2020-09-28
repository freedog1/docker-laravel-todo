<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class PageController extends Controller
{
//    public function index($str, Request $request, Response $response) {
//        return view('page.index',compact('str','request','response'));
//    }
    public function index(Request $request, Response $response) {
        return view('page.index',compact('request','response'));
    }
    public function post(Request $request) {
        $validate_rule = ['title' => 'required'];
        $this->validate($request, $validate_rule);
        return view('page.post',['title' => $request->title, 'body' => $request->body]);
    }
}