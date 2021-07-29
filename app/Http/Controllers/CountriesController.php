<?php

namespace App\Http\Controllers;

use App\Jobs\DeleteCountryToMessageBroker;
use App\Jobs\StoreCountryToMessageBroker;
use App\Jobs\UpdatedCountryToMessageBroker;
use App\Models\Country;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CountriesController extends Controller
{
    public function index(): \Illuminate\Http\Response
    {
        $countries = Country::select(['id', 'name', 'numeric_code', 'alpha_3_code', 'alpha_2_code'])
            ->paginate(10);

        return Response::view('countries.index', compact('countries'));
    }

    public function create(): \Illuminate\Http\Response
    {
        $country = new Country();
        return Response::view('countries.create', compact('country'));
    }

    public function store(Request $request): RedirectResponse
    {
        $country = Country::create([
            'name' => $request->input('name'),
            'numeric_code' => $request->input('numeric_code'),
            'alpha_3_code' => $request->input('alpha_3_code'),
            'alpha_2_code' => $request->input('alpha_2_code'),
        ]);

        StoreCountryToMessageBroker::dispatch($country);

        return Response::redirectToRoute('countries.show', compact('country'));
    }

    public function show(Country $country): \Illuminate\Http\Response
    {
        return Response::view('countries.show', compact('country'));
    }

    public function edit(Country $country): \Illuminate\Http\Response
    {
        return Response::view('countries.edit', compact('country'));
    }

    public function update(Request $request, Country $country): RedirectResponse
    {
        $country->update([
            'name' => $request->input('name'),
            'numeric_code' => $request->input('numeric_code'),
            'alpha_3_code' => $request->input('alpha_3_code'),
            'alpha_2_code' => $request->input('alpha_2_code'),
        ]);

        UpdatedCountryToMessageBroker::dispatch($country);

        return Response::redirectToRoute('countries.show', compact('country'));
    }


    public function destroy(Country $country): RedirectResponse
    {
        $uuid = $country->uuid;
        $country->delete();

        DeleteCountryToMessageBroker::dispatch($uuid);

        return Response::redirectToRoute('countries.index');
    }
}
