function computeNrStepsPerLabHw(){
	var tuLabEx = document.getElementById('labTuM').querySelectorAll('.exercise');
	nrStepsLabTu = tuLabEx.length;
	
	var thLabEx = document.getElementById('labThM').querySelectorAll('.exercise');
	nrStepsLabTh = thLabEx.length;
	
	var hwEx = document.getElementById('hwM').querySelectorAll('.exercise');
	nrStepsHw = hwEx.length;
}

function makeSideNav(nrSteps, labId, labType){
	var eltId = 'lab' + labType + 'X';
	
	var stepsNavTemplate = document.getElementById(eltId).innerHTML;
	var allLinks = [];
	var crtLink=""; var i;
	for ( i=0; i<nrSteps; i++){
		crtLink = stepsNavTemplate.replace(/X/g,(i+1).toString());;
		allLinks.push(crtLink);
	};
	var allLinksString=allLinks.join();

	document.getElementById(labId).innerHTML = allLinksString;
}

function makeAllSideNav(nrStepsTu,nrStepsTh,nrStepsHw){
	makeSideNav(nrStepsTu, 'labTuS','Tu');
	makeSideNav(nrStepsTh, 'labThS','Th');
	makeSideNav(nrStepsHw, 'hwS','Hw');
}