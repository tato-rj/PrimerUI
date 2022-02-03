<?php

namespace PrimerUI\Concerns;

use Illuminate\Support\Facades\File;

trait Views
{
	public static function views()
	{
		File::deleteDirectory(resource_path('views'));

		static::copyStubDir('views', resource_path('views'));
	}
}