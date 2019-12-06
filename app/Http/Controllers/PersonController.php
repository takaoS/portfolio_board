<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Person;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        // 関連レコードの有無
        $hasItems = Person::has('boards')->get();
        $noItems  = Person::doesntHave('boards')->get();

        $params = ['hasItems' => $hasItems, 'noItems' => $noItems];

        return view('person.index', $params);
    }

    public function findGet()
    {
        return view('person.find');
    }

    public function findPost(Request $request)
    {
        $item = Person::find($request->input);
        return view('person.find', ['item' => $item]);
    }

    public function addGet(Request $request)
    {
        return view('person.add');
    }

    public function addPost(Request $request)
    {
        $person = new Person;
        $person->name = $request->name;
        $person->mail = $request->mail;
        $person->age = $request->age;
        $person->save();

        return redirect('/person');
    }

    public function deletePost(Request $request)
    {
        Person::find($request->id)->delete();
        return redirect('/person');
    }
}
