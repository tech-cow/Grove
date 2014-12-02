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
					callback(data);
				}
			});
		};

		return{
			callApi : callApi
		};
	}
);