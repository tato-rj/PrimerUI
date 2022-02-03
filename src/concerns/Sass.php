<?php

namespace PrimerUI\Concerns;

use Illuminate\Support\Facades\File;

trait Sass
{
	public static function sass()
	{
		File::deleteDirectory(resource_path('css'));

		static::copyStubDir('sass', resource_path('sass'));
	}
}