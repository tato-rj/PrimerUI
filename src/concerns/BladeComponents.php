<?php

namespace PrimerUI\Concerns;

trait BladeComponents
{
	public static function bladeComponents()
	{
		static::copyStubFile('BladeServiceProvider.php', base_path('app/providers/BladeServiceProvider.php'));
	}
}