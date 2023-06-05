<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        return '<h1> index of test controller</h1>';
    }

    public function detail() {
        return '<h1> detail of test controller</h1>';
    }

    public function show($id,$test) {
        return "<h1> show $id $test of test controller</h1>";
    }
}
