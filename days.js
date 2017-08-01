// highlight current day on opeining hours
$(document).ready(function() {
$('.opening-hours li').eq(new Date().getDay()-1).addClass('today');

});
