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
      var nama_eskul = $("#nama_eskul",form1);
      var deskripsi = $("#deskripsi",form1);
      var hari_eskul = $("#hari_eskul",form1);      
      var waktu_mulai = $("#waktu_mulai",form1);
      var waktu_selesai = $("#waktu_selesai",form1);                                          
      var status = $("#status",form1);

      var bValid = true;
      
      if(nama_eskul.val()==""){
        nama_eskul.addClass('error-form');
        bValid = false;
      }else{
        nama_eskul.removeClass('error-form');
      } 

      if(deskripsi.val()==""){
        deskripsi.addClass('error-form');
        bValid = false;
      }else{
        deskripsi.removeClass('error-form');
      }  

      if(hari_eskul.val()==""){
        hari_eskul.addClass('error-form');
        bValid = false;
      }else{
        hari_eskul.removeClass('error-form');
      }

      if(waktu_mulai.val()==""){
        waktu_mulai.addClass('error-form');
        bValid = false;
      }else{
        waktu_mulai.removeClass('error-form');
      }

      if(waktu_selesai.val()==""){
        waktu_selesai.addClass('error-form');
        bValid = false;
      }else{
        waktu_selesai.removeClass('error-form');
      }

      if(status.val()==""){
        status.addClass('error-form');
        bValid = false;
      }else{
        status.removeClass('error-form');
      }
      

      
      $("#nama_eskul",form1).keyup(function(){
        nama_eskul.removeClass('error-form');
      });   
      $("#deskripsi",form1).keyup(function(){
        deskripsi.removeClass('error-form');
      }); 
      $("#hari_eskul",form1).keyup(function(){
        hari_eskul.removeClass('error-form');
      });
      $("#waktu_mulai",form1).keyup(function(){
        waktu_mulai.removeClass('error-form');
      });
      $("#waktu_selesai",form1).keyup(function(){
        waktu_selesai.removeClass('error-form');
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
      url: site_url+"administrasi/get_data_ekstrakulikuler_by_id",
      success: function(response)
      {
        $("#id_eskul",form2).val(response.id_eskul);
        $("#nama_eskul",form2).val(response.nama_eskul);
        $("#deskripsi",form2).val(response.deskripsi);
        $("#hari_eskul",form2).val(response.hari_eskul);                      
        $("#waktu_mulai",form2).val(response.waktu_mulai);                      
        $("#waktu_selesai",form2).val(response.waktu_selesai);                      
        $("#status",form2).val(response.status);
      }
    });
    $("#edit").show();
  });  

  $("#btn-simpan",form2).click(function(e)
  {
      
      var nama_eskul = $("#nama_eskul",form2);
      var deskripsi = $("#deskripsi",form2);
      var hari_eskul = $("#hari_eskul",form2);      
      var waktu_mulai = $("#waktu_mulai",form2);      
      var waktu_selesai = $("#waktu_selesai",form2);                  
      var status = $("#status",form2);

      var bValid = true;

      
      if(nama_eskul.val()==""){
        nama_eskul.addClass('error-form');
        bValid = false;
      }else{
        nama_eskul.removeClass('error-form');
      }
      if(deskripsi.val()==""){
        deskripsi.addClass('error-form');
        bValid = false;
      }else{
        deskripsi.removeClass('error-form');
      }
      if(hari_eskul.val()==""){
        hari_eskul.addClass('error-form');
        bValid = false;
      }else{
        hari_eskul.removeClass('error-form');
      }
      if(waktu_mulai.val()==""){
        waktu_mulai.addClass('error-form');
        bValid = false;
      }else{
        waktu_mulai.removeClass('error-form');
      }
      if(waktu_selesai.val()==""){
        waktu_selesai.addClass('error-form');
        bValid = false;
      }else{
        waktu_selesai.removeClass('error-form');
      }
      if(status.val()==""){
        status.addClass('error-form');
        bValid = false;
      }else{
        status.removeClass('error-form');
      }
      
      
      $("#nama_eskul",form2).keyup(function(){
        nama_eskul.removeClass('error-form');
      });
      $("#deskripsi",form2).keyup(function(){
        deskripsi.removeClass('error-form');
      });
      $("#hari_eskul",form2).keyup(function(){
        hari_eskul.removeClass('error-form');
      });
      $("#waktu_mulai",form2).keyup(function(){
        waktu_mulai.removeClass('error-form');
      });
      $("#waktu_selesai",form2).keyup(function(){
        waktu_selesai.removeClass('error-form');
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
        url: site_url+"administrasi/hapus_ekstrakulikuler",
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