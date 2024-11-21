<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RentController extends Controller
{
    public function index()
    {
        $rents = Rent::all();
        return view('rents.index', compact('rents'));
    }

    public function create()
    {
        $rent = new Rent();
        $users = User::all();
        $books = Book::all();
        return view('rents.create', compact('rent', 'users', 'books'));
    }

    public function store(Request $request)
    {
        $validate = Validator::make(request()->all(), [
            'book_id' => 'required',
            'user_id' => 'required',
            'rent_date' => 'required|date',
            'return_date' => 'sometimes|date',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withInput()->withErrors($validate->errors());
        }

        Rent::create($request->all());

        return redirect()->route('rents.index');
    }

    public function edit(Rent $rent)
    {
        $users = User::all();
        $books = Book::all();
        return view('rents.edit', compact('rent', 'users', 'books'));
    }

    public function update(Request $request, Rent $rent)
    {
        $validate = Validator::make(request()->all(), [
            'book_id' => 'required',
            'user_id' => 'required',
            'return_date' => 'required'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withInput()->withErrors($validate->errors());
        }

        $rent->update($request->all());

        return redirect()->route('rents.index');
    }

    public function destroy(Rent $rent)
    {
        $rent->delete();
        return redirect()->route('rents.index');
    }
}
