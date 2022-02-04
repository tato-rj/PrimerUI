<?php

namespace PrimerUI\Concerns;

trait BladeComponents
{
	public static function bladeComponents()
	{
		static::copyStubFile('AppServiceProvider.php', base_path('app/providers/AppServiceProvider.php'));
	}
}