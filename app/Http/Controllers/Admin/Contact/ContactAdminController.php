<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Contact;

class ContactAdminController extends Controller
{
  public function __construct(User $request)
  {

      $this->middleware('auth');
      $this->middleware('admin');
  }

  public function contactAdminview()
  {

    $contacts = \DB::table('contact')->paginate(5);


    return view('admin/contact/contactadmin', compact('contacts'));
  }

  public function contactAdminDelete($id)
  {
    $contact = Contact::findOrFail($id);
    $contact->delete();

    return redirect()->route('admin-contact-view')->with('success', 'suppression éffectué');
  }
}
