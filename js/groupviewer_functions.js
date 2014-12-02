/*
var contactRequestUrl = "http://some/server/api/call"; //should point to our API or database or whatever
var templatePath = "../../templates/";

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

var contactTemplate; //global vars for making templates, consider removal
var groupInfoTemplate;

function getGroup(groupID){
	$.ajax({
		type:"GET",
		url: "../../php/api/get/getgroup.php",
		data: {
			"groupID":groupID
		},
		success: function(response){
			console.log(response);
		}
	})
}

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

function generateContactHtml(){
	var path = templatePath + 'contact.html';
	var emptypath = templatePath + 'contact_empty.html';

	while(dummyContacts.length < dummyGroup.maxcontacts){
		dummyContacts.push(emptyContact[0]);
	}

	for(var i = 0; i < dummyContacts.length; i++){
		if(dummyContacts[i].name=="empty"){
			makeTemplate(emptypath, dummyContacts[i], contactTemplateCallback);	
		}else{
			makeTemplate(path, dummyContacts[i], contactTemplateCallback);	
		}
	}
}

function loadGroup(){
	generateGroupInfoHtml();
	generateContactHtml();
}

function toggleVisible(elem){
	var elemClass = $(elem).attr('class');
	
	if(elemClass.indexOf('hidden') != -1){
		var newclass = elemClass.replace('hidden','');
		$(elem).attr('class',newclass);
	} else {
		var newclass = elemClass + " hidden";
		$(elem).attr('class',newclass);
	}
}

function editGroupInfo(){
	toggleVisible("#groupdetails");
	toggleVisible("#editgroup");
}

function viewContact(contact_id){
	console.log("viewing contact "+contact_id);
}

*/
define(
	'groupviewer_functions',
	['jquery'],
	function($) {
		var viewContact = function(contact_id){
			console.log('viewing contact '+contact_id);
		} 
		
		return{
			viewContact : viewContact
		};
	}
);