<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index() {
        // route --> /ninjas/
        $ninjas = Ninja::orderBy('created_at', 'desc')->paginate(10);
        return view('ninjas.index', [
            "ninjas" => $ninjas
        ]);
    }

    public function show($id) {
        // route --> /ninjas/{id}
        $ninja = Ninja::findOrFail($id);

        return view('ninjas.show', ["ninja" => $ninja]);
    }

    public function create() {
        // route --> /ninjas/create

        return view('ninjas.create');
    }

    public function store() {
        // /ninjas/ (POST)
    }

    public function destroy($id) {
        // /ninjas/{id} (DELETE)
    }

}
