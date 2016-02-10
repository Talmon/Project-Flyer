<div class="form-group">
    <label for="street">Street</label>
    <input type="text" name="street" id="street" class="form-control" value="{{--{{old('street')}}--}}">
</div>

<div class="form-group">
    <label for="city">City</label>
    <input type="text" name="city" id="city" class="form-control" value="{{--{{old('city')}}--}}">
</div>

<div class="form-group">
    <label for="zip">Zip/Postal Code</label>
    <input type="text" name="zip" id="zip" class="form-control" value="{{--{{old('zip')}}--}}">
</div>

<div class="form-group">
    <label for="country">Country</label>
    <select id="country" name="country" class="form-control">
    @foreach(App\Http\Utilities\Country::all() as $country=>$code)
        <option value="{{$country}}">
            {{$code}}
        </option>
        @endforeach
        </select>
</div>

<div class="form-group">
    <label for="state">State</label>
    <input type="text" name="state"  class="form-control" value="{{--{{old('state')}}--}}">
</div>

<div class="form-group">
    <label for="price">Sale Price:</label>
    <input type="text" name="price" id="price"  class="form-control" value="{{--{{old('price')}}--}}">
</div>

<div class="form-group">
    <label for="description">Home Description</label>
        <textarea type="text" name="description" id="description"  class="form-control" value="{{--{{old('description')}}--}}" rows="10"
        >
        </textarea>
</div>

<div class="form-group">
    <label for="photos">Photos:</label>
    <input type="file" name="photos" id="photos"  class="form-control" value="{{--{{old('photos')}}--}}">
</div>

<div class="form group">
    <button type="submit" class="btn btn-primary">Create Flyer</button>
</div>