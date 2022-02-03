<div class="form-group">
	@isset($label)
    @label
    @endisset

	<textarea class="form-control form-control-{{$size ?? null}} {{$classes ?? null}}" id="{{$id ??null}}" {{iftrue($readonly ?? null, 'readonly')}} rows="{{$rows ?? 4}}" {{iftrue($readonly ?? null, 'readonly')}} name="{{$name}}" placeholder="{{$placeholder ?? null}}"></textarea>
	
	@isset($info)
	<div class="form-text">{{$info}}</div>
	@endisset
</div>