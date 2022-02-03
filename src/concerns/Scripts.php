<?php

namespace PrimerUI\Concerns;

use Illuminate\Support\Facades\File;

trait Scripts
{
	public static function scripts()
	{
		File::deleteDirectory(resource_path('js'));

		static::copyStubDir('js', resource_path('js'));
	}
}