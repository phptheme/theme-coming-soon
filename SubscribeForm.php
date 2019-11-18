<?php

namespace PhpTheme\ComingSoonTheme;

use PhpTheme\Html\HtmlHelper;

class SubscribeForm extends \PhpTheme\Core\Widget
{

    public $inputOptions = [];

    public $defaultInputOptions = [
        'class' => 'form-control',
        'aria-describedby' => 'basic-addon'
    ];

	public $submitButton = 'Subscribe';

	public $formOptions = [];

    public $defaultFormOptions = [
        'id' => 'subscribe-form',
        'method' => 'POST',
        'action' => '#subscribe'
    ];

	public function toString() : string
	{
		return $this->render('subscribe-form', [
			'submitButton' => $this->submitButton,
			'formOptions' => HtmlHelper::mergeOptions(
                $this->defaultFormOptions, 
                $this->formOptions
            ),
            'inputOptions' => HtmlHelper::mergeOptions(
                $this->defaultInputOptions, 
                $this->inputOptions
            )
		]);
	}

}