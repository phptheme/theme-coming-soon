<?php

use PhpTheme\Core\Html;

?>

<li class="list-unstyled-item">

<?= Html::beginTag('a', $options);?>

    <i class="<?= $icon;?>"></i><?= $label;?>

<?= Html::endTag('a');?>

</li>