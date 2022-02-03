<?php

namespace PrimerUI\Concerns;

trait Helpers
{
	public static function helpers()
	{
		static::copyStubDir('support', base_path('support'));
	}
}