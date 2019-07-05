<?php

namespace PhpTheme\ComingSoonTheme;

use PhpTheme\Core\Widget;

class LayoutSubscribeForm extends Widget
{

	public $fields = [];

	public $errors = [];

	public $submit = 'Subscribe';

	public $message;

	public $url;

	public $options = [];

	public function run()
	{
		$options = $this->options;

		$options['action'] = $this->url;

		$options['method'] = 'POST';

		$options['id'] = 'subscribe-form';
		
		return $this->render('layout-subscribe-form', [
			'fields' => $this->fields,
			'errors' => $this->errors,
			'submit' => $this->submit,
			'message' => $this->message,
			'url' => $this->url,
			'options' => $options
		]);
	}

}
