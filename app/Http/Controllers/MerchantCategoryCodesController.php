<?php

namespace App\Http\Controllers;

use App\Jobs\DeleteMerchantCategoryCodeToMessageBroker;
use App\Jobs\StoreMerchantCategoryCodeToMessageBroker;
use App\Jobs\UpdateMerchantCategoryCodeToMessageBroker;
use App\Models\MerchantCategoryCode;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MerchantCategoryCodesController extends Controller
{
    public function index(): View
    {
        $merchantCategoryCodes = MerchantCategoryCode::select('id', 'code', 'description')
            ->paginate(10);

        return view('merchant-category-codes.index', compact('merchantCategoryCodes'));
    }

    public function create(): View
    {
        return view('merchant-category-codes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $merchantCategoryCode = MerchantCategoryCode::create([
            'code' => $request->input('code'),
            'description' => $request->input('description'),
        ]);

        StoreMerchantCategoryCodeToMessageBroker::dispatch($merchantCategoryCode);

        return redirect()->route('merchant-category-codes.show', $merchantCategoryCode);
    }

    public function show(MerchantCategoryCode $merchantCategoryCode): View
    {
        return view('merchant-category-codes.show', compact('merchantCategoryCode'));
    }

    public function edit(MerchantCategoryCode $merchantCategoryCode): View
    {
        return view('merchant-category-codes.edit', compact('merchantCategoryCode'));
    }

    public function update(Request $request, MerchantCategoryCode $merchantCategoryCode): RedirectResponse
    {
        $merchantCategoryCode->update([
            'code' => $request->input('code'),
            'description' => $request->input('description'),
        ]);

        UpdateMerchantCategoryCodeToMessageBroker::dispatch($merchantCategoryCode);

        return redirect()->route('merchant-category-codes.show', $merchantCategoryCode);
    }

    public function destroy(MerchantCategoryCode $merchantCategoryCode): RedirectResponse
    {
        $uuid = $merchantCategoryCode->uuid;
        $merchantCategoryCode->delete();

        DeleteMerchantCategoryCodeToMessageBroker::dispatch($uuid);

        return redirect()->route('merchant-category-codes.index');
    }
}
