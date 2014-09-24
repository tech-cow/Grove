function getTemplateAjax(path){
	var source;
	var template;
	var result;

	$.ajax({
		url: path,
		cache: true,
		success: function(data){
			//console.log('data: ' + data);

			source = data;
			result = Handlebars.compile(source);
		}
	});
	console.log(result);
	return result;
}


$(document).ready( function() { 

	//var source = tempvar;
	//var template = Handlebars.compile(source);
	//var template = getTemplateAjax('../templates/contact.html');
	var tmpl = getTemplateAjax('../../templates/contact.html');
	console.log(tmpl);

	var context = {
		name: "bob",
		content: "hello this is content"
	};

	var html = tmpl(context);

	//template1 = getTemplateAjax('../../templates/contact.handlebars');
	
	$(".groupmemberContainer").text(html);
});