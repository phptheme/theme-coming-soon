<?php

namespace PhpTheme\ComingSoonTheme;

class Theme extends \PhpTheme\Core\Theme
{
    
    const LAYOUT = Layout::class;

    const PAGE = Page::class;

    const FOOTER_BUTTON = FooterButton::class;

    const FOOTER = Footer::class;

    const SUBSCRIBE_FORM = SubscribeForm::class;

    protected $_layout;

    public function beginLayout(array $params = [])
    {
        $this->_layout = $this->beginWidget(static::LAYOUT, $params);

        return $this->_layout;
    }

    public function endLayout()
    {
        echo $this->endWidget($this->_layout);
    }

    public function page(array $params = [])
    {
        return $this->widget(static::PAGE, $params);
    }

    public function subscribeForm(array $params = [])
    {
        return $this->widget(static::SUBSCRIBE_FORM, $params);
    }

    public function footerButton(array $params = [])
    {
        return $this->widget(static::FOOTER_BUTTON, $params);
    }

    public function footer(array $params = [])
    {
        return $this->widget(static::FOOTER, $params);
    }

}