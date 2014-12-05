define(
	'apilib',
	['jquery', 'dataserv'],
	
	function($, dataserv){
		var getGroup = function(id, callback, params) {
			var url = "/php/api/get/getgroup.php";
			var data = {
				'groupID':id,
				'apikey':'greatsecuritybro'
			};

			dataserv.callApi(url, data, 'GET', callback, params);
		};

		var getUser = function(id, callback, params) {
			var url = "/php/api/get/getuser.php";
			var data = {
				'userID':id,
				'apikey':'literally_anything'
			};
			//console.log('passing callback: ' + callback);
			console.log('params : '+ params);
			dataserv.callApi(url, data, 'GET', callback, params);
		};

		return {
			getGroup : getGroup,
			getUser : getUser
		};
	}
);


/*
function getGroup(groupID){
	$.ajax({
		type:"GET",
		url: "/php/api/get/getgroup.php",
		data: {
			"groupID":groupID
		},
		success: function(response){
			console.log(response);
		}
	})
}

function getUser(userID){
	$.ajax({
		type:"GET",
		url: "/php/api/get/getuser.php",
		data:{
			"apikey":"lolnokeyauthentication",
			"userID":userID
		},
		success: callback(response)
	});
}
*/