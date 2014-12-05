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
			window.viewContact = groupviewer_functions.viewContact;
			console.log(groupviewer_functions.viewContact);
			var test = apilib.getUser('3', templatelib.makeContactTemplate, ['.groupmemberContainer']); //p.s. this is pseudocode
			var group = apilib.getGroup('1', templatelib.makeGroupTemplate, ['.groupinfoContainer']);
		}
	);

})();
