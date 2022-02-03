<?php

namespace PrimerUI;

use Illuminate\Support\Facades\File;
use Laravel\Ui\Presets\Preset as UiPreset;
use PrimerUI\Concerns\{Directories, Mix, Packages, Sass, Scripts, Views, Routes, BladeComponents, Helpers};

class Preset extends UiPreset
{
	use Directories, Mix, Packages, Sass, Scripts, Views, Routes, BladeComponents, Helpers;

	public static function install()
	{
		static::updatePackages();

		static::images();
		static::sass();
		static::scripts();
		static::views();
		static::routes();
		static::bladeComponents();
		static::mix();
		static::helpers();
	}

	public static function copyStubFile($from, $to)
	{
		File::copy(__DIR__ . '/stubs/' . $from, $to);
	}

	public static function copyStubDir($from, $to)
	{
		File::copyDirectory(__DIR__ . '/stubs/' . $from, $to);
	}
}