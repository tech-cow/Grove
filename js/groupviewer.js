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
			window.editGroupInfo = groupviewer_functions.editGroupInfo;
			window.postgroupinfo = groupviewer_functions.postgroupinfo;
			window.process_group_submit = groupviewer_functions.process_group_submit;

			var test = apilib.getUser('3', templatelib.makeContactTemplate, ['.groupmemberContainer']); //p.s. this is pseudocode
			//var group = apilib.getGroup('1', templatelib.makeGroupTemplate, ['.groupinfoContainer']);
			//var makegroup = apilib.getGroup(group, templatelib.makeGroupTemplate, ['.groupinfoContainer']);
			
			var group = apilib.getCurrentGroup(templatelib.makeGroupTemplate, ['.groupinfoContainer']);
			
			/*
			$('#submitgroupinfo').submit(function(){
				var values = $('#submitgroupinfo').serialize();
				console.log('vals: ' + values);
			});
			*/
			
			//var thing = apilib.postTest('butts', $('.groupinfoContainer').append, [thing]);
		}
	);

})();
