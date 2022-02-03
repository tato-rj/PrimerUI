<?php

namespace PrimerUI\Concerns;

use Illuminate\Support\Facades\File;

trait Directories
{
	public static function images()
	{
		if (! File::isDirectory(resource_path('images')))
			File::makeDirectory(resource_path('images'));
	}
}