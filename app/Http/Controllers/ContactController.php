<?php

namespace App\Http\Controllers;

use App\Contact;
use Auth;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getIndex()
    {
      if (!Auth::check()) {
        return redirect()->route('welcome');
      }
      $user = Auth::user();
      $contacts = $user->contacts()->orderBy('name', 'asc')->get();
      return view('index', ['contacts' => $contacts]);
    }

    public function contactCreate(Request $request)
    {
      if (!Auth::check()) {
        return redirect()->route('welcome');
      }
      $user = Auth::user();
      $this->validate($request, [
        'email' => 'nullable|email|max:100',
        'name' => 'required|max:100',
        'address' => 'nullable|max:100',
        'phone' => 'nullable|digits_between:7,20',
      ]);
      $contact = new Contact([
        'name' => $request->input('name'),
        'phone' => $request->input('phone'),
        'email' => $request->input('email'),
        'address' => $request->input('address')
      ]);
      $user->contacts()->save($contact);
      return redirect()
        ->route('contact', ['id' => $contact->id])
        ->with('alert', 'Contact created!');
    }

    public function contactShow($id)
    {
      if (!Auth::check()) {
        return redirect()->route('welcome');
      }
      $contact = Contact::find($id);
      return view('contact', ['contact' => $contact]);
    }

    public function contactEdit($id)
    {
      if (!Auth::check()) {
        return redirect()->route('welcome');
      }
      $contact = Contact::find($id);
      return view('edit', ['contact' => $contact]);
    }

    public function contactUpdate(Request $request)
    {
      if (!Auth::check()) {
        return redirect()->route('welcome');
      }
      $this->validate($request, [
        'email' => 'nullable|email|max:100',
        'name' => 'required|max:50',
        'address' => 'nullable|max:100',
        'phone' => 'nullable|digits_between:7,20',
      ]);
      $user = Auth::user();
      $contact = Contact::find($request->input('id'));
      $contact->name = $request->input('name');
      $contact->email = $request->input('email');
      $contact->address = $request->input('address');
      $contact->phone = $request->input('phone');
      $user->contacts()->save($contact);
      return redirect()
        ->route('contact', ['id' => $contact->id])
        ->with('alert', 'Contact updated!');
    }

    public function contactDelete($id)
    {
      if (!Auth::check()) {
        return redirect()->route('welcome');
      }
      $contact = Contact::find($id);
      $contact->delete();
      return redirect()
        ->route('index')
        ->with('alert', 'Contact deleted!');
    }

}
