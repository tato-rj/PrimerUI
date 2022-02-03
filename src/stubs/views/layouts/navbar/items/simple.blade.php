@php($is_route = is_route($url ?? null))

<a class="nav-link text-wrap py-{{$height ?? null}} px-{{$gap ?? null}} hover-{{$hover ?? null}} {{$is_route ? 'active' : null}}"  
	aria-current="page" 
	href="{{isset($url) ? $url : '#'}}">
	
	@isset($icon)
	@fa(['icon' => $icon, 'color' => 'auto', 'classes' => 'nav-link-icon'])
	@endisset
	
	<span>{{$label ?? null}}</span>
</a>