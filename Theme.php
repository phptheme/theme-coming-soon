<?php

namespace PhpTheme\ComingSoonTheme;

class Theme extends \PhpTheme\Core\Theme
{
    
    const LAYOUT = Layout::class;

    const MAIN_LAYOUT = MainLayout::class;

    const FOOTER_BUTTON = FooterButton::class;

    const FOOTER = Footer::class;

    const SUBSCRIBE_FORM = SubscribeForm::class;

    protected $_layout;

    public function layout(array $params = [])
    {
        return $this->widget(static::LAYOUT, $params);
    }

    public function beginLayout(array $params = [])
    {
        $this->_layout = $this->beginWidget(static::LAYOUT, $params);

        return $this->_layout;
    }

    public function endLayout()
    {
        echo $this->endWidget($this->_layout);
    }

    public function mainLayout(array $params = [])
    {
        return $this->widget(static::MAIN_LAYOUT, $params);
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