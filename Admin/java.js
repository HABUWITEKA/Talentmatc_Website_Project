function section1display() {
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
function section2display() {
	var section1 = document.getElementById("section1");
	var section2 = document.getElementById("section2");
	var section3 = document.getElementById("section3");
	var section4 = document.getElementById("section4");

	section1.style.display="none";
	section2.style.display="block";
	section3.style.display="none";
	section4.style.display="none";
}
function section3display() {
	var section1 = document.getElementById("section1");
	var section2 = document.getElementById("section2");
	var section3 = document.getElementById("section3");
	var section4 = document.getElementById("section4");

	section1.style.display="none";
	section2.style.display="none";
	section3.style.display="block";
	section4.style.display="none";
}
function section4display() {
	var section1 = document.getElementById("section1");
	var section2 = document.getElementById("section2");
	var section3 = document.getElementById("section3");
	var section4 = document.getElementById("section4");

	section1.style.display="none";
	section2.style.display="none";
	section3.style.display="none";
	section4.style.display="block";
}
function call() {
	var calldiv = document.getElementById("call");
	calldiv.style.display="block";
}
function closecall(){
	var calldiv = document.getElementById("call");
	calldiv.style.display="none";
}
function email() {
	var emaildiv = document.getElementById("email");
	emaildiv.style.display="block";
}
function closeemail(){
	var emaildiv = document.getElementById("email");
	emaildiv.style.display="none";
}