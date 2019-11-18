<?php

namespace PhpTheme\ComingSoonTheme;

class Footer extends \PhpTheme\Core\Widget
{

	public $buttons = [];

	public function toString() : string
	{
		return $this->render('footer', [
			'buttons' => $this->buttons
		]);
	}

}