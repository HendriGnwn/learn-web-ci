$(function(){
  $("#btn-login","#form-login").click(function(){
      bValid = true;
      var username = $("#username","#form-login").val()
      var password = $("#password","#form-login").val()

      if (username=='') {
          $("#username","#form-login").addClass('error-form');
          $("#alert-danger","#form-login").show()
          bValid = false;                
      } else{
          $("#username","#form-login").removeClass('error-form');    
          $("#alert-danger","#form-login").hide()
      }
      if (password=='') {
          $("#password","#form-login").addClass('error-form');
          $("#alert-danger","#form-login").show()
          bValid = false;                
      } else{
          $("#password","#form-login").removeClass('error-form');    
          $("#alert-danger","#form-login").hide()
      }

      if (bValid==true) {
          $("#form-login").trigger('submit');
          $("#form-login").trigger('reset');
      } else{
          alert("Username atau Password tidak boleh kosong !");
      }
  })
});