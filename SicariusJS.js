/*!
 * This is the custom JavaScript file for sicarius. Any adaptations of fullpage.js have been made here.
 */

/* DOWN ARROW FUNCTIONALITY ---------------------------------------------- */
/*$(document).on('click', '#arrow_wrapper', function(){
  $.fn.fullpage.moveSectionDown();
});*/

/* NEXT ARROW FUNCTIONALITY --------------------------------------------- */
$(document).on('click', '#next_arrow', function(){
  
  /* Play Anim */
  document.getElementsByTagName("UL")[1].className = "next_list";

  /* Change Out Links */
  setTimeout(function(){
    var link_list = document.getElementsByTagName("UL")[1];
    link_list.getElementsByTagName("LI")[0].innerHTML = "<a href=#Welcome/slide2>Games</a>";
    link_list.getElementsByTagName("LI")[1].innerHTML = "<a href=#Ethos/slide4>Tools</a>";
    link_list.getElementsByTagName("LI")[2].innerHTML = "<a href=#TheTeam/slide6>Approach</a>";
    link_list.getElementsByTagName("LI")[3].innerHTML = "<a href=#Services/slide8>Portfolio</a>";
    link_list.getElementsByTagName("LI")[4].innerHTML = "<a href=#Contact/slide8>Contact</a>";
  },500);

  setTimeout(function(){
    var mob_list = document.getElementsByTagName("UL")[0];
    mob_list.getElementsByTagName("LI")[0].innerHTML = "<a href=#Welcome/slide2>Games</a>";
    mob_list.getElementsByTagName("LI")[1].innerHTML = "<a href=#Ethos/slide4>Tools</a>";
    mob_list.getElementsByTagName("LI")[2].innerHTML = "<a href=#TheTeam/slide6>Approach</a>";
    mob_list.getElementsByTagName("LI")[3].innerHTML = "<a href=#Services/slide8>Portfolio</a>";
    mob_list.getElementsByTagName("LI")[4].innerHTML = "<a href=#Contact/slide8>Contact</a>";
  },500);

  /* Stop Anim */
  setTimeout(function (){
      document.getElementsByTagName("UL")[1].className = "pause_anim";
  }, 1900);
});

/* PREV ARROW FUNCTIONALITY --------------------------------------------- */
$(document).on('click', '#prev_arrow', function(){

  /* Play Anim() */
  document.getElementsByTagName("UL")[1].className = "next_list";

  /* Change Out Links */
  setTimeout(function(){
    var link_list = document.getElementsByTagName("UL")[1];
    link_list.getElementsByTagName("LI")[0].innerHTML = "<a href=#Welcome>Home</a>";
    link_list.getElementsByTagName("LI")[1].innerHTML = "<a href=#Ethos>Who We Are</a>";
    link_list.getElementsByTagName("LI")[2].innerHTML = "<a href=#TheTeam>The Team</a>";
    link_list.getElementsByTagName("LI")[3].innerHTML = "<a href=#Services>Services</a>";
    link_list.getElementsByTagName("LI")[4].innerHTML = "<a href=#Contact>Contact</a>";
  },500);

 setTimeout(function(){
    var mob_list = document.getElementsByTagName("UL")[0];
    mob_list.getElementsByTagName("LI")[0].innerHTML = "<a href=#Welcome>Home</a>";
    mob_list.getElementsByTagName("LI")[1].innerHTML = "<a href=#Ethos>Who We Are</a>";
    mob_list.getElementsByTagName("LI")[2].innerHTML = "<a href=#TheTeam>The Team</a>";
    mob_list.getElementsByTagName("LI")[3].innerHTML = "<a href=#Services>Services</a>";
    mob_list.getElementsByTagName("LI")[4].innerHTML = "<a href=#Contact>Contact</a>";
  },500);

  /* Stop Anim */
  setTimeout(function (){
    document.getElementsByTagName("UL")[1].className = "pause_anim";
  }, 1900);
});


/* CONTACT FORM STARTS HERE ---------------------------------------------- */

// Auto resize input
function resizeInput() {
    $(this).attr('size', $(this).val().length);
}

$('input[type="text"], input[type="email"]')
    // event handler
    .keyup(resizeInput)
    // resize on page load
    .each(resizeInput);


console.clear();
// Adapted from georgepapadakis.me/demo/expanding-textarea.html
(function(){
  
  var textareas = document.querySelectorAll('.expanding'),
      
      resize = function(t) {
        t.style.height = 'auto';
        t.style.overflow = 'hidden'; // Ensure scrollbar doesn't interfere with the true height of the text.
        t.style.height = (t.scrollHeight + t.offset ) + 'px';
        t.style.overflow = '';
      },
      
      attachResize = function(t) {
        if ( t ) {
          console.log('t.className',t.className);
          t.offset = !window.opera ? (t.offsetHeight - t.clientHeight) : (t.offsetHeight + parseInt(window.getComputedStyle(t, null).getPropertyValue('border-top-width')));

          resize(t);

          if ( t.addEventListener ) {
            t.addEventListener('input', function() { resize(t); });
            t.addEventListener('mouseup', function() { resize(t); }); // set height after user resize
          }

          t['attachEvent'] && t.attachEvent('onkeyup', function() { resize(t); });
        }
      };
  
  // IE7 support
  if ( !document.querySelectorAll ) {
  
    function getElementsByClass(searchClass,node,tag) {
      var classElements = new Array();
      node = node || document;
      tag = tag || '*';
      var els = node.getElementsByTagName(tag);
      var elsLen = els.length;
      var pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)");
      for (i = 0, j = 0; i < elsLen; i++) {
        if ( pattern.test(els[i].className) ) {
          classElements[j] = els[i];
          j++;
        }
      }
      return classElements;
    }
    
    textareas = getElementsByClass('expanding');
  }
  
  for (var i = 0; i < textareas.length; i++ ) {
    attachResize(textareas[i]);
  }
  
})();


/* TESTING PURPOSES --------------------------------------------------->>>>>
  document.getElementById("page_links").addClass('SlideOutAnim');
   document.getElementById("page_links").style.opacity = "0" 
   
   On Page Load 
   window.onload = function() {} 
   
   document.getElementsByTagName("page_links").innerHTML = "<ul <li><a href=#page1>Home</a></li><li><a href=#page2>Tools</a></li><li><a href=#page3>Approach</a></li><li><a href=#page4>Portfolio</a></li><li><a href=#page5>Contact</a></li>" 
>>>>>>>>> */


//On load JavaScript
window.onload = function(){ 
var emodal = document.getElementById('EllisModal');
var titles = document.getElementById('title_wrapper');
var ebtn = document.getElementById("EllisButton");
var span = document.getElementById("EllisClose");

ebtn.onclick = function() {
    emodal.style.display = "block";
    titles.style.display = "none";
    fullpage_api.setAllowScrolling(false);
}

span.onclick = function() {
    emodal.style.display = "none";
    fullpage_api.setAllowScrolling(true);
}

window.onclick = function(event) {
    if (event.target == emodal) {
        emodal.style.display = "none";
        fullpage_api.setAllowScrolling(true);
    }
}

//Kieran

var kmodal = document.getElementById('KieranModal');
var kbtn = document.getElementById("KieranButton");
var span = document.getElementById("KieranClose");

kbtn.onclick = function() {
    kmodal.style.display = "block";
    titles.style.display = "none";
    fullpage_api.setAllowScrolling(false);
}

span.onclick = function() {
    kmodal.style.display = "none";
    fullpage_api.setAllowScrolling(true);
}

window.onclick = function(event) {
    if (event.target == modal) {
        kmodal.style.display = "none";
        fullpage_api.setAllowScrolling(true);
    }
}

//Ryan

var rmodal = document.getElementById('RyanModal');
var rbtn = document.getElementById("RyanButton");
var span = document.getElementById("RyanClose");

rbtn.onclick = function() {
    rmodal.style.display = "block";
    titles.style.display = "none";
    fullpage_api.setAllowScrolling(false);
}

span.onclick = function() {
    rmodal.style.display = "none";
    fullpage_api.setAllowScrolling(true);
}

window.onclick = function(event) {
    if (event.target == modal) {
        rmodal.style.display = "none";
        fullpage_api.setAllowScrolling(true);
    }
}


//Matthew 

var modal = document.getElementById('MatthewModal');
var btn = document.getElementById("MatthewButton");
var span = document.getElementById("MatthewClose");

btn.onclick = function() {
    modal.style.display = "block";
    titles.style.display = "none";
    fullpage_api.setAllowScrolling(false);
}

span.onclick = function() {
    modal.style.display = "none";
    fullpage_api.setAllowScrolling(true);
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        fullpage_api.setAllowScrolling(true);
    }
}

//Mobile Modals
//Ellis 
var mobebtn = document.getElementById("mobEllisButton");

mobebtn.onclick = function() {
    emodal.style.display = "block";
    fullpage_api.setAllowScrolling(false);
}

window.onclick = function(event) {
    if (event.target == mobemodal) {
        emodal.style.display = "none";
        fullpage_api.setAllowScrolling(true);
    }
}

//Kieran
var mobkbtn = document.getElementById("mobKieranButton");

mobkbtn.onclick = function() {
    kmodal.style.display = "block";
    fullpage_api.setAllowScrolling(false);
}

window.onclick = function(event) {
    if (event.target == modal) {
        mobkmodal.style.display = "none";
        fullpage_api.setAllowScrolling(true);
    }
}

//Ryan
var mobrbtn = document.getElementById("mobRyanButton");


mobrbtn.onclick = function() {
    rmodal.style.display = "block";
    fullpage_api.setAllowScrolling(false);
}

window.onclick = function(event) {
    if (event.target == modal) {
        mobrmodal.style.display = "none";
        fullpage_api.setAllowScrolling(true);
    }
}

//Matthew 
var mobbtn = document.getElementById("mobMatthewButton");

mobbtn.onclick = function() {
    modal.style.display = "block";
    fullpage_api.setAllowScrolling(false);
}

window.onclick = function(event) {
    if (event.target == modal) {
        mobmodal.style.display = "none";
        fullpage_api.setAllowScrolling(true);
    }
}

}


