define(
	'apilib',
	['jquery', 'dataserv'],
	
	function($, dataserv){
		var getGroup = function(id, callback, callbackParams) {
			var url = "/php/api/get/getgroup.php";
			var data = {
				'groupID':id,
				'apikey':'greatsecuritybro'
			};

			dataserv.callApi(url, data, 'GET', callback, callbackParams);
		};

		var getUser = function(id, callback, callbackParams) {
			var url = "/php/api/get/getuser.php";
			var data = {
				'userID':id,
				'apikey':'literally_anything'
			};

			dataserv.callApi(url, data, 'GET', callback, callbackParams);
		};

		var getCurrentGroup = function(callback, callbackParams){
			var url = "/php/api/get/getgroup.php";
			var data = {
				'currentgroup': true,
				'apikey':'asdf'
			}
			dataserv.callApi(url, data, 'GET', callback, callbackParams);
		}

		var postTest = function(data, callback, callbackParams){
			var url = "/php/api/post/posttest.php";
			var data = {
				"test" : data
			}
			dataserv.callApi(url, data, 'POST', callback, callbackParams);
		}

		var postUser = function(data, callback, callbackParams){
			var url = "/php/api/post/postuser.php";
			dataserv.callApi(url, data, 'POST', callback, callbackParams);
		}

		var postGroup = function(data, callback, callbackParams){
			var url = "/php/api/post/postgroup.php";
			dataserv.callApi(url, data, 'POST', callback, callbackParams);
		}

		var login = function(user, pass, callback, callbackParams){
			var url = "/php/api/post/postlogin.php";
			var data = {
				'username' : user,
				'password' : pass
			};
			dataserv.callApi(url, data, 'POST', callback, callbackParams);
		}

		var updateSessionVariable = function(variable, val){
			var url = "php/api/post/setsessionvar.php";
			data = {
				"var" : variable,
				"val" : val 
			}
			dataserv.callApi(url, data, 'POST', null, null);
		}

		return {
			getGroup : getGroup,
			getUser : getUser,
			getCurrentGroup: getCurrentGroup,
			postUser : postUser,
			postGroup : postGroup,
			postTest: postTest, 
			updateSessionVariable: updateSessionVariable,
			login : login,
		};
	}
);