<?php

namespace App\Http\Controllers;

use App\Person;
use App\Country;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = Person::all();

        return view('person.index', compact('persons'));
    }

    public function create()
    {
        $countries = Country::all();

        return view('person.create', compact('countries'));
    }

    public function store()
    {
        Person::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'country_id' => request('country_id')
        ]);

        //return back();
        return redirect('/person');
    }

    public function edit(Person $person)
    {
        $countries = Country::all();

        return view('person.edit', compact('person', 'countries'));
    }

    public function update(Person $person)
    {
        $person->update([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'country_id' => request('country_id')
        ]);

        return redirect('/person');
    }

    public function destroy(Person $person)
    {
        $person->delete();

        return back();
    }
}
