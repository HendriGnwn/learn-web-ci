$(document).ready(function () {

  var dTreload = function(){
    location.reload();
  }

  var form1 = $('#form-add');
  $("a#btn-tambah").click(function(){
    form1.trigger('reset');
    $("#read").hide();
    $("#add").show();
  });  

  $("#btn-simpan",form1).click(function(e)
  {
      var username = $("#username",form1);
      var password = $("#password",form1);
      var nama_lengkap = $("#nama_lengkap",form1);
      var status = $("#status",form1);
      var level = $("#level",form1);

      var bValid = true;

      if(username.val()==""){
        username.addClass('error-form');
        bValid = false;
      }else{
        username.removeClass('error-form');
      }
      if(password.val()==""){
        password.addClass('error-form');
        bValid = false;
      }else{
        password.removeClass('error-form');
      }
      if(nama_lengkap.val()==""){
        nama_lengkap.addClass('error-form');
        bValid = false;
      }else{
        nama_lengkap.removeClass('error-form');
      }
      if(status.val()==""){
        status.addClass('error-form');
        bValid = false;
      }else{
        status.removeClass('error-form');
      }
      if(level.val()==""){
        level.addClass('error-form');
        bValid = false;
      }else{
        level.removeClass('error-form');
      }

      $("#username",form1).keyup(function(){
        username.removeClass('error-form');
      });
      $("#password",form1).keyup(function(){
        password.removeClass('error-form');
      });
      $("#nama_lengkap",form1).keyup(function(){
        nama_lengkap.removeClass('error-form');
      });
      $("#status",form1).change(function(){
        status.removeClass('error-form');
      });
      $("#level",form1).change(function(){
        level.removeClass('error-form');
      });

      if(bValid==true){ 
        form1.ajaxForm({
        data: form1.serialize(),
          dataType: "json",
          success: function(response){
            if(response.success==true){
              alert("Data berhasil disimpan");
              form1.trigger('reset');
              $("#btn-batal",form1).trigger('click');
            }else{
              alert("Data gagal disimpan");
            }
            e.preventDefault();
          },
          error:function(){
            alert("Failed to Connect into Databases, Please Contact Your Administration !");
            e.preventDefault();
          }
        }); 
      }else{
        alert("Mohon lengkapi form !")
        e.preventDefault();
      }
  });

  $("#btn-batal",form1).click(function(){
    form1.trigger('reset');
    $("#add").hide();
    $("#read").show();
    dTreload();
  });
  //END DIALOG ADD

  // DIALOG EDIT
  var form2 = $('#form-edit');
  $("a#btn-edit").click(function(){
    id_edit = $(this).attr('id_edit');
    $("#read").hide();
    $.ajax({
      type: "POST",
      async:false,
      dataType: "json",
      data: {id:id_edit},
      url: site_url+"sistem/get_data_pengguna_by_id",
      success: function(response)
      {
        $("#id_user",form2).val(response.id_user);
        $("#username",form2).val(response.username);
        $("#nama_lengkap",form2).val(response.nama_lengkap);
        $("#status",form2).val(response.status);
        $("#level",form2).val(response.level);
      }
    });
    $("#edit").show();
  });  

  $("#btn-simpan",form2).click(function(e)
  {
      
      var username = $("#username",form2);
      var nama_lengkap = $("#nama_lengkap",form2);
      var status = $("#status",form2);
      var level = $("#level",form2);

      var bValid = true;

      if(username.val()==""){
        username.addClass('error-form');
        bValid = false;
      }else{
        username.removeClass('error-form');
      }
      if(nama_lengkap.val()==""){
        nama_lengkap.addClass('error-form');
        bValid = false;
      }else{
        nama_lengkap.removeClass('error-form');
      }
      if(status.val()==""){
        status.addClass('error-form');
        bValid = false;
      }else{
        status.removeClass('error-form');
      }
      if(level.val()==""){
        level.addClass('error-form');
        bValid = false;
      }else{
        level.removeClass('error-form');
      }

      $("#username",form2).keyup(function(){
        username.removeClass('error-form');
      });
      $("#password",form2).keyup(function(){
        password.removeClass('error-form');
      });
      $("#nama_lengkap",form2).keyup(function(){
        nama_lengkap.removeClass('error-form');
      });
      $("#status",form2).change(function(){
        status.removeClass('error-form');
      });
      $("#level",form2).change(function(){
        level.removeClass('error-form');
      });

      if(bValid==true){ 
        form2.ajaxForm({
        data: form2.serialize(),
          dataType: "json",
          success: function(response){
            if(response.success==true){
              alert("Data berhasil disimpan");
              form2.trigger('reset');
              $("#btn-batal",form2).trigger('click');
            }else{
              alert("Data gagal disimpan");
            }
            e.preventDefault();
          },
          error:function(){
            alert("Failed to Connect into Databases, Please Contact Your Administration!");
            e.preventDefault();
          }
        }); 
      }else{
        alert("Mohon lengkapi form !")
        e.preventDefault();
      }
  });

  $("#btn-batal",form2).click(function(){
    form2.trigger('reset');
    $("#edit").hide();
    $("#read").show();
    dTreload();
  });
  //END DIALOG EDIT

  // DELETE
  $("a#btn-delete").click(function(){
    id_delete = $(this).attr('id_delete');
    var conf = confirm('Apakah Anda yakin ingin menghapus data ini ?');
    if(conf){
      $.ajax({
        type: "POST",
        url: site_url+"sistem/hapus_pengguna",
        dataType: "json",
        data: {id:id_delete},
        success: function(response){
          if(response.success==true){
            alert("Data berhasil dihapus !");
            dTreload();
          }else{
            alert("Data gagal dihapus !");
          }
        },
        error: function(){
          alert("Failed to Connect into Databases, Please Contact Your Administration!")
        }
      });
    }
  });
  // DELETE

});