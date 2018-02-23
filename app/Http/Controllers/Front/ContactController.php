<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function contactForm()
    {
      return view('contact/contact');
    }

    public function action(ContactRequest $request)
    {
        // $this->validate($request, [
        //     'nom' => 'required|min:5|max:100'
        // ]);
        //
        // $post = $request->all();
        // dd($post);
        //
        return redirect()->route('home')->with('success', 'Votre message a été envoyer!');

    }
}
