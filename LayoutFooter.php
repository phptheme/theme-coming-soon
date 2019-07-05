<?php

namespace PhpTheme\ComingSoonTheme;

use PhpTheme\Core\Widget;

class LayoutFooter extends Widget
{

	public $buttons = [];

	public function run()
	{
		return $this->render('layout-footer', [
			'buttons' => $this->buttons
		]);
	}

}