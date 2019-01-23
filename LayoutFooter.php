<?php

namespace PHPTheme\ComingSoonTheme;

use PHPTheme;
use PHPTheme\Widget;

class LayoutFooter extends Widget
{

	public $buttons = [];

	public function render()
	{
		return PHPTheme::view('layout-footer', [
			'buttons' => $this->buttons
		]);
	}

}
