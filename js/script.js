
	/* Home page*/

	//About us - Read More Button Anitmation

	var readMore = document.getElementById("read-more");
	
    if(readMore) {
	readMore.addEventListener("mouseover", function() {
		readMore.classList.add("button-hover-effect");
	});
    }

	// Accomplishments - Numbers start counting from 0 to total when element is visible after scrolling

	var num = document.getElementsByClassName("visible");

	/* Projects Page */

	var expandSym = document.getElementsByClassName('projects-expand');
	var depth = document.getElementsByClassName('projects-depth');

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

	

