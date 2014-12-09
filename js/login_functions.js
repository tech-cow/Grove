/*
requirejs.config(
	{
		paths: {
			'apilib' : '/js/lib/modules/apilib',
			'templatelib' : '/js/lib/modules/templatelib'
		}
	}
);
*/
define(
	'login_functions',
	['jquery', 'apilib', 'templatelib'],
		function($, apilib, templatelib){
			requirejs.config({
				paths: {
					'apilib' : '/js/lib/modules/apilib',
					'templatelib' : '/js/lib/modules/templatelib'
				}
			});

			var process_login = function(form){
				var user = form.username.value;
				var pass = form.password.value;

				apilib.login(user, pass, login_callback, []);
			}

			var login_callback = function(response){
				if(response == true){
					//redirect to home page
					window.location.replace("/html/homeview/Grove_Homepage.html");
				} else {
					//nope
					$("#errorspace").html('invalid user/pass');
				}
			}

			return{
				process_login : process_login
			};
	}
);