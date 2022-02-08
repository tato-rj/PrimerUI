<form  method="POST" action="{{$url ?? null}}">
	@csrf
<a class="nav-link text-wrap py-{{$height ?? null}} px-{{$gap ?? null}} hover-{{$hover ?? null}}" href="{{$url ?? null}}" onclick="event.preventDefault(); this.closest('form').submit()">
	@isset($icon)
	@fa(['icon' => $icon, 'color' => 'auto', 'classes' => 'nav-link-icon'])
	@endisset
	{{$label ?? null}}
</a>
</form>