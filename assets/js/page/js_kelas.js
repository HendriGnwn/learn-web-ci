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
      var kelas = $("#kelas",form1);
      var id_jurusan = $("#id_jurusan",form1);      
      var status = $("#status",form1);

      var bValid = true;
      
      if(kelas.val()==""){
        kelas.addClass('error-form');
        bValid = false;
      }else{
        kelas.removeClass('error-form');
      }    

      if(id_jurusan.val()==""){
        id_jurusan.addClass('error-form');
        bValid = false;
      }else{
        id_jurusan.removeClass('error-form');
      }  

      if(status.val()==""){
        status.addClass('error-form');
        bValid = false;
      }else{
        status.removeClass('error-form');
      }
      

      
      $("#kelas",form1).keyup(function(){
        kelas.removeClass('error-form');
      });  
      $("#id_jurusan",form1).keyup(function(){
        id_jurusan.removeClass('error-form');
      });    
      $("#status",form1).change(function(){
        status.removeClass('error-form');
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
      url: site_url+"administrasi/get_data_kelas_by_id",
      success: function(response)
      {
        $("#id_kelas",form2).val(response.id_kelas);
        $("#kelas",form2).val(response.kelas);
        $("#id_jurusan",form2).val(response.id_jurusan);        
        $("#status",form2).val(response.status);
      }
    });
    $("#edit").show();
  });  

  $("#btn-simpan",form2).click(function(e)
  {
      
      var kelas = $("#kelas",form2);
      var id_jurusan = $("#id_jurusan",form2);      
      var status = $("#status",form2);

      var bValid = true;

      
      if(kelas.val()==""){
        kelas.addClass('error-form');
        bValid = false;
      }else{
        kelas.removeClass('error-form');
      }
      if(id_jurusan.val()==""){
        id_jurusan.addClass('error-form');
        bValid = false;
      }else{
        id_jurusan.removeClass('error-form');
      }
      if(status.val()==""){
        status.addClass('error-form');
        bValid = false;
      }else{
        status.removeClass('error-form');
      }
      
      
      $("#kelas",form2).keyup(function(){
        kelas.removeClass('error-form');
      });
      $("#id_jurusan",form2).keyup(function(){
        id_jurusan.removeClass('error-form');
      });
      $("#status",form2).change(function(){
        status.removeClass('error-form');
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
        url: site_url+"administrasi/hapus_kelas",
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