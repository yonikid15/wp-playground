
/* Home page*/

//About us - Read More Button Anitmation

var readMore = document.getElementById("read-more");

if(readMore) {
	readMore.addEventListener("mouseover", function() {
		readMore.classList.add("button-hover-effect");
	});
}

// Accomplishments - Numbers start counting from 0 to total when element is visible after scrolling

var totalProjects = document.getElementById("projects-completed");
var totalCountries = document.getElementById("total-countries");
var totalCourses = document.getElementById("total-courses");

var projectsId;
var countriesId;
var coursesId;

var count = 0;
var count2 = 0;
var count3 = 0;


function start() {
	projectsId = setInterval(projectsCounter, 10);
	countriesId = setInterval(countriesCounter, 100);
	coursesId = setInterval(coursesCounter, 10);
}

function stopProjectCounter() {
	clearInterval(projectsId);
}

function stopCountryCounter() {
	clearInterval(countriesId);
}

function stopCoursesCounter() {
	clearInterval(coursesId);
}

function projectsCounter() { 
	totalProjects.innerHTML = count;

	if(count == 250) {
		stopProjectCounter();
	}

	count++;
}

function countriesCounter() {
	totalCountries.innerHTML = count2;

	if(count2 == 11) {
		stopCountryCounter();
	}

	count2++;
}

function coursesCounter() {
	totalCourses.innerHTML = count3;

	if(count3 == 155) {
		stopCoursesCounter();
	}

	count3++;
}

window.addEventListener("scroll" , function() {
	var height = totalProjects.getBoundingClientRect();
	var scrollTop = window.pageYOffset + window.innerHeight;

	if(scrollTop >= height.top && count == 0) {
		start();
	}
});




/* Projects Page */

var expandSym = document.getElementsByClassName("projects-expand");
var depth = document.getElementsByClassName("projects-depth");

expandSym[0].addEventListener("click", function () {
	expandDepth(0);
});

expandSym[1].addEventListener("click", function () {
	expandDepth(1);
});

expandSym[2].addEventListener("click", function () {
	expandDepth(2);
});


function expandDepth(x) {
	depth[x].classList.toggle("visible");
	if( expandSym[x].textContent == "[-]") {
		expandSym[x].textContent = "[+]";
	} else {
		expandSym[x].textContent = "[-]";
	}	

}



