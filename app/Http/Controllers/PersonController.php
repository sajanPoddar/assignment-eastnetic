<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class PersonController extends Controller
{
    public $person;
    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    public function index(Request $request){
        $pageNo =  $request->page ?? 1;


        $personQuery = $this->person->query();
        if($request->has('birth_year') && $request->input('birth_year') != ''){
            $personQuery->where('birth_year',$request->input('birth_year'));
        }
        if($request->has('birth_month') && $request->input('birth_month') != ''){
            $personQuery->where('birth_month',$request->input('birth_month'));
        }
        $rememberName = json_encode($request->all());

        $data['persons'] = Cache::remember($rememberName,15, function () use ($personQuery){
            return $personQuery->paginate(20);
        });

        return view('persons.index',$data);
    }



}
