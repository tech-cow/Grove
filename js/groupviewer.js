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

//consider loading a studygroup object from api instead of individual properties
//in fact that may make a lot more sense 
//but maybe not if resources are a factor
//individualized resource calls could give speedup and flexibility
//in the long run since all these resources are exactly the same, just presented 
//in a different context
// </words>

//should evaluate potential security risks
//in passing ID like this, being accessible and all that.
//i predict there will be no trouble, but not sure.

var dummyContacts = [
	{id: 0, name:"bob", content: "i like turtles"},
	{id: 1, name:"joe", content: "glue is tasty"},
	{id: 2, name:"mila", content: "look a chair"},
	{id: 3, name:"enrico", content: "wow am i cool or what"}
]

/*
var dummyContacts = [
	{id: 0, name:"", content: ""},
	{id: 1, name:"", content: ""},
	{id: 2, name:"", content: ""},
	{id: 3, name:"", content: ""}
]
*/
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

/* no implementation until we have a database and REST server 
function loadContactsFromDatabase(){
	$.getJSON(contactRequestUrl, {
		format: "json"
	}).done(function(data) {
		$.each(data.items, function(num, contact) {
			contacts.push(item);
		});
	});
}

function loadInfoFromDatabase(){
	$.getJSON(infoRequestUrl, {
		format: "json"
	}).done(function(data) {
		info = data;
	});
}

function fetchGroup(){
	loadContactsFromDatabase();
	loadInfoFromDatabase();
	group = new Group(contacts, info);
}
*/

function getGroup(){
	$.ajax({
		type:"POST", //fuck it should be a get
		url:"./testhandler.php",
		data:"getGroup=1",
		success: function(response){
			console.log("got response: " + response);
			$("#groupInfo").html(response);
		}
	});
}

//this function uses api!
function getUser(userID){
	$.ajax({
		type:"GET",
		url: "../../php/api/get/getuser.php",
		data:{
			"apikey":"lolnokeyauthentication",
			"userID":userID
		},
		success: function(response){
			console.log(response);
		}
	});
}

function getMember(memberID){
	$.ajax({
		type:"POST",
		url:"./testhandler.php",
		data:"getMember="+memberID,
		success: function(response){
			console.log(response);
		}
	});
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

function generateGroupInfoHtml(){
	var path = templatePath + "groupinfo_test.html";
	makeTemplate(path, dummyInfo, groupinfoTemplateCallback);
}

function groupinfoTemplateCallback(data, context){
	var result = Handlebars.compile(data);
	$('.groupinfoContainer').append(result(context));
}

function generateContactHtml(){
	var path = templatePath + 'contact.html';
	var emptypath = templatePath + 'contact_empty.html';

	while(dummyContacts.length < dummyGroup.maxcontacts){
		dummyContacts.push(emptyContact[0]);
	}

	for(var i = 0; i < dummyContacts.length; i++){
		//console.log("Generating html for contact");
		if(dummyContacts[i].name=="empty"){
			makeTemplate(emptypath, dummyContacts[i], contactTemplateCallback);	
		}else{
			makeTemplate(path, dummyContacts[i], contactTemplateCallback);	
		}
	}
/*
	if(dummyContacts.length <= dummyGroup.maxcontacts){
		makeTemplate(emptypath, emptyContact, contactTemplateCallback);
	}
*/
}

function contactTemplateCallback(data, context){
	var result = Handlebars.compile(data);
	$('.groupmemberContainer').append(result(context));
}

function makeTemplate(path, context, callback){
	console.log(context);
	$.ajax({
		url: path,
		cache: true,
	}).done(function(response){
		callback(response,context);
	});
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

$(document).ready( function() { 
	loadGroup();
});