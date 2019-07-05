<?php

namespace PhpTheme\ComingSoonTheme;

class Page extends \PhpTheme\Core\Widget
{

	public $content;

	public $title;

	public function run()
	{
		return $this->render('page', [
			'content' => $this->content,
			'title' => $this->title
		]);
	}

}
