<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Merchant;
use App\Models\MerchantCategoryCode;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MerchantsController extends Controller
{
    public function index(): View
    {
        $merchants = Merchant::all();

        return view('merchants.index', compact('merchants'));
    }

    public function create(): View
    {
        return view('merchants.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $merchant = Merchant::create([
            'name' => $request->input('name'),
            'brand' => $request->input('brand'),
            'country_id' => $request->input('country'),
            'merchant_category_code_id' => $request->input('mcc'),
        ]);

        return redirect()->route('merchants.show', compact('merchant'));
    }

    public function show(Merchant $merchant): View
    {
        $merchant->load('country');

        return view('merchants.show', compact('merchant'));
    }

    public function edit(Merchant $merchant): View
    {
        return view('merchants.edit', compact('merchant'));
    }

    public function update(Request $request, Merchant $merchant): RedirectResponse
    {
        $merchant->update([
            'name' => $request->input('name'),
            'brand' => $request->input('brand'),
            'country_id' => $request->input('country'),
            'merchant_category_code_id' => $request->input('mcc'),
        ]);

        return redirect()->route('merchants.show', compact('merchant'));
    }

    public function destroy(Merchant $merchant): RedirectResponse
    {
        $merchant->delete();

        return redirect()->route('merchants.index');
    }
}
