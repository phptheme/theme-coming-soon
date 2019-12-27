<div class="social-icons">
	<ul class="list-unstyled text-center mb-0">
		<?php foreach($items as $item):?>
			<?= $this->theme->socialMenuItem($item);?>
		<?php endforeach;?>
	</ul>
</div>