function validateForm() {
    var x = document.forms["signin"]["username"].value;
    if (x == "  ") {
        alert("please fill out this field");
        return false;
    }
} 
function hi(){
	var y= document.getElementById('gender').value;
	if (y== "India") {
		alert("hi namaskaram");
	else if (y == "USA") {
		alert("hey");
	else {
		alert("hey canedian");
	}
	};
	};
}
function melcow(){
	alert("welcome");
}
