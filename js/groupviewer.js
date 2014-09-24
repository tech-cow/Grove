var template1;

function getTemplateAjax(path){
	var source;
	var template;

	$.ajax({
		url: path,
		cache: true,
		success: function(data){
			source = data;
			return(Handlebars.compile(source));
		}
	});
}


$(document).ready( function() { 

	template1 = getTemplateAjax('../../templates/contact.handlebars');
	
	$(".groupmemberContainer").text(template1);
});