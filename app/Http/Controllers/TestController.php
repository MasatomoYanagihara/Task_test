<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

class TestController extends Controller
{
    //
    public function index()
    {
        /*
        tests.testに飛ぶ処理。
        values変数も渡す。
        */
        $values = Test::all();
        return view('tests.test', compact('values'));
    }
}
