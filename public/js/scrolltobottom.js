var elmnt = document.getElementById("about");
var elmnt2 = document.getElementById("skills");
var elmnt3 = document.getElementById("portfolio");
var elmnt4 = document.getElementById("contact");

function scrollToBottom() {
    if($(window).width() > 480){   
  elmnt.scrollIntoView(false);}
        
   else{
   elmnt.scrollIntoView(true);}}
                           
function scrollToBottom2() {
    if($(window).width() > 480){   
  elmnt2.scrollIntoView(false);}
        
   else{
   elmnt2.scrollIntoView(true);}}

function scrollToBottom3() {
    if($(window).width() > 480){   
  elmnt3.scrollIntoView(false);}
        
   else{
   elmnt3.scrollIntoView(true);}}

function scrollToBottom4() {
    if($(window).width() > 480){   
  elmnt4.scrollIntoView(false);}
        
   else{
   elmnt4.scrollIntoView(true);}}
