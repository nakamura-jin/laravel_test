<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $item = Test::all();
        return view('test.index', ['item' => $item]);
    }
    public function create(Request $request)
    {
        $this->validate($request, Test::$rules);
        $test = new Test;
        $form = $request->all();
        unset($form['_token_']);
        $test->fill($form)->save();
        return redirect('/thanks');
    }
    public function complete(Request $request)
    {
        return view('test.thanks');
    }
}
