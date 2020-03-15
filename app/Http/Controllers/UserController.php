<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class UserController extends Controller
{
  public function getIndex()
  {
    if (!Auth::check()) {
      return redirect()->route('welcome');
    }
    $users = User::all()->orderBy('name', 'asc')->get();
    return view('adminIndex', ['users' => $users]);
  }

  public function userShow()
  {
    if (!Auth::check()) {
      return redirect()->route('welcome');
    }
    $user = Auth::user();
    return view('userShow', ['user' => $user]);
  }

  public function userEdit()
  {
    if (!Auth::check()) {
      return redirect()->route('welcome');
    }
    $user = Auth::user();
    return view('userEdit', ['user' => $user]);
  }

  public function emailUpdate(Request $request)
  {
    if (!Auth::check()) {
      return redirect()->route('welcome');
    }
    $this->validate($request, [
      'email' => ['required', 'string', 'confirmed', 'email', 'max:100', 'unique:users'],
    ]);
    $user = Auth::user();
    if ($user->email == $request->input('oldEmail')) {
        if (Hash::check($request->input('password'), $user->password)) {
            $user->email = $request->input('email');
            $user->save();
            return redirect()
                ->route('dash', ['user' => $user])
                ->with('alert', 'Email Updated!');
        }
        $user = Auth::user();
        return redirect()
            ->route('emailChange', ['user' => $user])
            ->with('error', 'Incorrect Password');
    }
    $user = Auth::user();
    return redirect()
        ->route('emailChange', ['user' => $user])
        ->with('error', '"Current email" must match your current email.');
  }

  public function nameUpdate(Request $request)
  {
    if (!Auth::check()) {
      return redirect()->route('welcome');
    }
    $this->validate($request, [
      'name' => ['required', 'string', 'max:100'],
    ]);
    $user = Auth::user();
    $user->name = $request->input('name');
    $user->save();
    return redirect()
      ->route('dash', ['user' => $user])
      ->with('alert', 'Name Updated!');
  }

    public function passwordUpdate(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('welcome');
        }
        $this->validate($request, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = Auth::user();
        if ($user->email == $request->input('email')) {
            if (Hash::check($request->input('oldPassword'), $user->password)) {
                $user = Auth::user();
                $user->password = Hash::make($request->input('password'));
                $user->save();
                return redirect()
                    ->route('dash', ['user' => $user])
                    ->with('alert', 'Password Updated!');
            }
            $user = Auth::user();
            return redirect()
                ->route('passwordReset', ['user' => $user])
                ->with('error', 'Incorrect Password');
        }
        $user = Auth::user();
        return redirect()
            ->route('passwordReset', ['user' => $user])
            ->with('error', 'Incorrect Email');
    }

  public function userDelete()
  {
    if (!Auth::check()) {
      return redirect()->route('welcome');
    }
    $user = Auth::user();
    $user->delete();
    return redirect()
      ->route('welcome');
  }
}
