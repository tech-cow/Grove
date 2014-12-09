define(
	'dataserv',
	['jquery'],
	function ($) {
		var callApi = function(url, data, type, callback, params){
			//console.log(callback);
			console.log("querying url : " + url + " with a " + type + " request");
			if(type=="POST"){
				$.ajax({
					url: url,
					type: type,
					data: data,
					success: function(response){
						//response = JSON.parse(response);
						params.push(response);
						callback.apply(this, params);
					},
					error: function(jqxhr, except){
						console.log('error: ', except);
					}
				});
			} else {
				$.ajax({
					url: url,
					type: type,
					dataType: 'json',
					data: data,
					success: function(response){
						params.push(response);
						console.log(response);
						callback.apply(this, params);
					},
					error: function(jqxhr, except){
						console.log('error: ', except);
					}
				});
			}
		};

		return{
			callApi : callApi
		};
	}
);