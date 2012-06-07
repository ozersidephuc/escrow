<div class="some-class"> 
	<?php print $name;?>
	<?php echo $rendered; ?>
</div>	
<script>
	jQuery(document).ready(function(){
		jQuery('input[type=mail]').val(function(){
			console('day');
			jQuery('input[name=name]').val(jQuery('input[name=mail]').val());
		})
	})
</script>