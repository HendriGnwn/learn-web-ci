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
      var nisn = $("#nisn",form1);
      var nis = $("#nis",form1);      
      var nama_lengkap = $("#nama_lengkap",form1);
      var foto = $("#foto",form1);      
      var tpt_lahir = $("#tpt_lahir",form1);
      var tgl_lahir = $("#tgl_lahir",form1);
      var jenis_kelamin = $("#jenis_kelamin",form1);
      var agama = $("#agama",form1);
      var alamat = $("#alamat",form1);
      var no_hp = $("#no_hp",form1);
      var kelas = $("#kelas",form1);
      var jurusan = $("#jurusan",form1);
      var eskul = $("#eskul",form1); 
      var semester = $("#semester",form1);                 
      var tgl_masuk = $("#tgl_masuk",form1);
      var status_dlm_keluarga = $("#status_dlm_keluarga",form1);
      var anak_ke = $("#anak_ke",form1);
      var jlh_saudara = $("#jlh_saudara",form1);
      var pendidikan_sebelumnya = $("#pendidikan_sebelumnya",form1);
      var nama_ayah = $("#nama_ayah",form1);
      var nama_ibu = $("#nama_ibu",form1);      
      var alamat_ortu = $("#alamat_ortu",form1);
      var pekerjaan_ayah = $("#pekerjaan_ayah",form1);
      var pekerjaan_ibu = $("#pekerjaan_ibu",form1);
      var penghasilan_ayah = $("#penghasilan_ayah",form1);
      var penghasilan_ibu = $("#penghasilan_ibu",form1);
      var telp_ortu = $("#telp_ortu",form1);
      var nama_wali = $("#nama_wali",form1);
      var alamat_wali = $("#alamat_wali",form1);
      var telp_wali = $("#telp_wali",form1);
      var pekerjaan_wali = $("#pekerjaan_wali",form1);
      var status_siswa = $("#status_siswa",form1);
      var status = $("#status",form1);

      var bValid = true;

      if(nisn.val()==""){
        nisn.addClass('error-form');
        bValid = false;
      }else{
        nisn.removeClass('error-form');
      }

      if(nis.val()==""){
        nis.addClass('error-form');
        bValid = false;
      }else{
        nis.removeClass('error-form');
      }

      if(nama_lengkap.val()==""){
        nama_lengkap.addClass('error-form');
        bValid = false;
      }else{
        nama_lengkap.removeClass('error-form');
      }

       if(foto.val()==""){
        foto.addClass('error-form');
        bValid = false;
      }else{
        foto.removeClass('error-form');
      } 

      if(tpt_lahir.val()==""){
        tpt_lahir.addClass('error-form');
        bValid = false;
      }else{
        tpt_lahir.removeClass('error-form');
      }  

      if(tgl_lahir.val()==""){
        tgl_lahir.addClass('error-form');
        bValid = false;
      }else{
        tgl_lahir.removeClass('error-form');
      } 

      if(jenis_kelamin.val()==""){
        jenis_kelamin.addClass('error-form');
        bValid = false;
      }else{
        jenis_kelamin.removeClass('error-form');
      } 

      if(agama.val()==""){
        agama.addClass('error-form');
        bValid = false;
      }else{
        agama.removeClass('error-form');
      } 

      if(alamat.val()==""){
        alamat.addClass('error-form');
        bValid = false;
      }else{
        alamat.removeClass('error-form');
      } 


      if(no_hp.val()==""){
        no_hp.addClass('error-form');
        bValid = false;
      }else{
        no_hp.removeClass('error-form');
      } 


      if(kelas.val()==""){
        kelas.addClass('error-form');
        bValid = false;
      }else{
        kelas.removeClass('error-form');
      } 

      if(jurusan.val()==""){
        jurusan.addClass('error-form');
        bValid = false;
      }else{
        jurusan.removeClass('error-form');
      } 

      if(eskul.val()==""){
        eskul.addClass('error-form');
        bValid = false;
      }else{
        eskul.removeClass('error-form');
      } 

      if(semester.val()==""){
        semester.addClass('error-form');
        bValid = false;
      }else{
        semester.removeClass('error-form');
      } 

      if(tgl_masuk.val()==""){
        tgl_masuk.addClass('error-form');
        bValid = false;
      }else{
        tgl_masuk.removeClass('error-form');
      } 


      if(status_dlm_keluarga.val()==""){
        status_dlm_keluarga.addClass('error-form');
        bValid = false;
      }else{
        status_dlm_keluarga.removeClass('error-form');
      } 

      if(anak_ke.val()==""){
        anak_ke.addClass('error-form');
        bValid = false;
      }else{
        anak_ke.removeClass('error-form');
      } 

      if(jlh_saudara.val()==""){
        jlh_saudara.addClass('error-form');
        bValid = false;
      }else{
        jlh_saudara.removeClass('error-form');
      } 

      if(pendidikan_sebelumnya.val()==""){
        pendidikan_sebelumnya.addClass('error-form');
        bValid = false;
      }else{
        pendidikan_sebelumnya.removeClass('error-form');
      } 


      if(nama_ayah.val()==""){
        nama_ayah.addClass('error-form');
        bValid = false;
      }else{
        nama_ayah.removeClass('error-form');
      }

      if(nama_ibu.val()==""){
        nama_ibu.addClass('error-form');
        bValid = false;
      }else{
        nama_ibu.removeClass('error-form');
      }

      if(alamat_ortu.val()==""){
        alamat_ortu.addClass('error-form');
        bValid = false;
      }else{
        alamat_ortu.removeClass('error-form');
      }

      if(pekerjaan_ayah.val()==""){
        pekerjaan_ayah.addClass('error-form');
        bValid = false;
      }else{
        pekerjaan_ayah.removeClass('error-form');
      }

      if(pekerjaan_ibu.val()==""){
        pekerjaan_ibu.addClass('error-form');
        bValid = false;
      }else{
        pekerjaan_ibu.removeClass('error-form');
      }

      if(penghasilan_ayah.val()==""){
        penghasilan_ayah.addClass('error-form');
        bValid = false;
      }else{
        penghasilan_ayah.removeClass('error-form');
      }

      if(penghasilan_ibu.val()==""){
        penghasilan_ibu.addClass('error-form');
        bValid = false;
      }else{
        penghasilan_ibu.removeClass('error-form');
      }

      if(telp_ortu.val()==""){
        telp_ortu.addClass('error-form');
        bValid = false;
      }else{
        telp_ortu.removeClass('error-form');
      }

      if(nama_wali.val()==""){
        nama_wali.addClass('error-form');
        bValid = false;
      }else{
        nama_wali.removeClass('error-form');
      }

      if(alamat_wali.val()==""){
        alamat_wali.addClass('error-form');
        bValid = false;
      }else{
        alamat_wali.removeClass('error-form');
      }

      if(telp_wali.val()==""){
        telp_wali.addClass('error-form');
        bValid = false;
      }else{
        telp_wali.removeClass('error-form');
      }

      if(pekerjaan_wali.val()==""){
        pekerjaan_wali.addClass('error-form');
        bValid = false;
      }else{
        pekerjaan_wali.removeClass('error-form');
      }


      if(status_siswa.val()==""){
        status_siswa.addClass('error-form');
        bValid = false;
      }else{
        status_siswa.removeClass('error-form');
      } 


      if(status.val()==""){
        status.addClass('error-form');
        bValid = false;
      }else{
        status.removeClass('error-form');
      }



      
      $("#nisn",form1).keyup(function(){
        nisn.removeClass('error-form');
      });
      $("#nis",form1).keyup(function(){
        nis.removeClass('error-form');
      });
      $("#nama_lengkap",form1).keyup(function(){
        nama_lengkap.removeClass('error-form');
      });
      $("#foto",form1).change(function(){
        foto.removeClass('error-form');
      });
      $("#tpt_lahir",form1).change(function(){
        tpt_lahir.removeClass('error-form');
      });
      $("#tgl_lahir",form1).change(function(){
        tgl_lahir.removeClass('error-form');
      });
      $("#jenis_kelamin",form1).keyup(function(){
        jenis_kelamin.removeClass('error-form');
      });      
      $("#agama",form1).keyup(function(){
        agama.removeClass('error-form');
      });
      $("#alamat",form1).change(function(){
        alamat.removeClass('error-form');
      });
      $("#no_hp",form1).change(function(){
        no_hp.removeClass('error-form');
      });
      $("#kelas",form1).keyup(function(){
        kelas.removeClass('error-form');
      });
      $("#jurusan",form1).keyup(function(){
        jurusan.removeClass('error-form');
      });
      $("#eskul",form1).keyup(function(){
        eskul.removeClass('error-form');
      });
      $("#tgl_masuk",form1).keyup(function(){
        tgl_masuk.removeClass('error-form');
      });
      $("#status_dlm_keluarga",form1).keyup(function(){
        status_dlm_keluarga.removeClass('error-form');
      });
      $("#anak_ke",form1).change(function(){
        anak_ke.removeClass('error-form');
      });
      $("#jlh_saudara",form1).change(function(){
        jlh_saudara.removeClass('error-form');
      });
      $("#pendidikan_sebelumnya",form1).keyup(function(){
        pendidikan_sebelumnya.removeClass('error-form');
      });
      $("#nama_ayah",form1).keyup(function(){
        nama_ayah.removeClass('error-form');
      });
      $("#nama_ibu",form1).keyup(function(){
        nama_ibu.removeClass('error-form');
      });
      $("#alamat_ortu",form1).change(function(){
        alamat_ortu.removeClass('error-form');
      });
      $("#pekerjaan_ayah",form1).change(function(){
        pekerjaan_ayah.removeClass('error-form');
      });
      $("#pekerjaan_ibu",form1).change(function(){
        pekerjaan_ibu.removeClass('error-form');
      });
      $("#penghasilan_ayah",form1).change(function(){
        penghasilan_ayah.removeClass('error-form');
      });
      $("#penghasilan_ibu",form1).change(function(){
        penghasilan_ibu.removeClass('error-form');
      });
      $("#telp_ortu",form1).change(function(){
        telp_ortu.removeClass('error-form');
      });
      $("#nama_wali",form1).keyup(function(){
        nama_wali.removeClass('error-form');
      });
      $("#alamat_wali",form1).change(function(){
        alamat_wali.removeClass('error-form');
      });
      $("#telp_wali",form1).change(function(){
        telp_wali.removeClass('error-form');
      });
      $("#pekerjaan_wali",form1).change(function(){
        pekerjaan_wali.removeClass('error-form');
      });
      $("#status_siswa",form1).change(function(){
        status_siswa.removeClass('error-form');
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
      url: site_url+"administrasi/get_data_siswa_by_id",
      success: function(response)
      {
        $("#id_siswa",form2).val(response.id_siswa);
        $("#nisn",form2).val(response.nisn);
        $("#nis",form2).val(response.nis);        
        $("#nama_lengkap",form2).val(response.nama_lengkap);
        $("#img_view",form2).html('<img src="'+base_url+'assets/img/siswa/'+response.foto+'" width="100" style="border:solid 1px #ccc;padding:5px;">');
        $("#foto",form2).val(response.foto);
        $("#tpt_lahir",form2).val(response.tpt_lahir);
        var thn = response.tgl_lahir.substring(0,4);
        var bln = response.tgl_lahir.substring(7,5);
        var tgl = response.tgl_lahir.substring(10,8);
        var tgl_lahir = tgl+'/'+bln+'/'+thn;
        $("#tgl_lahir",form2).val(tgl_lahir);
        $("#jenis_kelamin",form2).val(response.jenis_kelamin);
        $("#agama",form2).val(response.agama);
        $("#alamat",form2).val(response.alamat);
        $("#no_hp",form2).val(response.no_hp);
        $("#kelas",form2).val(response.kelas);
        $("#jurusan",form2).val(response.jurusan);
        $("#eskul",form2).val(response.eskul);        
        $("#semester",form2).val(response.semester);
        var thn1 = response.tgl_masuk.substring(0,4);
        var bln1 = response.tgl_masuk.substring(7,5);
        var tgl1 = response.tgl_masuk.substring(10,8);
        var tgl_masuk = tgl1+'/'+bln1+'/'+thn1;        
        $("#tgl_masuk",form2).val(tgl_masuk);
        $("#status_dlm_keluarga",form2).val(response.status_dlm_keluarga);
        $("#anak_ke",form2).val(response.anak_ke);
        $("#jlh_saudara",form2).val(response.jlh_saudara);
        $("#pendidikan_sebelumnya",form2).val(response.pendidikan_sebelumnya);
        $("#nama_ayah",form2).val(response.nama_ayah);
        $("#nama_ibu",form2).val(response.nama_ibu);
        $("#alamat_ortu",form2).val(response.alamat_ortu);
        $("#pekerjaan_ayah",form2).val(response.pekerjaan_ayah);
        $("#pekerjaan_ibu",form2).val(response.pekerjaan_ibu);
        $("#penghasilan_ayah",form2).val(response.penghasilan_ayah);
        $("#penghasilan_ibu",form2).val(response.penghasilan_ibu);
        $("#telp_ortu",form2).val(response.telp_ortu);
        $("#nama_wali",form2).val(response.nama_wali);
        $("#alamat_wali",form2).val(response.alamat_wali);
        $("#telp_wali",form2).val(response.telp_wali);
        $("#pekerjaan_wali",form2).val(response.pekerjaan_wali);
        $("#status_siswa",form2).val(response.status_siswa);       
        $("#status",form2).val(response.status);                      
      }
    });
    $("#edit").show();
  });  

  $("#btn-simpan",form2).click(function(e)
  {
      
      var nisn = $("#nisn",form2);
      var nis = $("#nis",form2);      
      var nama_lengkap = $("#nama_lengkap",form2);
      var foto = $("#foto",form2);      
      var tpt_lahir = $("#tpt_lahir",form2);
      var tgl_lahir = $("#tgl_lahir",form2);
      var jenis_kelamin = $("#jenis_kelamin",form2);
      var agama = $("#agama",form2);
      var alamat = $("#alamat",form2);
      var no_hp = $("#no_hp",form2);
      var kelas = $("#kelas",form2);
      var jurusan = $("#jurusan",form2); 
      var eskul = $("#eskul",form2);       
      var semester = $("#semester",form2);                 
      var tgl_masuk = $("#tgl_masuk",form2);
      var status_dlm_keluarga = $("#status_dlm_keluarga",form2);
      var anak_ke = $("#anak_ke",form2);
      var jlh_saudara = $("#jlh_saudara",form2);
      var pendidikan_sebelumnya = $("#pendidikan_sebelumnya",form2);
      var nama_ayah = $("#nama_ayah",form2);
      var nama_ibu = $("#nama_ibu",form2);      
      var alamat_ortu = $("#alamat_ortu",form2);
      var pekerjaan_ayah = $("#pekerjaan_ayah",form2);
      var pekerjaan_ibu = $("#pekerjaan_ibu",form2);
      var penghasilan_ayah = $("#penghasilan_ayah",form2);
      var penghasilan_ibu = $("#penghasilan_ibu",form2);
      var telp_ortu = $("#telp_ortu",form2);
      var nama_wali = $("#nama_wali",form2);
      var alamat_wali = $("#alamat_wali",form2);
      var telp_wali = $("#telp_wali",form2);
      var pekerjaan_wali = $("#pekerjaan_wali",form2);
      var status_siswa = $("#status_siswa",form2);
      var status = $("#status",form2);


      var bValid = true;

      if(nisn.val()==""){
        nisn.addClass('error-form');
        bValid = false;
      }else{
        nisn.removeClass('error-form');
      }

      if(nis.val()==""){
        nis.addClass('error-form');
        bValid = false;
      }else{
        nis.removeClass('error-form');
      }

      if(nama_lengkap.val()==""){
        nama_lengkap.addClass('error-form');
        bValid = false;
      }else{
        nama_lengkap.removeClass('error-form');
      }

       if(foto.val()==""){
        foto.addClass('error-form');
        bValid = false;
      }else{
        foto.removeClass('error-form');
      } 

      if(tpt_lahir.val()==""){
        tpt_lahir.addClass('error-form');
        bValid = false;
      }else{
        tpt_lahir.removeClass('error-form');
      }  

      if(tgl_lahir.val()==""){
        tgl_lahir.addClass('error-form');
        bValid = false;
      }else{
        tgl_lahir.removeClass('error-form');
      } 

      if(jenis_kelamin.val()==""){
        jenis_kelamin.addClass('error-form');
        bValid = false;
      }else{
        jenis_kelamin.removeClass('error-form');
      } 

      if(agama.val()==""){
        agama.addClass('error-form');
        bValid = false;
      }else{
        agama.removeClass('error-form');
      } 

      if(alamat.val()==""){
        alamat.addClass('error-form');
        bValid = false;
      }else{
        alamat.removeClass('error-form');
      } 


      if(no_hp.val()==""){
        no_hp.addClass('error-form');
        bValid = false;
      }else{
        no_hp.removeClass('error-form');
      } 


      if(kelas.val()==""){
        kelas.addClass('error-form');
        bValid = false;
      }else{
        kelas.removeClass('error-form');
      } 

      if(jurusan.val()==""){
        jurusan.addClass('error-form');
        bValid = false;
      }else{
        jurusan.removeClass('error-form');
      } 

      if(eskul.val()==""){
        eskul.addClass('error-form');
        bValid = false;
      }else{
        eskul.removeClass('error-form');
      }

      if(semester.val()==""){
        semester.addClass('error-form');
        bValid = false;
      }else{
        semester.removeClass('error-form');
      } 

      if(tgl_masuk.val()==""){
        tgl_masuk.addClass('error-form');
        bValid = false;
      }else{
        tgl_masuk.removeClass('error-form');
      } 


      if(status_dlm_keluarga.val()==""){
        status_dlm_keluarga.addClass('error-form');
        bValid = false;
      }else{
        status_dlm_keluarga.removeClass('error-form');
      } 

      if(anak_ke.val()==""){
        anak_ke.addClass('error-form');
        bValid = false;
      }else{
        anak_ke.removeClass('error-form');
      } 

      if(jlh_saudara.val()==""){
        jlh_saudara.addClass('error-form');
        bValid = false;
      }else{
        jlh_saudara.removeClass('error-form');
      } 

      if(pendidikan_sebelumnya.val()==""){
        pendidikan_sebelumnya.addClass('error-form');
        bValid = false;
      }else{
        pendidikan_sebelumnya.removeClass('error-form');
      } 


      if(nama_ayah.val()==""){
        nama_ayah.addClass('error-form');
        bValid = false;
      }else{
        nama_ayah.removeClass('error-form');
      }

      if(nama_ibu.val()==""){
        nama_ibu.addClass('error-form');
        bValid = false;
      }else{
        nama_ibu.removeClass('error-form');
      }

      if(alamat_ortu.val()==""){
        alamat_ortu.addClass('error-form');
        bValid = false;
      }else{
        alamat_ortu.removeClass('error-form');
      }

      if(pekerjaan_ayah.val()==""){
        pekerjaan_ayah.addClass('error-form');
        bValid = false;
      }else{
        pekerjaan_ayah.removeClass('error-form');
      }

      if(pekerjaan_ibu.val()==""){
        pekerjaan_ibu.addClass('error-form');
        bValid = false;
      }else{
        pekerjaan_ibu.removeClass('error-form');
      }

      if(penghasilan_ayah.val()==""){
        penghasilan_ayah.addClass('error-form');
        bValid = false;
      }else{
        penghasilan_ayah.removeClass('error-form');
      }

      if(penghasilan_ibu.val()==""){
        penghasilan_ibu.addClass('error-form');
        bValid = false;
      }else{
        penghasilan_ibu.removeClass('error-form');
      }

      if(telp_ortu.val()==""){
        telp_ortu.addClass('error-form');
        bValid = false;
      }else{
        telp_ortu.removeClass('error-form');
      }

      if(nama_wali.val()==""){
        nama_wali.addClass('error-form');
        bValid = false;
      }else{
        nama_wali.removeClass('error-form');
      }

      if(alamat_wali.val()==""){
        alamat_wali.addClass('error-form');
        bValid = false;
      }else{
        alamat_wali.removeClass('error-form');
      }

      if(telp_wali.val()==""){
        telp_wali.addClass('error-form');
        bValid = false;
      }else{
        telp_wali.removeClass('error-form');
      }

      if(pekerjaan_wali.val()==""){
        pekerjaan_wali.addClass('error-form');
        bValid = false;
      }else{
        pekerjaan_wali.removeClass('error-form');
      }


      if(status_siswa.val()==""){
        status_siswa.addClass('error-form');
        bValid = false;
      }else{
        status_siswa.removeClass('error-form');
      } 


      if(status.val()==""){
        status.addClass('error-form');
        bValid = false;
      }else{
        status.removeClass('error-form');
      }

      
      $("#nisn",form2).keyup(function(){
        nisn.removeClass('error-form');
      });
      $("#nis",form2).keyup(function(){
        nis.removeClass('error-form');
      });
      $("#nama_lengkap",form2).keyup(function(){
        nama_lengkap.removeClass('error-form');
      });
      $("#foto",form2).change(function(){
        foto.removeClass('error-form');
      });
      $("#tpt_lahir",form2).change(function(){
        tpt_lahir.removeClass('error-form');
      });
      $("#tgl_lahir",form2).change(function(){
        tgl_lahir.removeClass('error-form');
      });
      $("#jenis_kelamin",form2).keyup(function(){
        jenis_kelamin.removeClass('error-form');
      });      
      $("#agama",form2).keyup(function(){
        agama.removeClass('error-form');
      });
      $("#alamat",form2).change(function(){
        alamat.removeClass('error-form');
      });
      $("#no_hp",form2).change(function(){
        no_hp.removeClass('error-form');
      });
      $("#kelas",form2).keyup(function(){
        kelas.removeClass('error-form');
      });
      $("#jurusan",form2).keyup(function(){
        jurusan.removeClass('error-form');
      });
      $("#eskul",form2).keyup(function(){
        eskul.removeClass('error-form');
      });
      $("#tgl_masuk",form2).keyup(function(){
        tgl_masuk.removeClass('error-form');
      });
      $("#status_dlm_keluarga",form2).keyup(function(){
        status_dlm_keluarga.removeClass('error-form');
      });
      $("#anak_ke",form2).change(function(){
        anak_ke.removeClass('error-form');
      });
      $("#jlh_saudara",form2).change(function(){
        jlh_saudara.removeClass('error-form');
      });
      $("#pendidikan_sebelumnya",form2).keyup(function(){
        pendidikan_sebelumnya.removeClass('error-form');
      });
      $("#nama_ayah",form2).keyup(function(){
        nama_ayah.removeClass('error-form');
      });
      $("#nama_ibu",form2).keyup(function(){
        nama_ibu.removeClass('error-form');
      });
      $("#alamat_ortu",form2).change(function(){
        alamat_ortu.removeClass('error-form');
      });
      $("#pekerjaan_ayah",form2).change(function(){
        pekerjaan_ayah.removeClass('error-form');
      });
      $("#pekerjaan_ibu",form2).change(function(){
        pekerjaan_ibu.removeClass('error-form');
      });
      $("#penghasilan_ayah",form2).change(function(){
        penghasilan_ayah.removeClass('error-form');
      });
      $("#penghasilan_ibu",form2).change(function(){
        penghasilan_ibu.removeClass('error-form');
      });
      $("#telp_ortu",form2).change(function(){
        telp_ortu.removeClass('error-form');
      });
      $("#nama_wali",form2).keyup(function(){
        nama_wali.removeClass('error-form');
      });
      $("#alamat_wali",form2).change(function(){
        alamat_wali.removeClass('error-form');
      });
      $("#telp_wali",form2).change(function(){
        telp_wali.removeClass('error-form');
      });
      $("#pekerjaan_wali",form2).change(function(){
        pekerjaan_wali.removeClass('error-form');
      });
      $("#status_siswa",form2).change(function(){
        status_siswa.removeClass('error-form');
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
    foto = $(this).attr('foto');
    var conf = confirm('Apakah Anda yakin ingin menghapus data ini ?');
    if(conf){
      $.ajax({
        type: "POST",
        url: site_url+"administrasi/hapussiswa",
        dataType: "json",
        data: {id:id_delete,foto:foto},
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

  //VIEW
  $("a#btn-view").click(function(){
    id_siswa = $(this).attr('id_siswa');
    $("#read").hide();
    $.ajax({
      type: "POST",
      async:false,
      dataType: "json",
      data: {id:id_siswa},
      url: site_url+"administrasi/get_data_siswa_by_id",
      success: function(response)
      {
        $("#v_nisn","#view").html(" : "+response.nisn); 
        $("#v_nis","#view").html(" : "+response.nis);        
        $("#v_nama_lengkap","#view").html(" : "+response.nama_lengkap);
        $("#v_tmp_lahir","#view").html(" : "+response.tpt_lahir);
        var thn = response.tgl_lahir.substring(0,4);
        var bln = response.tgl_lahir.substring(7,5);
        var tgl = response.tgl_lahir.substring(10,8);
        var tgl_lahir = tgl+'/'+bln+'/'+thn;
        $("#v_tgl_lahir","#view").html(" : "+tgl_lahir);
        $("#v_jenis_kelamin","#view").html(" : "+response.jenis_kelamin);
        $("#v_agama","#view").html(" : "+response.agama);
        $("#v_alamat","#view").html(" : "+response.alamat);
        $("#v_nohp","#view").html(" : "+response.no_hp);
        $("#v_kelas","#view").html(" : "+response.kelas);
        $("#v_jurusan","#view").html(" : "+response.jurusan);
        $("#v_eskul","#view").html(" : "+response.eskul);
        $("#v_semester","#view").html(" : "+response.semester);

        var thn = response.tgl_masuk.substring(0,4);
        var bln = response.tgl_masuk.substring(7,5);
        var tgl = response.tgl_masuk.substring(10,8);
        var tgl_masuk = tgl+'/'+bln+'/'+thn;
        $("#v_tgl_masuk","#view").html(" : "+tgl_masuk);
        $("#v_status_dlm_keluarga","#view").html(" : "+response.status_dlm_keluarga);
        $("#v_anak-ke","#view").html(" : "+response.anak_ke);
        $("#v_jlh_saudara","#view").html(" : "+response.jlh_saudara);
        $("#v_pendidikan_sebelumnya","#view").html(" : "+response.pendidikan_sebelumnya);
        $("#v_nama_ayah","#view").html(" : "+response.nama_ayah);
        $("#v_nama_ibu","#view").html(" : "+response.nama_ibu);
        $("#v_alamat_ortu","#view").html(" : "+response.alamat_ortu);
        $("#v_pekerjaan_ayah","#view").html(" : "+response.pekerjaan_ayah);
        $("#v_pekerjaan_ibu","#view").html(" : "+response.pekerjaan_ibu);
        $("#v_penghasilan_ayah","#view").html(" : "+response.penghasilan_ayah);
        $("#v_penghasilan_ibu","#view").html(" : "+response.penghasilan_ibu);
        $("#v_telp_ortu","#view").html(" : "+response.telp_ortu);
        $("#v_nama_wali","#view").html(" : "+response.nama_wali);
        $("#v_alamat_wali","#view").html(" : "+response.alamat_wali);
        $("#v_telp_wali","#view").html(" : "+response.telp_wali);
        $("#v_pekerjaan_wali","#view").html(" : "+response.pekerjaan_wali);
        $("#v_status_siswa","#view").html(" : "+response.status_siswa);





        $("#v_foto","#view").html('<img src="'+base_url+'assets/img/siswa/'+response.foto+'" width="300" style="border:solid 1px #ccc;padding:5px;">');
      }
    });
    $("#view").show();
  });
  //VIEW

});