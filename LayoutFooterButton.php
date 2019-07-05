<?php

namespace PhpTheme\ComingSoonTheme;

use PhpTheme\Core\Widget;

class LayoutFooterButton extends Widget
{

	public $label;

	public $url;

	public $icon; // twitter facebook-f instagram

    public $options = [];

	public function run()
	{
        $options = $this->options;

        $options['href'] = $this->url;

		return $this->render('layout-footer-button', [
			'label' => $this->label,
			'url' => $this->url,
			'icon' => $this->icon,
            'options' => $options
		]);
	}

}
