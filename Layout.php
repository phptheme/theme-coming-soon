<?php

namespace PhpTheme\ComingSoonTheme;

class Layout extends \PhpTheme\Core\ThemeWidget
{

	public $content;

	public $title;

	public $background;

	public $subscribeForm;

    public $socialMenu = [];

    public $socialMenuOptions = [];

	public function toString() : string
	{
        $socialMenu = $this->theme->socialMenu(
            array_merge(
                $this->socialMenuOptions, 
                [
                    'items' => $this->socialMenu
                ]
            )
        );

		return $this->render('layout', [
			'content' => $this->content,
			'title' => $this->title,
			'background' => $this->background,
			'subscribeForm' => $this->subscribeForm,
			'socialMenu' => $socialMenu
		]);
	}

}
