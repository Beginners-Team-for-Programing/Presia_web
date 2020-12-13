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

        //20201210_yoshigai_同じページで完結するため、バリデーションと値の保存を一つのメソッドにまとめた
        $contact = new Contact();
        $contact -> name = $request -> name;
        $contact -> mail = $request -> mail;
        $contact -> tel = $request -> tel;
        $contact -> contents = $request -> contents;
        $contact -> checkbox = $request -> checkbox;//バリデーションしたら保存しないとエラー？　20201210_yoshigai
        $contact ->save();
        return view('index', [
            'contact' => $contact,
        ]);
    }

    public function create(Request $inputs) {
        $contact = new Contact();
        $contact -> name = $request -> name;
        $contact -> mail = $request -> mail;
        $contact -> tel = $request -> tel;
        $contact -> contents = $request -> contents;
        $contact ->save();
        return view('index');
    }

}
