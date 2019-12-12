<form id="<?= $formId;?>" method="POST" action="<?= $formAction;?>">

    <div class="input-group input-group-newsletter">

        <input class="form-control" aria-describedby="basic-addon" name="<?= $inputName;?>">

    	<div class="input-group-append">
    	
    		<button class="btn btn-secondary" type="submit"><?= $submitButton;?></button>
    	
    	</div>

    </div>

</form>