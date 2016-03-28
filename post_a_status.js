window.onload = function () {
    var status = document.getElementById('buttonTriggersChange');
    status.addEventListener("click", function () {
        var form = document.getElementById('post_a_status');
        form.toggle();
       })
};