<?php

namespace PhpTheme\Themes\ComingSoon;

class Layout extends \PhpTheme\Core\Widget
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
