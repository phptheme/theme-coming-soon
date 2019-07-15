<?php

namespace PhpTheme\ComingSoonTheme;

class MainLayout extends \PhpTheme\Core\Widget
{

    public $content;

    public $title;

    public $background;

    public $subscribeForm;

    public $footer;

    public $width = '40.5rem';

    public $lang = 'en';

    public $head;

    public $beginBody;

    public $endBody;

    public function run()
    {
        return $this->render('main-layout', [
            'content' => $this->content,
            'title' => $this->title,
            'background' => $this->background,
            'subscribeForm' => $this->subscribeForm,
            'footer' => $this->footer,
            'width' => $this->width,
            'lang' => $this->lang,
            'head' => $this->head,
            'beginBody' => $this->beginBody,
            'endBody' => $this->endBody
        ]);
    }

}