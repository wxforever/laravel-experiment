<?php

namespace App\Handlers;

use Overtrue\Pinyin\Pinyin;

class SlugTranslateHandler
{
	public function translate($text)
	{
		return $this->pinyin($text);
	}

	public function pinyin($text)
	{
		return str_slug(app(Pinyin::class)->permalink($text));
	}
}