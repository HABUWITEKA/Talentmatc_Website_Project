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

    jobseekers.style.display="none";
    companies.style.display="block";

    document.title="Companies overview";
}
function activatelink1() {
	// body...
	var element1 = document.getElementById("link1");
	var element2 = document.getElementById("link2");
	
	element1.classList.add("active");
	element2.classList.remove("active");
	}
function activatelink2() {
	// body...
	var element1 = document.getElementById("link1");
	var element2 = document.getElementById("link2");
	
	element2.classList.add("active");
	element1.classList.remove("active");
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
	jobbutton.style.background="#34421E";
	internbutton.style.background="";
}
function internswitch(){
	var jobtable = document.getElementById("jobtable");
	var interntable = document.getElementById("interntable");

	jobtable.style.display="none";
	interntable.style.display="block";
	internbutton.style.background="#34421E";
	jobbutton.style.background="none";
}

// section switches

function display() {
	var section1 = document.getElementById("section1");
	var section2 = document.getElementById("section2");
	var section3 = document.getElementById("section3");
	var section4 = document.getElementById("section4");

	section1.style.display="block";
	section2.style.display="none";
	section3.style.display="none";
	section4.style.display="none";

	console.log(2);
}
// function section2display() {
// 	var section1 = document.getElementById("section1");
// 	var section2 = document.getElementById("section2");
// 	var section3 = document.getElementById("section3");
// 	var section4 = document.getElementById("section4");

// 	section1.style.display="none";
// 	section2.style.display="block";
// 	section3.style.display="none";
// 	section4.style.display="none";
// }
// function section3display() {
// 	var section1 = document.getElementById("section1");
// 	var section2 = document.getElementById("section2");
// 	var section3 = document.getElementById("section3");
// 	var section4 = document.getElementById("section4");

// 	section1.style.display="none";
// 	section2.style.display="none";
// 	section3.style.display="block";
// 	section4.style.display="none";
// }
// function section4display() {
// 	var section1 = document.getElementById("section1");
// 	var section2 = document.getElementById("section2");
// 	var section3 = document.getElementById("section3");
// 	var section4 = document.getElementById("section4");

// 	section1.style.display="none";
// 	section2.style.display="none";
// 	section3.style.display="none";
// 	section4.style.display="block";
// }