jQuery(document).ready(function ($) {

if (Drupal.settings.arg[0]) {

	if (Drupal.settings.arg[1].match(/\d{4}/)) {
		$('.view-display-id-arg_date').parent('.pane-content').addClass('active p-filter-expanded');
		$('.p-filter .pane-content').not('.active').addClass('p-filter-collapsed').hide();
		
		if (Drupal.settings.arg[2].match(/\d{2}/)) {
			$myDate = Drupal.settings.arg.join('/');
			$('.view-display-id-arg_date option').each(function(){
				$(this).removeAttr('selected');
				if ($(this).val().indexOf($myDate) != -1) {
					$(this).attr('selected', 'selected');
				}
			});
		}
	} else if (Drupal.settings.arg[1] != 'all') {
		$('.p-filter a.active').parents('.pane-content').addClass('active p-filter-expanded');
		$('.p-filter .pane-content').not('.active').addClass('p-filter-collapsed').hide();
	} else {
		$('.p-filter .pane-content').each(function(i){
			if (i == '0') {
				$(this).addClass('p-filter-expanded');
			} else {
				$(this).addClass('p-filter-collapsed').hide();
			}
		});
	}
	
	$('.p-filter .pane-title').click(function(){
		$thisContent = $(this).next('.pane-content');
		$thisContent.toggleClass('p-filter-expanded p-filter-collapsed').slideToggle('fast');
		$('.p-filter .pane-content.p-filter-expanded').not($thisContent).toggleClass('p-filter-expanded p-filter-collapsed').slideToggle('slow');
	});

}

});