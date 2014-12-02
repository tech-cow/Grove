define(
	'apilib',
	['jquery', 'dataserv'],
	
	function($, dataserv){
		var getGroup = function(id, callback) {
			var url = "/php/api/get/getgroup.php";
			var data = {'groupID':id};
			dataserv.callApi(url, data, 'GET', callback);
		};

		var getUser = function(id, callback) {
			var url = "/php/api/get/getuser.php";
			var data = {'userID':id};
			dataserv.callApi(url, data, 'GET', callback);
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