document.addEventListener("DOMContentLoaded", function(){
    var total = document.getElementsByClassName("buttonreply");
    for (i = 0; i < total.length; i++){
        total[i].addEventListener("click", function(){
         var buttons = document.getElementById(this.dataset.order);
                    buttons.style.display = "block";
    
        });
    }
});         
    
    
    
   