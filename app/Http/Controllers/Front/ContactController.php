<?php

namespace App\Http\Controllers\Front;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactController extends Controller
{
    public function contactForm()
    {
      return view('contact/contact');
    }

    public function action(ContactRequest $request)
    {

      $post = $request->all();
      \DB::table('contact')->insert([
          'nom'      => $post['nom'],
          'email'    => $post['email'],
          'sujet'    => $post['sujet'],
          'message'  => $post['message'],
          'created_at' => Carbon::now(),
        ]);
        return redirect()->route('contact-view')->with('success', 'Votre message a été envoyer!');

    }
}
