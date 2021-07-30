<div class="row">
    <div class="col-sm-12 mb-3">
        <label for="name">Code</label>
        <input id="name" name="code" type="text" class="form-control" value="{{ old('code', $merchantCategoryCode->code ?? '') }}">
    </div>
    <div class="col-sm-12 mb-3">
        <label for="description">Description</label>
        <input id="description" name="description" type="text" class="form-control" value="{{ old('name', $merchantCategoryCode->description ?? '') }}">
    </div>
</div>

<button type="submit" class="btn btn-outline-success">Submit</button>
