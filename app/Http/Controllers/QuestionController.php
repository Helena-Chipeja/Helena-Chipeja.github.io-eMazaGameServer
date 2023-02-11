<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(['sucess'=>'Perguntas retornadas com sucesso'], status:200);
    }

    public function store(Request $request)
    {
        return response()->json(['error'=>'Do momento não é possivel adicionar as perguntas'], status:403);
    }

    public function show(Request $request, Question $question)
    {
        return response()->json(['error'=>'Do momento não é possivel mostrar detalhes de uma pergunta'], status:403);
    }
    public function update(Request $request, Question $question)
    {
        return response()->json(['error'=>'Do momento não é possivel atualizar a pergunta'], status:403);
    }
    public function destroy(Request $request, Question $question)
    {
        return response()->json(['error'=>'Do momento não é possivel remover a pergunta'], status:403);
    }
}
