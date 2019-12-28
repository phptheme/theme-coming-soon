<?php

namespace PhpTheme\ComingSoonTheme;

class Layout extends \PhpTheme\Core\ThemeWidget
{

	public $content;

	public $title;

	public $background;

    public $socialMenu;

	public function toString() : string
	{
		return $this->render('layout', [
			'content' => $this->content,
            'title' => $this->title
		]);
	}

}
