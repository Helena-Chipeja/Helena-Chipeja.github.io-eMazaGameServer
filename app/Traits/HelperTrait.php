<?php

namespace App\Traits;

use App\Models\Subject;
use Illuminate\Http\Request;

trait HelperTrait
{
public function processSubjects(Request $request){

$orderDirection=$request->query(key: 'direction', default:'desc');
$orderColumn=$request->query(key: 'column', default:'id');
$totalPerPage=$request->query(key: 'per_page', default:3);
    $subjects=Subject::orderBy($orderColumn, $orderDirection)->paginate($totalPerPage);

    return response()->json(['sucess'=>$subjects], status:200);
}

public function processQuestions(Request $request){

    $orderDirection=$request->query(key: 'direction', default:'desc');
    $orderColumn=$request->query(key: 'column', default:'id');
    $totalPerPage=$request->query(key: 'per_page', default:3);
        $questions=Question::orderBy($orderColumn, $orderDirection)->paginate($totalPerPage);

        return response()->json(['sucess'=>$questions], status:200);
    }
}


