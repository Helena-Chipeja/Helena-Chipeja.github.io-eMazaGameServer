<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    //login
    public function login(Request $request){
 $credenciais=request(['email', 'password']);
 if(!Auth::attempt(credenciais)){
    $erro= "nao autorizado";
    $reposta=[
        'error'=>$erro,
    ];
    return response()->json($reposta, 404);
 }
 $usuario=$request->user();
 $resposta['name']=$usuario->name;
 $resposta['email']=$usuario->email;
 $resposta['token']=$usuario->createToken('token')->accessToken;
 return response()->json($reposta, 200);
    }
    //logout
    public function logout(Request $request){

          $isUser=$request->user()->token()->revoke();
          if($isUser){
            $resposta['message']=["logout efetuado com sucesso"];
            return response()->json($resposta, 200);
          }
          else{
            $resposta="algo deu errado";
            return response()->json($resposta, 404);
          }
               }
    }

