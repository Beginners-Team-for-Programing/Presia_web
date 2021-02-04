<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Http\Requests\beginnerRequest;

use App\Models\Contact;
use App\Mail\presia_mail;
use Illuminate\Support\Facades\Mail;

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

        Mail::to($contact -> mail)->send(new presia_mail($contact));

        // 画面リロードで、同じメールが何度も表示されるため変更   view --> redirect
        return redirect('/');

        // return view('index', [
        //     'contact' => $contact,
        // ]);
    }
}
