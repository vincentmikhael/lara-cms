<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CardController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'lat' => 'required',
            'lng' => 'required',
            'cardName' => 'required',
            'status' => 'required',
            'level_id' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png'
        ]);

        $request['display_image'] = $request->image->store('images', 'public');
        $request['url_image'] = url('/') . '/storage/' . $request['display_image'];

        Card::create($request->all());

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }
    public function update(Request $request, $id)
    {

        $request->validate([
            'lat' => 'required',
            'lng' => 'required',
            'cardName' => 'required',
            'status' => 'required',
            'level_id' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png'
        ]);
        $card = Card::where('id', $id);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $card->first()->display_image);
            $request['display_image'] = $request->image->store('images', 'public');
            $request['url_image'] = url('/') . '/storage/' . $request['display_image'];
        }



        $card->update($request->except(['_method', '_token']));

        return redirect()->route('home')->with('success', 'Data berhasil diubah');
    }

    public function edit($id)
    {
        $levels = Level::all();
        $card = Card::where('id', $id)->first();

        return view('card-edit', [
            'levels' => $levels,
            'card' => $card
        ]);
    }

    public function delete(Request $request)
    {

        Storage::delete('public/' . $request->image);

        Card::destroy($request->id);

        return redirect()->back()->with('success', "Data Berhasil Dihapus");
    }
}
