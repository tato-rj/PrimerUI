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
		@isset($id)id="{{$id}}"@endisset
		{{iftrue($readonly ?? null, 'readonly')}}>
	
	@isset($info)
	<div class="form-text">{{$info}}</div>
	@endisset

	@feedback
</div>