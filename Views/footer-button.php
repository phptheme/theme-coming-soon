<?php

use PhpTheme\Helpers\Html;

?>

<li class="list-unstyled-item">

<?= Html::beginTag('a', $options);?>

    <i class="<?= $icon;?>"></i><?= $label;?>

<?= Html::endTag('a');?>

</li>