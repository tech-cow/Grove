(function() {
	requirejs.config(
		{
			paths: {
				'jquery' : '../../js/lib/jquery211',
				//'handlebars' : '../../js/lib/handlebars-v2.0.0',
				'handlebars' : '../../js/lib/handlebars-v2.0.0',
				'text' : '/js/lib/text',
				'templates' : '/templates/templates.html',
				'apilib' : '/js/lib/modules/apilib',
				'templatelib' : '/js/lib/modules/templatelib',
				'dataserv' : '/js/lib/modules/dataserv',
				'groupviewer_functions' : '/js/groupviewer_functions'
			},
			shim : {
				'handlebars' : {
					exports: 'lib/handlebars-v2.0.0'
				}
			}
		}
	);

	require(
		['apilib','templatelib', 'groupviewer_functions'],
		function(apilib, templatelib, groupviewer_functions){
			
			var test = apilib.getUser('3', templatelib.makeContactTemplate(test,'.groupmemberContainer')); //p.s. this is pseudocode
		}
	);

})();
