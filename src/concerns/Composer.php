<?php

namespace PrimerUI\Concerns;

use Illuminate\Support\Facades\File;

trait Composer
{
	public static function updateComposer()
	{
		$originalComposer = base_path('composer.json');

		$newComposer = file_get_contents($originalComposer);
		$newComposer = json_decode($newComposer, true);
		$newComposer['autoload']['files'] = ["support/helpers.php"];

		File::replace($originalComposer, json_encode($newComposer, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
	}
}