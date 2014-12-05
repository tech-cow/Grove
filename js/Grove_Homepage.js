// var api_getuser = require('./Libraries/Documents/Github/Team_COOLGUYS/php/api/get/getuser.php');
// var api_getgroup = require('./Libraries/Documents/Github/Team_COOLGUYS/php/api/get/getgroup.php');
// var handlebars_templates = require('./Libraries/Documents/Github/Team_COOLGUYS/js/lib/handlebars-v2.0.0.js');
// var jquery = require('./Libraries/Documents/Github/Team_COOLGUYS/js/lib/jquery211.js');

// getUser(3, literallyanything);

var path = "../../template/contact.html";

var dummydata = [
	{id:0, name:"bob", content: "god spence is attractive"},
	{id:1, name:"joe", content: "i heard he's a model"},
	{id:2, name:"jan", content: "yeah but he quit because of reasons"},
	{id:3, name:"sue", content: "still stuper attractive"},
	{id:4, name:"max", content: "totally"},]

function contactTemplateCallback(data, context){
	var result=Handlebars.compile(data);
	$('#match_container').append(result(context));
}

function makeTemplate(path, context, callback){
	$.ajax ({
		url: path, cache: true,
	}).done(function(response){
		callback(response,context);
	});
}


function GenerateHtml() {
// for (i = 0; i < 3; i++) {

	// $( ".homepage_scroll" ).append( "<div class='match'></div>" );
	// $( ".match" ).append( "<div class='thumb'></div>" );
	// $( ".match" ).append( "<div class='info'>" );
	// $( ".info" ).append( "<div class='name'>Pasta Farian</div>" );
	// $( ".info" ).append
	// ( "<div class='stats'><span id='greent'>French&nbsp&nbsp</span><span id='redt'>Algebra&nbsp&nbsp</span></div></div>" );
	// $( ".match" ).append( "<div class='message'><img src='hi.jpg'></div>" );

// }
// }

$(document).ready(function() {
	
	for (i = 0; i < 3; i++) {

		makeTemplate(path, dummydata[i], contactTemplateCallback);
		// 	$( ".homepage_scroll" ).append( "<div class='match'></div>" );
		// 	$( ".match" ).append( "<div class='thumb'></div>" );
		// 	$( ".match" ).append( "<div class='info'>" );
		// 	$( ".info" ).append( "<div class='name'>Pasta Farian</div>" );
		// 	$( ".info" ).append
		// 	( "<div class='stats'><span id='greent'>French&nbsp&nbsp</span><span id='redt'>Algebra&nbsp&nbsp</span></div></div>" );
		// 	$( ".match" ).append( "<div class='message'><img src='hi.jpg'></div>" );

	}


});