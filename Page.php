<?php

namespace PhpTheme\ComingSoonTheme;

use PhpTheme\Core\Widget;

class Page extends Widget
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
