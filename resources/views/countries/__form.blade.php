<div class="row">
    <div class="col-sm-12 mb-3">
        <label for="name">Name</label>
        <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $country->name) }}">
    </div>
    <div class="col-sm-12 mb-3">
        <label for="brand">Numeric code</label>
        <input id="numeric_code" name="numeric_code" type="number" class="form-control" value="{{ old('numeric_code', $country->numeric_code) }}">
    </div>
</div>
<div class="row">
    <div class="col-sm-12 mb-3">
        <label for="name">Alpha2 code</label>
        <input id="alpha_2_code" name="alpha_2_code" type="text" class="form-control" value="{{ old('alpha_2_code', $country->alpha_2_code) }}">
    </div>
    <div class="col-sm-12 mb-3">
        <label for="name">Alpha3 code</label>
        <input id="alpha_3_code" name="alpha_3_code" type="text" class="form-control" value="{{ old('alpha_3_code', $country->alpha_2_code) }}">
    </div>
</div>

<button type="submit" class="btn btn-outline-success">Submit</button>
