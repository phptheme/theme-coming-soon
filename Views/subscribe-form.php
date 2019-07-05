<?php

use PhpTheme\Core\Html;

?>

<?= Html::beginTag('form', $formOptions);?>

<div class="input-group input-group-newsletter">

    <?= Html::shortTag('input', $inputOptions);?>

	<div class="input-group-append">
	
		<button class="btn btn-secondary" type="submit"><?= $submitButton;?></button>
	
	</div>

</div>

<?= Html::endTag('form');?>