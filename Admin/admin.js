function jobseeker(){
     var jobseekers = document.getElementById("jobseekers");
     var companies = document.getElementById("companies");
     var overview = document.getElementById("Overview");
	 var onlineusers = document.getElementById("onlineusers");

    jobseekers.style.display="block";
    companies.style.display="none";
    onlineusers.style.display="none";
    overview.style.display="block";
    document.title="Jobseekers overview";
}

function company() {
	var jobseekers = document.getElementById("jobseekers");
    var companies = document.getElementById("companies");
    var jobs = document.getElementById("jobs");
    jobseekers.style.display="none";
    companies.style.display="block";
     jobs.style.display="none";
    document.title="Companies overview";
}
function job(){
	var jobs = document.getElementById("jobs");
	var jobseekers = document.getElementById("jobseekers");
    var companies = document.getElementById("companies");

    jobseekers.style.display="none";
    companies.style.display="none";
    jobs.style.display="block";

    document.title="Jobs";
}
function activatelink1() {
	// body...
	var element1 = document.getElementById("link1");
	var element2 = document.getElementById("link2");
	var element3 =  document.getElementById("link3");
	element1.classList.add("active");
	element2.classList.remove("active");
	element3.classList.remove("active");
	}
function activatelink2() {
	// body...
	var element1 = document.getElementById("link1");
	var element2 = document.getElementById("link2");
	var element3 =  document.getElementById("link3");
	element2.classList.add("active");
	element1.classList.remove("active");
	element3.classList.remove("active");
}
function activatelink3() {
	// body...
	var element1 = document.getElementById("link1");
	var element2 = document.getElementById("link2");
	var element3 =  document.getElementById("link3");
	element2.classList.remove("active");
	element1.classList.remove("active");
	element3.classList.add("active");
}

function displayonlineusers(){
	var overview = document.getElementById("Overview");
	var onlineusers = document.getElementById("onlineusers");

	overview.style.display="none";
	onlineusers.style.display="block";

	document.title="online users now -Jobseekers"
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

