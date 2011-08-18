jQuery(document).ready( function($) {
	
	$('input[name=le_petite_url_permalink_domain]').change(function(event) {
		if($('input[name=le_petite_url_permalink_domain]:checked').val() == 'custom')
		{
			$('#custom-domain-input').slideDown();
		}
		
		if($('input[name=le_petite_url_permalink_domain]:checked').val() == 'default')
		{
			$('#custom-domain-input').slideUp();
		}
		
		$(this).next('button').html('hello');
		
	});
	
	$('input[name=le_petite_url_permalink_prefix]').change(function(event) {
		if($('input[name=le_petite_url_permalink_prefix]:checked').val() == 'custom')
		{
			$('#custom-prefix-input').slideDown();
		}
		
		if($('input[name=le_petite_url_permalink_prefix]:checked').val() == 'default')
		{
			$('#custom-prefix-input').slideUp();
		}
	});
});