<?php

namespace PhpTheme\ComingSoonTheme;

class FooterButton extends \PhpTheme\Core\ThemeWidget
{

	public $label;

	public $url;

	public $icon; // twitter facebook-f instagram

    public $options = [];

	public function toString() : string
	{
        $options = $this->options;

        $options['href'] = $this->url;

		return $this->render('footer-button', [
			'label' => $this->label,
			'url' => $this->url,
			'icon' => $this->icon,
            'options' => $options
		]);
	}

}