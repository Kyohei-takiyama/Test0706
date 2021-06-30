<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index ( Request $request )
    {
        return view ( 'add' );
    }

    public function add ( Request $request )
    {
        return view ( 'thanks');
    }

    public function create ( Request $request )
    {
        $this->validate ( $request , Person::$rules );
        $person = new Person;
        $form = $request->all();
        unset ( $form['_token_'] );
        $person->fill( $form )->save();
        return redirect('/add');
    }

    public function find ( Request $request )
    {
        return view ( 'find' , ['input' => ''] );
    }

    public function search ( Request $request ) 
    {
        $item = Person::find ( $request -> input );
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view ( 'find' , $param );
    }

}