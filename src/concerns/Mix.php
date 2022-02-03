<?php

namespace PrimerUI\Concerns;

trait Mix
{
	public static function mix()
	{
		static::copyStubFile('webpack.mix.js', base_path('webpack.mix.js'));
	}
}