<?php include 'header.php';?>
<div class="container">
    <div class="row">
    <?php include 'side_bar.php';?>
        <div class="col-sm-8">
            <div class="table-content shadow">
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="card-title text-primary">My Profile</h4>
                        <hr class="bg-warning">
                        <table class="basic-information">
                            <tr>
                                <td class="title">Name:</td>
                                <td class="text">Dr. Doctor Student</td>
                            </tr>
                            <tr>
                                <td class="title">BMDC:</td>
                                <td class="text">A1234567</td>
                            </tr>
                            <tr>
                                <td class="title">Mobile:</td>
                                <td class="text">123456789</td>
                            </tr>
                            <tr>
                                <td class="title">Email:</td>
                                <td class="text">Yourmail123@gmail.com</td>
                            </tr>
                        </table>
                        <hr class="bg-warning">
                        <table>
                            <tr>
                                <td class="title"> Medical Collage:</td>
                                <td class="text">Mymensing Medical collage,Mymensing</td>
                            </tr>
                            <tr>
                                <td class="title"> Date of Birth:</td>
                                <td class="text"> 03-april-1996 </td>
                            </tr>
                            <tr>
                                <td class="title">Gender:</td>
                                <td class="text">Male</td>
                            </tr>
                            <tr>
                                <td class="title">Blood Group:</td>
                                <td class="text">B+</td>
                            </tr>
                            <tr>
                                <td class="title">Facebook ID:</td>
                                <td class="text">fblink.com/yourid</td>
                            </tr>
                        </table>
                        <hr class="bg-warning">
                        <table>
                            <tr>
                                <td class="title"> Present Address:</td>
                                <td class="text">32/A Dhanmondi,Free School Stree</td>
                            </tr>
                            <tr>
                                <td class="title"> Upazila:</td>
                                <td class="text">Dhanmondi</td>
                            </tr>
                            <tr>
                                <td class="title"> District:</td>
                                <td class="text">Dhaka</td>
                            </tr>
                            <tr>
                                <td class="title">Blood Group:</td>
                                <td class="text">B+</td>
                            </tr>
                            <tr>
                                <td class="title">Division:</td>
                                <td class="text">Dhaka</td>
                            </tr>
                        </table>

                        <a href="edit-profile.php" button class="btn edit-btn mt-4" type="submit">Edit <i
                                class="fa fa-pencil ps-3" aria-hidden="true"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php include 'footer.php';?>
<script>
 $(document).ready(function(){
  $("#university").click(function(){
        $("#d-div").show();
        $("#a-div").hide();
      });

      $("#medical").click(function(){
        $("#a-div").show();
        $("#d-div").hide();
      });

  //     $("#bmdc_number").keyup(function(){
  //   var prefix = "A"

  //   if(this.value.indexOf(prefix) !== 0 ){
  //       this.value = prefix + this.value;     
  //   }
    
  //  });

   $(".select2").select2({
     allowClear : true,
     placeholder : "Select Institute",
     tags : true,
     tokenSeparators : [',']
   });

   $("#institute_name").on("change", function(){
      console.log( $(this).val() );
   })


  });

  $('#admission_year').datepicker({
     uiLibrary: 'bootstrap4'
  });
</script>
