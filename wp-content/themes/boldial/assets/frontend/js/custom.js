function str_replace ( search, replace, subject ) {	// Replace all occurrences of the search string with the replacement string
	// 
	// +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	// +   improved by: Gabriel Paderni

	if(!(replace instanceof Array)){
		replace=new Array(replace);
		if(search instanceof Array){//If search	is an array and replace	is a string, then this replacement string is used for every value of search
			while(search.length>replace.length){
				replace[replace.length]=replace[0];
			}
		}
	}

	if(!(search instanceof Array))search=new Array(search);
	while(search.length>replace.length){//If replace	has fewer values than search , then an empty string is used for the rest of replacement values
		replace[replace.length]='';
	}

	if(subject instanceof Array){//If subject is an array, then the search and replace is performed with every entry of subject , and the return value is an array as well.
		for(k in subject){
			subject[k]=str_replace(search,replace,subject[k]);
		}
		return subject;
	}

	for(var k=0; k<search.length; k++){
		var i = subject.indexOf(search[k]);
		while(i>-1){
			subject = subject.replace(search[k], replace[k]);
			i = subject.indexOf(search[k],i);
		}
	}

	return subject;}
/*---------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------*/

jQuery(document).ready(function($) {


	$('.ish-row-full-height').each(function(index, el) {
		$(this).css('height', $(window).height()-50);
	});
	

	$( window ).resize(function() {
	  $('.ish-row-full-height').css('height', $(this).height()-50);
	});



/* `cave-boy reorder
---------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------*/
	// var cave_boy_div = $('.cave-boy')
	var cave_boy_div_new_location = $('.cave-boy').parents('#portfolio');
	$('.cave-boy').appendTo(cave_boy_div_new_location);


/* `блоки в секции что мы можем
---------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------*/
	var _block_new_location = $('div[id*=_block]').parents('.ish-vc_row_inner');
	$('div[id*=_block]').appendTo(_block_new_location);

	$('div[id*=_tr]').on('click', function(event) {
		event.preventDefault();
		var aglie_type = str_replace('mev_tr_','', $(this).attr('id')),
			blocks_arr = $('div[id*=_block]');

		blocks_arr.each(function(index, el) {
			if ($(this).attr('id') == 'mev_'+aglie_type+'_block') {
				$(this).css('display', 'block');
			}else{
				$(this).css('display', 'none');
			};
		});
	});

	$(".close_this").click(function(event) {
		$(this).parents('div[id*=_block]').css('display', 'none');
	});



});