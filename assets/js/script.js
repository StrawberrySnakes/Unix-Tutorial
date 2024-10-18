function toggleNav() {
    console.log('toggleNav function called');
    var links = document.getElementById("navLinks");
    var topnav = document.querySelector(".topnav");
    topnav.classList.toggle("active");

    // Check if links are currently visible
    var linksVisible = window.getComputedStyle(links).getPropertyValue('display') !== 'none';

    // Toggle the visibility of the links
    links.style.display = linksVisible ? 'none' : 'flex';
}


const questions = document.querySelectorAll('.question');

questions.forEach(question => {
  question.addEventListener('click', () => {
    const answer = question.nextElementSibling;
    question.parentNode.classList.toggle('active');
    answer.classList.toggle('show');
  });
});


// Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


const labels = document.querySelectorAll('label');


// control the switching pages with a click
function changeForCommands() {
  const terminalRadio = document.getElementById('terminal');
  const fileManRadio = document.getElementById('fileMan');
  const textManRadio = document.getElementById('textMan');

  const terminalContent = document.getElementById('content_first');
  const fileManContent = document.getElementById('content_second');
  const textManContent = document.getElementById('content_third');

  fileManContent.style.display = 'none';
  textManContent.style.display = 'none';

  terminalRadio.addEventListener('change', () => {
  terminalContent.style.display = terminalRadio.checked ? 'block' : 'none';
  fileManContent.style.display = fileManRadio.checked ? 'block' : 'none';
  textManContent.style.display = textManRadio.checked ? 'block' : 'none';
  toggleLabelStyles();
  });

  fileManRadio.addEventListener('change', () => {
  terminalContent.style.display = terminalRadio.checked ? 'block' : 'none';
  fileManContent.style.display = fileManRadio.checked ? 'block' : 'none';
  textManContent.style.display = textManRadio.checked ? 'block' : 'none';
  toggleLabelStyles();
  });

  textManRadio.addEventListener('change', () => {
    terminalContent.style.display = terminalRadio.checked ? 'block' : 'none';
    fileManContent.style.display = fileManRadio.checked ? 'block' : 'none';
    textManContent.style.display = textManRadio.checked ? 'block' : 'none';
    toggleLabelStyles();
  });

  toggleLabelStyles();

  // if (beginnerRadio.checked) {
  //   toggleLabelStyles(); // Apply styles to labels if Beginner radio button is initially checked
  // }

}

// function for change page on page...
function changeForTutorials() {
  const beginnerRadio = document.getElementById('beginner');
  const advancedRadio = document.getElementById('advanced');

  const beginnerContent = document.getElementById('beginner_content');
  const advancedContent = document.getElementById('advanced_content');

  advancedContent.style.display = 'none';


  beginnerRadio.addEventListener('change', () => {
    beginnerContent.style.display = beginnerRadio.checked ? 'block' : 'none';
    advancedContent.style.display = advancedRadio.checked ? 'block' : 'none';
    toggleLabelStyles();
    });

  advancedRadio.addEventListener('change', () => {
    beginnerContent.style.display = beginnerRadio.checked ? 'block' : 'none';
    advancedContent.style.display = advancedRadio.checked ? 'block' : 'none';
    toggleLabelStyles();
    });
  
  toggleLabelStyles();

  
}



function toggleLabelStyles() {
  labels.forEach(label => {
      if (label.querySelector('input').checked) {
          label.classList.add('checked');
      } 
      else {
          label.classList.remove('checked');
      }
  });
}

// function for quiz
// displays all the radio buttons you selected, and makes them red or green depending on if they are correct or not

function displayAnswer(){
  var question=document.getElementsByTagName('fieldset');
  var answer=document.getElementsByTagName('input');
  var count=0; //
  for(i = 0; i<answer.length; i++){
      if(answer[i].type == "radio"){
          if(answer[i].checked){
              var ans=answer[i].value.split("|");
              var div="result"+ans[2];
              document.getElementById(div).innerHTML="";
              if(ans[1]=="correct"){
                  question[ans[2] - 1].style.backgroundColor = "lightgreen"; // Set background color to green for correct answer
                  count++; //
              }else{
                  question[ans[2] - 1].style.backgroundColor = "lightcoral"; // Set background color to green for correct answer

              }
          }
      }
  }
  document.getElementById("result").innerHTML=(((count/10)*100)+"% correct! You can change your answers and resubmit or press the button below to make a new quiz.");
}


window.addEventListener('load', () => {
  const page = document.querySelector('main').id;
  if (page === 'commands') {
    changeForCommands();
  } else if (page === 'tutorials') {
      changeForTutorials();
  }
  // toggleLabelStyles();
});