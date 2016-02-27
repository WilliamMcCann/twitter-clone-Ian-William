Definitely need to ensure page is loaded before everything, per spec (onload maybe?)
Use an event listener to hear button click

/*this function is triggered by the onLoad function at the bottom, and
contains all the other functions for the page*/
function setUpEvents(){

    /*adds event listeners to listen for the button clicks in the HTML*/
    function addListeners(){
        if(window.addEventListener) {
            document.getElementById('post_a_status');.addEventListener("click",revealForm,false);
        }   else if (window.attachEvent) {
                document.getElementById('revealForm').attachEvent("onclick", revealForm);
        }
        function revealForm(){
            var checkbox = document.getElementById("")
            FUNCTION THAT DOES THE THING YOU WANT TO DO;
        }
    };







}

/*this function triggers the function at the top and ensures
all of the JS loads after the HTML loads*/
window.onload = function(){
    
        setUpEvents();
    
};






var form = document.getElementById("IIIIDDDDD").style. NOOOTTTINVISIBLE

