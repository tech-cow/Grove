var contactRequestUrl = "http://some/server/api/call";
var contacts = [];

var dummyContacts = [
	{name:"bob", content: "i like turtles"},
	{name:"joe", content: "glue is tasty"},
	{name:"mila", content: "look a chair"},
	{name:"enrico", content: "wow am i cool or what"}
]

var contactTemplate;

function loadContactsFromDatabase(){
	$.getJSON(contactRequestUrl, {
		format: "json"
	}).done(function(data) {
		$.each(data.items, function(num, contact) {
			contacts.push(item);
		});
	});
}

function generateContactHtml(){
	var path = '../../templates/contact.html';
	for(var i = 0; i < dummyContacts.count; i++){
		console.log(dummyContacts[i]);
		makeTemplate(path, dummyContacts[i]);
	}
}

function makeTemplate(path, context){
	console.log(context);
	$.ajax({
		url: path,
		cache: true,
	}).done(function(response){
		contactTemplate = templateCallback(response, context);
		$(".groupmemberContainer").append(contactTemplate);
	});
}

function templateCallback(data, context){
	var result = Handlebars.compile(data);
	//$(".groupmemberContainer").html(result);
	//$(".groupmemberContainer").html(contactTemplate);
	return result(context);
}

$(document).ready( function() { 
	var context = {
		name: "bob",
		content: "hello this is content"
	};
	var templatePath = '../../templates/contact.html';
	makeTemplate(templatePath, context);

	//var testTemplate = Handlebars.compile(contact_template);
	//console.log(testTemplate(context));

	//$(".groupmemberContainer").text(templateHtml);
	generateContactHtml();
});