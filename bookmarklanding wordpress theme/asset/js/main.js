/* ================= CSS Tab =================*/ 

function cssTab(evt, contentName) {
  var i, tab_content, tab_links;
  tab_content = document.getElementsByClassName("tab_content");
  for (i = 0; i < tab_content.length; i++) {
    tab_content[i].style.display = "none";
  }
  tab_links = document.getElementsByClassName("tab_links");
  for (i = 0; i < tab_links.length; i++) {
    tab_links[i].className = tab_links[i].className.replace(" active_tab", "");
  }
  document.getElementById(contentName).style.display = "block";
  evt.currentTarget.className += " active_tab";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

/* ===================== Accordion ===================== */ 

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active_acc");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

/* ======================= Form Email Validation ======================= */

// Pick a DOM node with legacy browsers
const form  = document.getElementsByTagName('form')[0];
const email = document.getElementById('mail');

// How to reach the next sibling Element node in the DOM
// Not recommended because you can build an infinite loop instead use element.nextElementSibling
let error = email;
while ((error = error.nextSibling).nodeType != 1);


const emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

// Some browsers do not support the addEventListener method.
function addEvent(element, event, callback) {
  let previousEventCallBack = element["on"+event];
  element["on"+event] = function (e) {
    const output = callback(e);

    // Callback to returns `false` stops the callback chain and interrupts the execution of the event callback.
    if (output === false) return false;

    if (typeof previousEventCallBack === 'function') {
      output = previousEventCallBack(e);
      if(output === false) return false;
    }
  }
};

// Now we can rebuild our validation constraint
// Because we do not rely on CSS pseudo-class, we have to
// explicitly set the valid/invalid class on our email field
addEvent(window, "load", function () {
  // Here, we test if the field is empty (remember, the field is not required)
  // If it is not, we check if its content is a well-formed e-mail address.
  const test = email.value.length === 0 || emailRegExp.test(email.value);

  email.className = test ? "valid" : "invalid";
});

// This defines what happens when the user types in the field
addEvent(email, "input", function () {
  const test = email.value.length === 0 || emailRegExp.test(email.value);
  if (test) {
    email.className = "valid";
    error.textContent = "";
    error.className = "error";
  } else {
    email.className = "invalid";
  }
});

// This defines what happens when the user tries to submit the data
addEvent(form, "submit", function () {
  const test = email.value.length === 0 || emailRegExp.test(email.value);

  if (!test) {
    email.className = "invalid error_icon";
    error.textContent = "Whoops, make sure it's an email";
    error.className = "error active";

    // Some legacy browsers do not support the event.preventDefault() method
    return false;
  } else {
    email.className = "valid";
    error.textContent = "";
    error.className = "error";
  }
});

/* =============== Sticky Menu =============== */

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("sticky_nav");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

/* =============== Mobile Menu =============== */ 

function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}