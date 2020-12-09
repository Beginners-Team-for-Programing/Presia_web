<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Http\Requests\beginnerRequest;

use App\Models\Contact;

class ContactController extends Controller
{
    public function get(Request $request) {
        return view('index');
    }

    public function confirm(beginnerRequest $request)
 {

     //フォームから受け取ったすべてのinputの値を取得
     $inputs = $request->all();

     // var_dump($inputs);
     // exit;

     //入力内容確認ページのviewに変数を渡して表示
     return view('/', [
         'inputs' => $inputs,
     ]);
 }

    public function create(Request $request) {
        $contact = new Contact();
        $contact -> name = $request -> name;
        $contact -> mail = $request -> mail;
        $contact -> tel = $request -> tel;
        $contact -> contents = $request -> contents;
        // $contact -> checkbox = $request -> checkbox;
        $contact ->save();
        return view('index');
    }

}
