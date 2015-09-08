
function date_rented(){
date = new Date();
var month = date.getMonth()+1;
var day = date.getDate();
var year = date.getFullYear();

if (document.getElementById('date').value == ''){
document.getElementById('date').value = month + '-' + day + '-' + year;
}
return document.getElementById('date_will_return').value = month + '-' + day + '-' + year;
}

function date_will_return(){
date = new Date();
var month = date.getMonth()+1;
var day = date.getDate();
var year = date.getFullYear();

if (document.getElementById('date_will_return').value == ''){
document.getElementById('date_will_return').value = month + '-' + day + '-' + year;
}

}
