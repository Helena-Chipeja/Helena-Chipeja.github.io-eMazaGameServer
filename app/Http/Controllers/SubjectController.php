<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;


class SubjectController extends Controller
{
    use HelperTrait;
    public function index (Request $request)
    {
        return $this->processSubjects($request);
    }

    public function store(Request $request)
    {
        return response()->json(['error'=>'Do momento não é possivel adicionar as disciplinas'], status:403);
    }

    public function show(Request $request, Subject $subject)
    {
        return response()->json(['error'=>'Do momento não é possivel mostrar detalhes de uma disciplina'], status:403);
    }
    public function update(Request $request, Subject $subject)
    {
        return response()->json(['error'=>'Do momento não é possivel atualizar a disciplina'], status:403);
    }
    public function destroy(Request $request, Subject $subject)
    {
        return response()->json(['error'=>'Do momento não é possivel remover a disciplina'], status:403);
    }

}
