<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\User;

class ResController extends Controller
{
    //
    public function reset()
    {
           return view('auth/passwords/reset');
    }
    public function traitement(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255'
        ]);

        $mail = ($request->get('email'));
        $user = \DB::table('users')->where('email', ($request->get('email')))->first();
        if ($user == null) {
           return redirect('register')->with(['mauvais_email' => "Il n'y a pas de compte utilisé avec ce mail. Veuillez en créer un ou vérifier votre mail."]);
        } else { 
          $mdp = (bin2hex(random_bytes(3)));
          \App\User::where('email', $mail)
                                          ->update(['Modif_password' => '1']);
          \App\User::where('email', $mail)
                                          ->update(['password' => bcrypt($mdp)]);
          /*$details = [
                   'name' => $user->Firstname,
                   'mdp' => $mdp
          ];*/
          //Mail::to($mail)->send(new \App\Mail\ResetMail($details));
          //return redirect('login')->with(['success' => "Votre mail avec votre mot de passe vous a été envoyer. Pensez à vérifier vos spams."]);
          return redirect('login')->with(['success' => "Votre nouveau mot de passe est $mdp"]);
        }
    }
    public function modif(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'password' => 'required|string|min:6',
            'confirmpassword' =>['required'],
        ]);
        if (($request->get('password'))==($request->get('confirmpassword')))
        {
            \App\User::where('email', Auth::user()->email)
                                              ->update(['password' => (bcrypt($request->get('password')))]);
            \App\User::where('email', Auth::user()->email)
                                              ->update(['Modif_password' => '0']);
            return redirect ('/home');
        } else {
          return back()->with(['Do_not_match' => "Both passwords do not match"]);;
        }
    }
}