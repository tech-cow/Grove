(function() {
	requirejs.config(
		{
			paths: {
				'jquery' : '../../js/lib/jquery211',
				'handlebars' : '../../js/lib/handlebars-v2.0.0',
				'text' : '/js/lib/text',
				'templates' : '/templates/templates.html',
				'apilib' : '/js/lib/modules/apilib',
				'templatelib' : '/js/lib/modules/templatelib',
				'dataserv' : '/js/lib/modules/dataserv',
				'login_functions' : '/js/login_functions'
			},
			shim : {
				'handlebars' : {
					exports: 'lib/handlebars-v2.0.0'
				}
			}
		}
	);

	require(
		['apilib','templatelib','login_functions'],
		function(apilib, templatelib, login_functions){
			//login page functionality
			console.log(login_functions);
			window.process_login = login_functions.process_login;
		}
	);
})();
