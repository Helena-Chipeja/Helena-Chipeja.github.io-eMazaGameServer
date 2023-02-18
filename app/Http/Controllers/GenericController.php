<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\user;
use App\Models\User;
class GenericController extends Controller
{
    public function landing (Request $request){
     return view(view: 'landing');
    }

    public function generateTokens (Request $request){
//dd('generateTokens', $request->all());
if(auth()->user()->hasRole('admin')){
    $user= User::find(auth()->id());
    $tokenName = $request->name ? $request->name : $user->name. '\'s Token';
        $token=$user->createToken($tokenName)->accessToken;
        return view('displayTokens', compact('token'));
       // return redirect()->to(path:'/admin/oauth-access-tokens')->with(['token'=>$token]);
}else{
    //erro que indica que o user nao tem permisao para gerar token
    dd(_vars:'Erro:nao tem permisao para gerar token');
}

    }
}
