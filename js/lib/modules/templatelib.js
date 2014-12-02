define(
	'templatelib',
	['jquery','Handlebars','text!templates'],
	function(){
		var makeTemplate = function(template, context, target){
			var templ = $(template).html();
			var outTempl = Handlebars.compile(templ);
			$(target).append(outTempl(context));
		};

		var makeContactTemplate = function(context, target){
			var templ = $('#contact-template');
			var outTempl = Handlebars.compile(templ);
			$(target).append(outTempl(context));
		}

		var makeGroupTemplate = function(context, target){
			var templ = $('#group-template');
			var outTempl = Handlebars.compile(templ);
			$(target).append(outTempl(context));
		}

		return{
			makeTemplate : makeTemplate,
			makeContactTemplate : makeContactTemplate,
			makeGroupTemplate : makeGroupTemplate
		};
	}
);