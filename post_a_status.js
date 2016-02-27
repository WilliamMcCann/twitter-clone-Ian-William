Definitely need to ensure page is loaded before everything, per spec (onload maybe?)
Use an event listener to hear button click

/*this function is triggered by the onLoad function at the bottom, and
contains all the other functions for the page*/
function setUpEvents(){

    /*adds event listeners to listen for the button clicks in the HTML*/
    function addListeners(){
        if(window.addEventListener) {
            document.getElementById('BUTTON ID');.addEventListener("click",BUTTON LISTENER FUNCTION NAME,false);
        }   else if (window.attachEvent) {
                document.getElementById('BUTTON LISTENER FUNCTION NAME').attachEvent("onclick", BUTTON LISTENER FUNCTION NAME);
        }
        function BUTTON LISTENER FUNCTION NAME(){
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

