<div class="valid-feedback">
  Looks good!
</div>

<div class="invalid-feedback {{$errors->has($input) ? 'd-block' : null}}">
  @error($input)
  {{$message}}
  @enderror
</div>