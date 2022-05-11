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

    public function update(PhoneRequest $request,$item)
    {
        $olddata = $request->validated();
          
        $newdata = PhoneBook::find($item['id']);
        $newdata->name = $olddata['name'];
        $newdata->phone = $olddata['phone'];
        $newdata->save();

        return redirect()->view('home');

    }
}
