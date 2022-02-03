<?php

namespace PrimerUI\Concerns;

trait Routes
{
	public static function routes()
	{
		static::copyStubFile('web.php', base_path('routes/web.php'));
	}
}