<div class="social-icons">
	<ul class="list-unstyled text-center mb-0">
		<?php foreach($buttons as $button):?>
			<?= $this->theme->footerButton($button);?>
		<?php endforeach;?>
	</ul>
</div>