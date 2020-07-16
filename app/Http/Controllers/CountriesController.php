<?php

namespace App\Http\Controllers;

use App\Person;
use App\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function create()
    {
        return view('country.create');
    }

    public function store(Request $request)
    {
        // First Approach (when there is no method parameter like "store()")
        /*$name = request('name');
        $capital = request('capital');
        $currency = request('currency');
        $population = request('population');*/

        // Second Approach (when there is no method parameter like "store()")
       /* $name = request()->input('name');
        $capital = request()->input('capital');
        $currency = request()->input('currency');
        $population = request()->input('population');*/

        // Third Approach (Using method parameter "store(Request $request)")
        /*$name = $request->input('name');
        $capital = $request->input('capital');
        $currency = $request->input('currency');
        $population = $request->input('population');*/


        // First Approach (Must declare $fillable property in Country model class)
        /*Country::create([
            'name' => $name,
            'capital' => $capital,
            'currency' => $currency,
            'population' => $population
        ]);*/

        // Second Approach (works without declare $fillable property in Country model class)
        /*$country = new Country();

        $country->name = $name;
        $country->capital = $capital;
        $country->currency = $currency;
        $country->population = $population;

        $country->save();*/

        // Third Approach
        //Country::create($request->all());

        // Fourth Approach
        Country::create($request->only('name', 'capital', 'currency', 'population'));

        // Fifth Approach
        //Country::create($request->except('_token'));


        //return back();

        return redirect('/countries');
    }

    public function showAllCountries()
    {
        $countries = Country::all();
        //$countries = Country::orderBy('name')->get();

        return view('country.list', compact('countries'));
    }

    public function showCountryDetail($id)
    {
        //if there is other operators than "=" like <, <=, >, >=
        //$country = Country::where('id', '=', $id)->first();

        //if there is "=" operator
        //$country = Country::where('id', $id)->first();

        //if we search only by PRIMARY Key here "id" is PRIMARY Key
        $country = Country::find($id);

        //Normal Approach
        //$country_person = \App\Person::where('country_id', $country->id)->get();

        //return view('country.detail', compact('country', 'country_person'));

        // Declared in Model as "hasMany"
        return view('country.detail', compact('country'));
    }

    //Normal Approach
    public function edit($id)
    {
        $country = Country::find($id);
        
        return view('country.edit', compact('country'));
    }

    //Route Model Binding
    /*public function edit(Country $country)
    {
        return view('country.edit', compact('country'));
    }*/

    public function update($id)
    {
        $country = Country::find($id);
        
        $name = request('name');
        $capital = request('capital');
        $currency = request('currency');
        $population = request('population');
        
        // First Approach
        /*$country->name = $name;
        $country->capital = $capital;
        $country->currency = $currency;
        $country->population = $population;
        
        $country->save();*/

        // Second Approach
        $country->update([
            'name' => $name,
            'capital' => $capital,
            'currency' => $currency,
            'population' => $population
        ]);

        return redirect('/countries');
    }

    public function destroy($id)
    {
        $country = Country::find($id);

        $country->delete();

        return back();
    }
}
