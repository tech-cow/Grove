/*
var contacts = []; 
var group;
var info;

function Group(contacts, info){
	this.contacts = contacts;
	this.maxcontacts = 5; 
	this.details = info;
}

var dummyContacts = [
	{id: 0, name:"bob", content: "i like turtles"},
	{id: 1, name:"joe", content: "glue is tasty"},
	{id: 2, name:"mila", content: "look a chair"},
	{id: 3, name:"enrico", content: "wow am i cool or what"}
]

var emptyContact = [
	{id: -1, name:"empty", content:"no content"}
]

var dummyInfo = {
	name: "Generic Study Group",
	description: "We like to study things and stuff including, but not limited to, stuff as well as things. Super exclusive, apply today",
	meetingTime: "M W F 2p-3p",
	meetingLoc: "ECCR 1337"
}

var dummyGroup = new Group(dummyContacts, dummyInfo);

function getCookie(cookie_name){
	var name = cookie_name + "=";
	var ca = document.cookie.split(";");
	for(var i = 0; i < ca.length; i++){
		var c = ca[i];
		while(c.charAt(0) == " "){
			c = c.substring(1);
		}
		if(c.indexOf(name) != -1) return c.substring(name.length, c.length);
	}
	return "";
}
*/

requirejs.config(
	{
		paths: {
			'apilib' : '/js/lib/modules/apilib',
			'templatelib' : '/js/lib/modules/templatelib'
		}
	}
);

define(
	'groupviewer_functions',
	['jquery', 'apilib', 'templatelib'],
	function($, apilib, templatelib) {requirejs.config(
	{
		paths: {
			'apilib' : '/js/lib/modules/apilib',
			'templatelib' : '/js/lib/modules/templatelib'
		}
	}
);
		var toggleVisible = function(elem){
			var elemClass = $(elem).attr('class');
	
			if(elemClass.indexOf('hidden') != -1){
				var newclass = elemClass.replace('hidden','');
				$(elem).attr('class',newclass);
			} else {
				var newclass = elemClass + " hidden";
				$(elem).attr('class',newclass);
			}
		}

		var viewContact = function(contact_id){
			console.log('viewing contact '+contact_id);
		}

		var editGroupInfo = function(group_id){
			toggleVisible("#groupdetails");
			toggleVisible("#editgroup");
		}

		var postgroupinfo = function(group_id, form){
			console.log("posting group " + group_id);
			data = process_group_submit(form);
			data['groupID'] = group_id;
			
			apilib.postGroup(data, templatelib.makeGroupTemplate, ['.groupinfoContainer']);
		}

		var process_group_submit = function(form) {
			var description = form.description.value;
			var meeting_location = form.meeting_location.value;
			var meeting_time = form.meeting_time.value;

			outval =  {
				"description" : description,
				"meeting_location" : meeting_location,
				"meeting_time" : meeting_time
			}

			return outval;
		}
		
		return{
			viewContact : viewContact,
			editGroupInfo : editGroupInfo,
			postgroupinfo : postgroupinfo,
			process_group_submit : process_group_submit
		};
	}
);