$(document).ready(function(){
    $('body').scrollspy({target: ".navbar", offset: 50});
});
function openForm() {
    document.getElementById("muncul1").style.display = "block";
    document.getElementById("muncul2").style.display = "none";
}
function openTable() {
    document.getElementById("muncul1").style.display = "none";
    document.getElementById("muncul2").style.display = "block";
}