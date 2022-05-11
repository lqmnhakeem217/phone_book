<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhoneRequest;
use App\Models\PhoneBook;
use Illuminate\Http\Request;

class PhoneBookController extends Controller
{
    public function index()
    {
        $data = PhoneBook::paginate(5);
        return view('home',compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(PhoneRequest $request)
    {
        $data = $request->validated();

        PhoneBook::create([
            'name'=>$data['name'],
            'phone'=>$data['phone']
        ]); 
        return back();
    }

    public function edit(PhoneBook $item)
    {
        // dd($item);
        return view('update', compact('item'));
    }

    public function update(PhoneRequest $request,PhoneBook $item)
    {
        $request->validated();
          
        $item->update([
            'name' => $request->name,
            'number' => $request->number
        ]);

        return redirect()->route('show.phonebook');
    }

    public function destroy(PhoneBook $item){

        $item->delete();

        return redirect()->route('show.phonebook');
    }
}
