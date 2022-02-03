<?php

namespace PrimerUI\Concerns;

use Illuminate\Support\Arr;

trait Packages
{
	public static function customPackages()
	{
		return [
	        "@fortawesome/fontawesome-free" => "^5.15.4",
	        "@popperjs/core" => "^2.11.0",
	        "animate.css" => "^4.1.1",
	        "bootstrap" => "^5.1.3",
	        "clipboard" => "^2.0.8",
	        "hamburgers" => "^1.1.3",
	        "jquery" => "^3.6.0",
	        "axios" => "^0.21",
	        "resolve-url-loader" => "^4.0.0",
	        "sass" => "^1.45.1",
	        "sass-loader" => "^12.4.0"
		];
	}

	public static function updatePackageArray($packages)
	{
		return array_merge(static::customPackages(), Arr::except($packages, [
			'postcss'
		]));
	}
}
