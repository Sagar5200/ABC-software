
// Carjam Search part

$.urlParam = function (name) {
var results = new RegExp('[\?&]' + name + '=([^&#]*)')
            .exec(window.location.search);

return (results !== null) ? results[1] || 0 : false;
}

function findplate(){
var platenumber = document.getElementById("platenumber").value;


var plate1 = $.urlParam('plate1')
window.location.href =  "https://localhost/abcapp/public/search?plate=" + platenumber + "&plate1=" + plate1;
}
function findplate1(){
var platenumber1 = document.getElementById("platenumber1").value;

var plate = $.urlParam('plate')
window.location.href = "https://localhost/abcapp/public/search?plate=" + plate + "&plate1=" + platenumber1 ;
}



// $(document).ready(function(){
//     document.getElementById("terms-popup").onclick = function () {
//             window.location.href = "purchaseOfferAgreement";
//     }
// });

// function openterm(){
//     document.getElementById("sub-purchase.termsbox").style.display = "block";
// }

// function close(){
//     document.getElementById("sub-purchase.termsbox").style.display = "none";
// }



// $(document).ready(function(){
// // pou-up box
// // Get the modal
// var modal = document.getElementById("termsbox");

// // Get the button that opens the modal
// var btn = document.getElementById("btn-popup");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks the button, open the modal 
// btn.onclick = function() {
//   modal.style.display = "block";
// }
// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }
// });