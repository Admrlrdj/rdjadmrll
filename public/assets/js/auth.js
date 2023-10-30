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