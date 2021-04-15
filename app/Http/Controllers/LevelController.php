<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'level' => 'required|numeric',
            'score_range' => 'required|numeric|between:0,1000'
        ]);
        Level::create($request->all());

        return redirect()->back()->with('success', 'Data Telah Ditambahkan!');
    }

    public function delete($id)
    {
        Level::destroy($id);
        return redirect()->back()->with('success', 'Data Telah Dihapus!');
    }
}
