window.onload = function () {
    var status = document.getElementById('buttonTriggersChange');
    console.log(status)
    status.addEventListener("click", function () {
        console.log("hello")
        document.getElementById('post_a_status').style.display = 'block';
    })
};







  //  status.onclick = function () {



















