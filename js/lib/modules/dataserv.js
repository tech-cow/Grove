define(
	'dataserv',
	['jquery'],
	function ($) {
		var callApi = function(url, data, type, callback){
			$.ajax({
				url: url,
				type: type,
				dataType: 'json',
				data: data,
				success: function(data){
					console.log(data);
					callback(data);
				},
				error: function(jqxhr, except){
					console.log('error: ', except);
				}
			});
		};

		return{
			callApi : callApi
		};
	}
);