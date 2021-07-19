<div class="row">
    <div class="col-sm-12 mb-3">
        <label for="name">Name</label>
        <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $merchant->name ?? '') }}">
    </div>
    <div class="col-sm-12 mb-3">
        <label for="brand">Brand</label>
        <input id="brand" name="brand" type="text" class="form-control" value="{{ old('name', $merchant->brand ?? '') }}">
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label for="country">Country</label>
        <select id="country" name="country" class="form-select" aria-label="Default select example">
            <option>Select an option</option>
            @foreach($countries as $country)
                <option value="{{ $country->id }}" {{ old('country', $merchant->country_id ?? '') === $country->id ? 'selected' : '' }}>
                    {{ $country->alpha_3_code }} - {{ $country->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col mb-3">
        <label for="mcc">Merchant Category Code</label>
        <select id="mcc" name="mcc" class="form-select" aria-label="Default select example">
            <option selected>Select an option</option>
            @foreach($merchantCategoryCodes as $merchantCategoryCode)
                <option value="{{ $merchantCategoryCode->id }}" {{ old('country', $merchant->merchant_category_code_id ?? '') === $merchantCategoryCode->id ? 'selected' : '' }}>
                    {{ $merchantCategoryCode->code }} - {{ $merchantCategoryCode->description }}
                </option>
            @endforeach
        </select>
    </div>
</div>

<button type="submit" class="btn btn-outline-success">Submit</button>
