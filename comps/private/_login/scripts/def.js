jQuery(document).ready(function(){
	jQuery('input[name=username], input[name=password]').bind('focus',
		function()
		{
			// Masque le label au focus
			jQuery(this).prev().fadeOut(150);
		})
	.bind('blur',
		function()
		{
			// Reaffiche le label lors de la sortie du champ, seulement si celui ci est vide
			if(this.value == '')
			{
				jQuery(this).prev().fadeIn(150);
			}
		}).focus().blur();	
});