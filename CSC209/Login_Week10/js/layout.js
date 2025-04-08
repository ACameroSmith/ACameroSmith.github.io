
function openNav() {
	document.getElementById("mySidenav").style.width = "14%";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
}

function showLi(id) {
	document.getElementById(id).style.display = "block";
}

function hideLi(id) {
	document.getElementById(id).style.display = "none";
}

function toggleLi(id) {
	console.log(id);
	var status = document.getElementById(id).style.display ;
	if (status ==  "block"){
		document.getElementById(id).style.display = "none"
	} else {
		document.getElementById(id).style.display = "block"
	}
}

function showMain(id) {
	var allMains = document.getElementsByClassName('main');
	var i;
	for ( i=0; i<allMains.length; i++){
		allMains[i].style.display = "none";
	};
	
	document.getElementById(id).style.display = "block";
	showSteps(id);
}; 

function showSteps(id) {
	var allSteps = document.getElementsByClassName('steps');
	var i;
	for ( i=0; i<allSteps.length; i++){
		allSteps[i].style.display = "none";
	};
	document.getElementById(id).style.display = "block";
}; 