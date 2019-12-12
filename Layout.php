<?php

namespace PhpTheme\ComingSoonTheme;

class Layout extends \PhpTheme\Core\ThemeWidget
{

	public $content;

	public $title;

	public $background;

	public $subscribeForm;

	public $footer;

    public $lang = 'en';

    public $head;

    public $beginBody;

    public $endBody;

	public function toString() : string
	{
		return $this->render('layout', [
			'content' => $this->content,
			'title' => $this->title,
			'background' => $this->background,
			'subscribeForm' => $this->subscribeForm,
			'footer' => $this->footer,
            'lang' => $this->lang,
            'head' => $this->head,
            'beginBody' => $this->beginBody,
            'endBody' => $this->endBody
		]);
	}

}
