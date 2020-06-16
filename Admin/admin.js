function jobseeker(){
     var jobseekers = document.getElementById("jobseekers");
     var companies = document.getElementById("companies");
     var overview = document.getElementById("Overview");
	 var onlineusers = document.getElementById("onlineusers");
     var internship = document.getElementById("internship");
     var jobs = document.getElementById("jobs");
     var jobsection = document.getElementById('jobsection');
    jobs.style.display="none";
    jobsection.style.display="none";
    jobseekers.style.display="block";
    companies.style.display="none";
    onlineusers.style.display="none";
    overview.style.display="block";
    internship.style.display="none";
    document.title="Jobseekers overview";
}

function company() {
	var jobseekers = document.getElementById("jobseekers");
    var companies = document.getElementById("companies");
    var jobs = document.getElementById("jobs");
    var internship = document.getElementById("internship");
    jobseekers.style.display="none";
    companies.style.display="block";
     jobs.style.display="none";
     internship.style.display="none";
    document.title="Companies overview";
}
function job(){
	var jobs = document.getElementById("jobs");
	var jobseekers = document.getElementById("jobseekers");
    var companies = document.getElementById("companies");
    var internship = document.getElementById("internship");
     var jobsection = document.getElementById('jobsection');
    jobseekers.style.display="none";
    companies.style.display="none";
    jobs.style.display="block";
    internship.style.display="none";
    jobsection.style.display="block";

    document.title="Jobs";
}
function internship(){
	var jobs = document.getElementById("jobs");
	var jobseekers = document.getElementById("jobseekers");
    var companies = document.getElementById("companies");
    var internship = document.getElementById("internship");
    var internshipsection = document.getElementById('internshipsection');
    jobseekers.style.display="none";
    companies.style.display="none";
    jobs.style.display="none";
    internship.style.display="block";
    internshipsection.style.display="block";
    document.title="Internships";
}
function activatelink1() {
	// body...
	var element1 = document.getElementById("link1");
	var element2 = document.getElementById("link2");
	var element3 =  document.getElementById("link3");
	var element4 = document.getElementById("link4");
	element4.classList.remove("active");
	element1.classList.add("active");
	element2.classList.remove("active");
	element3.classList.remove("active");
	}
function activatelink2() {
	// body...
	var element1 = document.getElementById("link1");
	var element2 = document.getElementById("link2");
	var element3 =  document.getElementById("link3");
	var element4 = document.getElementById("link4");
	element4.classList.remove("active");
	element2.classList.add("active");
	element1.classList.remove("active");
	element3.classList.remove("active");
}
function activatelink3() {
	// body...
	var element1 = document.getElementById("link1");
	var element2 = document.getElementById("link2");
	var element3 =  document.getElementById("link3");
	var element4 = document.getElementById("link4");
	element4.classList.remove("active");
	element2.classList.remove("active");
	element1.classList.remove("active");
	element3.classList.add("active");
}
function activatelink4() {
	// body...
	var element1 = document.getElementById("link1");
	var element2 = document.getElementById("link2");
	var element3 = document.getElementById("link3");
	var element4 = document.getElementById("link4");
	element2.classList.remove("active");
	element1.classList.remove("active");
	element3.classList.remove("active");
	element4.classList.add("active")
}

function displayonlineusers(){
	var overview = document.getElementById("Overview");
	var onlineusers = document.getElementById("onlineusers");

	overview.style.display="none";
	onlineusers.style.display="block";

	document.title="Registered -Jobseekers"
}
function displaycompanyonlineusers(){
	var overview = document.getElementById("companyoverview");
	var onlineusers = document.getElementById("onlinecompanyusers");

	overview.style.display="none";
	onlineusers.style.display="block";

	document.title="Registered users -Companies"
}
//switch tables
function jobswitch(){
	var jobtable = document.getElementById("jobtable");
	var interntable = document.getElementById("interntable");
    var jobbutton = document.getElementById("jobbutton");
    var internbutton = document.getElementById("internbutton");

	jobtable.style.display="";
	interntable.style.display="none";
	jobbutton.style.background="#4a161a";
	internbutton.style.background="";
}
function internswitch(){
	var jobtable = document.getElementById("jobtable");
	var interntable = document.getElementById("interntable");

	jobtable.style.display="none";
	interntable.style.display="block";
	internbutton.style.background="#4a161a";
	jobbutton.style.background="none";
}

// section switches

