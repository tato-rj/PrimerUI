<div class="form-group">
	@isset($label)
    @label
    @endisset

	<input type="{{$type ?? 'text'}}" @isset($mask) data-mask="{{$mask}}" @endisset placeholder="{{$placeholder ?? null}}" name="{{$name}}" class="form-control form-control-{{$size ?? null}} {{$classes ?? null}}" id="{{$id ??null}}" {{iftrue($readonly ?? null, 'readonly')}}>
	
	@isset($info)
	<div class="form-text">{{$info}}</div>
	@endisset
</div>