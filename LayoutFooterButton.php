<?php

namespace PHPTheme\ComingSoonTheme;

use PHPTheme;
use PHPTheme\Widget;

class LayoutFooterButton extends Widget
{

	public $label;

	public $url;

	public $icon; // twitter facebook-f instagram

	public function render()
	{
		return PHPTheme::view('layout-footer-button', [
			'label' => $this->label,
			'url' => $this->url,
			'icon' => $this->icon
		]);
	}

}
