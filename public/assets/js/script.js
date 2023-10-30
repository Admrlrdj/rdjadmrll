//! Datatable
$(function () {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});

//* Fade Out Alert
function closeAlert() {
    $('.alert').fadeOut('slow');
}

function setupAlertTimer() {
    setTimeout(closeAlert, 2000);
}
$(document).ready(function () {
    setupAlertTimer();
});




//! Clock
window.onload = function () {
    startTime();
}

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('jam').innerHTML = h + ':' + m + ':' + s;
    var t = setTimeout(function () {
        startTime();
    }, 1);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i
    }
    return i;
}