$.get('https://www.cloudflare.com/cdn-cgi/trace', function(data) {
  // Convert key-value pairs to JSON
  // https://stackoverflow.com/a/39284735/452587
  data = data.trim().split('\n').reduce(function(obj, pair) {
    pair = pair.split('=');
    return obj[pair[0]] = pair[1], obj;
  }, {});
  $("#clientIP").val(data.ip);
  $("#useClientIP").val(data.ip);
});
$("#clientIP").on('input', function(){
  $("#useClientIP").val($("#clientIP").val())
});
var currentValueEditIP = 0;
$("#editeIP").css('background-color', '#5865f2')
$("#editeIP").on('click', function(){
  if(currentValueEditIP == 0){
    $("#editeIP").css('background-color', '#fd2828ed')
    $("#clientIP").prop( "disabled", false );
    currentValueEditIP ++;
  }else {
    $("#clientIP").prop( "disabled", true );
    $("#editeIP").css('background-color', '#5865f2')
    currentValueEditIP = 0;
  }
});
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

// check file size
function SizeCheck() {
  var fileInput = document.getElementById('playerprofileimages').files;
  var fsize = fileInput[0].size;
  var file = Math.round((fsize / 1024));
  if (file >= 10240) {     //10MB
     //Add Alert Here If 
      $('#upload_error').html("Image size not allowed <i class='bi bi-exclamation'></i>");
      $("#btnsubmits").attr('disabled', true)
      $("#btnsubmits").css('background-color', '#fd2828ed');
      $("#upload_error").css('color', 'red')
  }
  else {
      $('#invoice_error').html("");
      $("#btnsubmits").attr('disabled', false)
      $("#btnsubmits").css('background-color', '#0062cc');
      $("#upload_error").css('color', '#0062cc')
      $('#upload_error').html("Image size supported <i class='bi bi-check-all'></i>");
      
  }
}
