
function step1display(){
  var step1 = document.getElementById("Step1");
  var step2=document.getElementById("Step2");
  var next2 = document.getElementById("next2");
  var next1 = document.getElementById("next1");
  var back1 = document.getElementById("back1");
  step2.style.display="none";
  step1.style.display="block";
  next2.style.display="none";
  next1.style.display="block";
  back1.style.display="none";
  
}
function step2display(){
	var step1 = document.getElementById("Step1");
	var step2 = document.getElementById("Step2");
	var step3 = document.getElementById("Step3");
    var next1 = document.getElementById("next1");
    var next2 = document.getElementById("next2");
    var back1 = document.getElementById("back1");
    var back2 = document.getElementById("back2");
	step1.style.display = "none";
	step2.style.display ="block";
	step3.style.display="none";
	next1.style.display="none";
	next2.style.display="block";
	back1.style.display="block";
	back2.style.display="none";
}
function step1companydisplay(){
	var step1 = document.getElementById("Step1");
	var step2 = document.getElementById("Step2company");
    var next1 = document.getElementById("next1");
    var next2 = document.getElementById("next2company");
    var back1company = document.getElementById("back1company");
	step1.style.display = "block";
	step2.style.display ="none";
	next1.style.display="block";
	next2.style.display="none";
	back1company.style.display="none";
}

function step2companydisplay(){
	var step1 = document.getElementById("Step1");
	var step2 = document.getElementById("Step2company");
    var next1 = document.getElementById("next1");
    var next2 = document.getElementById("next2company");
    var back1company = document.getElementById("back1company");
    var back2company = document.getElementById("back2company");
    var step3 = document.getElementById("Step3");
	step1.style.display = "none";
	step2.style.display ="block";
	next1.style.display="none";
	next2.style.display="block";
	back1company.style.display="block";
	step3.style.display = "none";
	back2company.style.display="none";
}
function step3display(){
	var step3 = document.getElementById("Step3");
	var step2 = document.getElementById("Step2");
    var next2 = document.getElementById("next2"); 
    var back1 = document.getElementById("back1");
    var back2 = document.getElementById("back2");
    step2.style.display="none";
    step3.style.display="block";
    next2.style.display="none";
    back1.style.display="none";
	back2.style.display="block";

}
function step3companydisplay(){
	var step3 = document.getElementById("Step3");
	var step2 = document.getElementById("Step2company");
    var next2 = document.getElementById("next2company");
    var back1company = document.getElementById("back1company");
    var back2company = document.getElementById("back2company");
    step2.style.display="none";
    step2.style.display="none";
    step3.style.display="block";
    next2.style.display="none";
    back1company.style.display="none";
    back2company.style.display="block";
}
// function to toggle the different menus on the dashboard

function Mydashboard(){
	var mydashboard = document.getElementById("Mydashboard");
	var myApplications = document.getElementById("MyApplications");
	var jobopportunities = document.getElementById("Jobopportunities");
    var internshipopportunities = document.getElementById("Internshipopportunities");
    var careerresources = document.getElementById("Careerresources");

	mydashboard.style.display="block";
	myApplications.style.display="none";
	jobopportunities.style.display="none";
	internshipopportunities.style.display="none";
	careerresources.style.display="none";

	document.title="My dashboard";
}
function MyApplications(){
	var mydashboard = document.getElementById("Mydashboard");
	var myApplications = document.getElementById("MyApplications");
	var jobopportunities = document.getElementById("Jobopportunities");
    var internshipopportunities = document.getElementById("Internshipopportunities");
    var careerresources = document.getElementById("Careerresources");

	mydashboard.style.display="none";
	myApplications.style.display="block";
	jobopportunities.style.display="none";
	internshipopportunities.style.display="none";
	careerresources.style.display="none";

	document.title="My Applications";
}
function Jobopportunities(){
	var mydashboard = document.getElementById("Mydashboard");
	var myApplications = document.getElementById("MyApplications");
	var jobopportunities = document.getElementById("Jobopportunities");
    var internshipopportunities = document.getElementById("Internshipopportunities");
    var careerresources = document.getElementById("Careerresources");

	mydashboard.style.display="none";
	myApplications.style.display="none";
	jobopportunities.style.display="block";
	internshipopportunities.style.display="none";
	careerresources.style.display="none";

	document.title="Job opportunities - Apply!";
}
function Internshipopportunities(){
	var mydashboard = document.getElementById("Mydashboard");
	var myApplications = document.getElementById("MyApplications");
	var jobopportunities = document.getElementById("Jobopportunities");
	var internshipopportunities = document.getElementById("Internshipopportunities");
	var careerresources = document.getElementById("Careerresources");

	mydashboard.style.display="none";
	myApplications.style.display="none";
	jobopportunities.style.display="none";
	internshipopportunities.style.display="block";
	careerresources.style.display="none";

	document.title="Internship Opportunities - Apply!";
}
function Careerresources(){
	var mydashboard = document.getElementById("Mydashboard");
	var myApplications = document.getElementById("MyApplications");
	var jobopportunities = document.getElementById("Jobopportunities");
	var internshipopportunities = document.getElementById("Internshipopportunities");
    var careerresources = document.getElementById("Careerresources");
    
	mydashboard.style.display="none";
	myApplications.style.display="none";
	jobopportunities.style.display="none";
	internshipopportunities.style.display="none";
	careerresources.style.display="block";

	document.title="Career Resources For you";
}
function activatelink1() {
	// body...
	var element1 = document.getElementById("link1");
	var element2 = document.getElementById("link2");
	var element3 = document.getElementById("link3");
	var element4 = document.getElementById("link4");
	var element5 = document.getElementById("link5");
	element1.classList.add("active");
	element2.classList.remove("active");
	element3.classList.remove("active");
	element4.classList.remove("active");
	element5.classList.remove("active");
}
function activatelink2() {
	// body...
	var element1 = document.getElementById("link1");
	var element2 = document.getElementById("link2");
	var element3 = document.getElementById("link3");
	var element4 = document.getElementById("link4");
	var element5 = document.getElementById("link5");
	element2.classList.add("active");
	element1.classList.remove("active");
	element3.classList.remove("active");
	element4.classList.remove("active");
	element5.classList.remove("active");
}

function activatelink3() {
	// body...
	var element1 = document.getElementById("link1");
	var element2 = document.getElementById("link2");
	var element3 = document.getElementById("link3");
	var element4 = document.getElementById("link4");
	var element5 = document.getElementById("link5");
	element3.classList.add("active");
	element1.classList.remove("active");
	element2.classList.remove("active");
	element4.classList.remove("active");
	element5.classList.remove("active");
}
function activatelink4() {
	// body...
	var element1 = document.getElementById("link1");
	var element2 = document.getElementById("link2");
	var element3 = document.getElementById("link3");
	var element4 = document.getElementById("link4");
	var element5 = document.getElementById("link5");
	element4.classList.add("active");
	element1.classList.remove("active");
	element2.classList.remove("active");
	element3.classList.remove("active");
	element5.classList.remove("active");
}
function activatelink5() {
	// body...
	var element1 = document.getElementById("link1");
	var element2 = document.getElementById("link2");
	var element3 = document.getElementById("link3");
	var element4 = document.getElementById("link4");
	var element5 = document.getElementById("link5");
	element5.classList.add("active");
	element1.classList.remove("active");
	element2.classList.remove("active");
	element3.classList.remove("active");
	element4.classList.remove("active");
}

// toggle different on the company side

 function mydashboardcompany(){
 	var mydashboard = document.getElementById("Dashboardcompany");
 	var jobs = document.getElementById("jobs");
 	var internships = document.getElementById("internships");
 	var applicants = document.getElementById("applicants");

 	mydashboard.style.display="block";
 	jobs.style.display="none";
 	internships.style.display="none";
 	applicants.style.display="none";

 	document.title="My Dashboard";
 }
 function jobscompany(){
 	var mydashboard = document.getElementById("Dashboardcompany");
 	var jobs = document.getElementById("jobs");
 	var internships = document.getElementById("internships");
 	var applicants = document.getElementById("applicants");

 	mydashboard.style.display="none";
 	jobs.style.display="block";
 	internships.style.display="none";
 	applicants.style.display="none";

 	document.title="Jobs Posted"
 }
  function internshipscompany(){
 	var mydashboard = document.getElementById("Dashboardcompany");
 	var jobs = document.getElementById("jobs");
 	var internships = document.getElementById("internships");
 	var applicants = document.getElementById("applicants");

 	mydashboard.style.display="none";
 	jobs.style.display="none";
 	internships.style.display="block";
 	applicants.style.display="none";

 	document.title="Internships Posted";
 }
  function applicantscompany(){
 	var mydashboard = document.getElementById("Dashboardcompany");
 	var jobs = document.getElementById("jobs");
 	var internships = document.getElementById("internships");
 	var applicants = document.getElementById("applicants");

 	mydashboard.style.display="none";
 	jobs.style.display="none";
 	internships.style.display="none";
 	applicants.style.display="block";

 	document.title="Explore Candidates"
 }
// Display logot options
function logout(){
	var logoutarrow = document.getElementById("logout");
	// logoutarrow.style.display='block';

	if (logoutarrow.style.display=="none") {
		logoutarrow.style.display="block";
	} 

	else if(logoutarrow.style.display="block"){
		logoutarrow.style.display="none";
	}
}


//word maximum lenght
var max = 100;
function maximumwords(obj){
	var len = obj.value.split(/[\s]+/);
		if (len.length > max) {
			alert("The maximum word is" + max);
		}
		return true;
}

//about me edit toggle

function aboutmeedit(){
	var aboutedit = document.getElementById("aboutmeedit");
	aboutedit.style.display="block";
}
function bioedit(){
	var bioediting = document.getElementById("bioedit");
	bioediting.style.display="block";
}
function interestedit(){
	var interestediting = document.getElementById("interestsedit");
	interestediting.style.display="block";
}
function skilledit(){
	var skillediting = document.getElementById("skillsedit");
	skillediting.style.display="block";
}

//profile picture editing /toggle
function changepicture(){
	var profilepicture = document.getElementById("profileedit");
	profilepicture.style.display="block";
	console.log(1);
}

//displaying job dexcription and applying to the job

function jobposterdisplay(){
	var jobposter = document.getElementById("jobposter");
	var jobposting = document.getElementById("jobposting");
	jobposter.style.display="block";
	jobposting.style.display="none";
	document.title="Apply for the job";
}
function jobposterclose(){
	var jobposter = document.getElementById("jobposter");
	var jobposting = document.getElementById("jobposting");
	jobposter.style.display="none";
	jobposting.style.display="block";

	document.title="Job Opportunities - Apply!";
}
function internshipposterdisplay(){
	var internshipposter = document.getElementById("internshipposter");
	var internshipposting = document.getElementById("internshipposting");
	internshipposter.style.display="block";
	internshipposting.style.display="none";

	document.title="Apply for the internship";
}
function internshipposterclose(){
	var internshipposter = document.getElementById("internshipposter");
	var internshipposting = document.getElementById("internshipposting");
	internshipposter.style.display="none";
	internshipposting.style.display="block";
	document.title="Internship Opportunities - Apply!";
}
function accountsettings(){
	var account = document.getElementById("accountsettings");
	var logout = document.getElementById("logout");
	account.style.display="block";
	logout.style.display="none";
	console.log(2);
}
function outside(){
	var options = document.querySelector(".logoutoptions");
	document.addEventListener("click", function(event) {
		if (event.target.closest(".logoutoptions")) return;

		options.classList.add("hideit");
		// body...
	})
}

// Hidde where to posta a job

function jobadd(){
	var alljob = document.getElementById('alljob');
	var postajob = document.getElementById('postajob');

	postajob.style.display="block";
	alljob.style.display="none";
}
function internshipadd(){
	var allinternship = document.getElementById('allinternship');
	var postinternship = document.getElementById('postinternship');

	postinternship.style.display="block";
	allinternship.style.display="none";
}
// hide/show job update corner
function update(){
var updateajob = document.getElementById('updateajob');
updateajob.style.display="block";

console.log(2);
}

//switch tables
function jobswitch(){
	var jobtable = document.getElementById("jobtable");
	var interntable = document.getElementById("interntable");
    var jobbutton = document.getElementById("jobbutton");
    var internbutton = document.getElementById("internbutton");

	jobtable.style.display="";
	interntable.style.display="none";
	jobbutton.style.background="#34421E";
	internbutton.style.background="";
}
function internswitch(){
	var jobtable = document.getElementById("jobtable");
	var interntable = document.getElementById("interntable");

	jobtable.style.display="none";
	interntable.style.display="inline-block";
	internbutton.style.background="#34421E";
	jobbutton.style.background="none";
}
function close1(){
	var accountsettings = document.getElementById("accountsettings");
	accountsettings.style.display="none";
}
function close2(){
	var profileedit = document.getElementById("profileedit");
	var aboutmeedit = document.getElementById("aboutmeedit");
	var skillsedit = document.getElementById("skillsedit");
	var interestsedit= document.getElementById("interestsedit");
	var accountsettings= document.getElementById("accountsettings");
	profileedit.style.display="none";
	aboutmeedit.style.display="none";
	skillsedit.style.display="none";
	interestsedit.style.display="none";
	accountsettings.style.display="none";
}
function close3(){
	var bioedit= document.getElementById("bioedit");
	bioedit.style.display="none";
}