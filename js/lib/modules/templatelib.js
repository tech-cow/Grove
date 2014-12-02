define(
	'templatelib',
	['jquery','handlebars','text!templates'],
	function($, handlebars, templates){
		var makeTemplate = function(template, context, target){
			var templ = $(template).html();
			var outTempl = handlebars.compile(templ);
			$(target).append(outTempl(context));
		};

		var makeContactTemplate = function(context, target){
			//var templ = $('#contact-template', templates);
			//console.log($(templates).find('#contact-template'));
			//console.log(templates);
			console.log(context);
			var templ = $(templates).find('#contact-template').html();

			//console.log(thing.find('#contact-template').html());
			var outTempl = handlebars.compile(templ);
			$(target).append(outTempl(context));
		}

		var makeGroupTemplate = function(context, target){
			var templ = $('#group-template');
			var outTempl = handlebars.compile(templ);
			$(target).append(outTempl(context));
		}

		return{
			makeTemplate : makeTemplate,
			makeContactTemplate : makeContactTemplate,
			makeGroupTemplate : makeGroupTemplate
		};
	}
);