define(
	'templatelib',
	['jquery','handlebars','text!templates'],
	function($, handlebars, templates){
		var makeTemplate = function(template, context, target){
			var templ = $(template).html();
			var outTempl = handlebars.compile(templ);
			$(target).append(outTempl(context));
		};

		var makeContactTemplate = function(target, context){
			var templ = $(templates).find('#contact-template').html();
			var outTempl = handlebars.compile(templ);
			$(target).append(outTempl(context));
		}

		var makeGroupTemplate = function(target, context){
			//console.log('making template with context: ' + context);
			console.log("it is a : " + typeof(context));
			var templ = $(templates).find('#group-template').html();
			var outTempl = handlebars.compile(templ);
			$(target).html(''); // clear the target 
			$(target).append(outTempl(context));  // put the new data in
		}

		return{
			makeTemplate : makeTemplate,
			makeContactTemplate : makeContactTemplate,
			makeGroupTemplate : makeGroupTemplate
		};
	}
);