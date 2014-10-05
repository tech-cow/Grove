var contactRequestUrl = "http://some/server/api/call"; //should point to our API or database or whatever
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

var dummyContacts = [
	{name:"bob", content: "i like turtles"},
	{name:"joe", content: "glue is tasty"},
	{name:"mila", content: "look a chair"},
	{name:"enrico", content: "wow am i cool or what"}
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

function generateGroupInfoHtml(){
	var path = "../../templates/groupinfo.html";
	makeTemplate(path, dummyInfo, groupinfoTemplateCallback);
}

function groupinfoTemplateCallback(data, context){
	var result = Handlebars.compile(data);
	$('.groupinfoContainer').append(result(context));
}

function generateContactHtml(){
	var path = '../../templates/contact.html';

	for(var i = 0; i < dummyContacts.length; i++){
		console.log("Generating html for contact");
		console.log(dummyContacts[i].name);
		makeTemplate(path, dummyContacts[i], contactTemplateCallback);
	}
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
	
	if(elemClass.contains('hidden')){
		var newclass = elemClass.replace('hidden','');
		$(elem).attr('class',newclass);
	} else {
		var newclass = elemClass + " hidden";
		$(elem).attr('class',newclass);
	}
}

function editGroupInfo(){
	toggleVisible("#groupdetails");
}

$(document).ready( function() { 
	loadGroup();
});