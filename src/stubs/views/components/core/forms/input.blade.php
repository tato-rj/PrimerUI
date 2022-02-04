<div class="form-group">
	@isset($label)
    @label
    @endisset

	<input 
		class="form-control form-control-{{$size ?? null}} {{$classes ?? null}}"
		type="{{$type ?? 'text'}}" 
		@isset($mask) data-mask="{{$mask}}"@endisset 
		placeholder="{{$placeholder ?? null}}" 
		name="{{$name}}"
		
		@if(old($name))
		value="{{old($name)}}"
		@else
		value="{{$value ?? null}}"
		@endif

		@isset($id)id="{{$id}}"@endisset
		{{iftrue($readonly ?? null, 'readonly')}}>
	
	@isset($info)
	<div class="form-text">{{$info}}</div>
	@endisset

	@feedback(['input' => $name])
</div>