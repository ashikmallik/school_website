<?php
error_reporting(0);
//ob_start();
include('../../db_contection.php');
$getinstituteinfo = "SELECT * FROM `institutions_details`";
$qgetinstituteinfo=$mysqli->query($getinstituteinfo);
$shqgetinstituteinfo=$qgetinstituteinfo->fetch_assoc();
?>

<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin Zone</title>

     <!-- Favicon -->
     <link rel="shortcut icon" href="../assets/images/logo.jpg">

    <!-- page css -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">
    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/media.css">

</head>

<body>
    
    <?php
                                
  		
                       $id= strip_tags($_GET['id']);         
  		$gtfeeshead="SELECT * FROM `staff_info` where id='$id'";
		$qgtfeeshead=$mysqli->query($gtfeeshead);
		$shgtfeeshead=$qgtfeeshead->fetch_assoc();
		
	
  
  ?>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <section id="mainnav">
            <?php
               		require_once('header.php');
			   ?> 

            </section> 
            <!---Header End-->

            <!-- Side Nav START -->
            <div class="side-nav" style ="background: #f1f6f7;">
            <?php
               		require_once('leftmenu.php');
			   ?>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                <?php
               	//	require_once('topmenu.php');
			   ?>
                    <!----------------Content Start----------------->
 <div class="row">
                        <div class="col-lg-12">
                            <div class="fessPayment">
                                <div class="requestTable">
                                   <div class="requestTableHead">
                                    <h3>Infrastructure List</h3>
                                   </div>
                                    <div class="addstuinfBtn requestTablBtn text-right">
                                        <div class="reqheadNumber">
                                            
                                        </div>
                                         
                                    </div>
                                </div>
                                <!--<div class="RequestSearch">-->
                                  
                                <!--        <div class="reqSeach">-->
                                <!--            <input type="text" class="form-control" placeholder="Search Request">-->
                                <!--        </div>-->
                                <!--        <div class="reqSeach datereq">-->
                                <!--            <input type="text" class="form-control" placeholder="Search Date">-->
                                <!--        </div>-->
                                <!--        <div class="reqSeach statusReq">-->
                                <!--            <input type="text" class="form-control" placeholder="Search Status">-->
                                <!--        </div>-->
                                   
                                <!--</div>-->
                             
                           
                                   <!---Request Modal---->
                                   <!-- The Modal -->
	<div class="" >
	  	<div class="">
		    <div class="">

		      	<!-- Modal Header -->
		  

		      	<!-- Modal body -->
		      	<div class="modal-body">
<form action="staff_store.php" method="post" enctype="multipart/form-data" id="add-form">
                                            
                    <div class="form-group row">
                    <label  class="col-sm-3 col-form-label">Serial No</label>
                       <div class="col-sm-8">
                      <input type="text" id="serial_no" name="serial_no" placeholder="Serial No" class="form-control"  size="27">
                       </div>
                      </div> 
                        
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Staff Name</label>
                       <div class="col-sm-8">
                      <input type="text" id="name" name="name" placeholder="Staff Name" class="form-control"  size="27">
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Designation</label>
                       <div class="col-sm-8">
                    <select name="designation" id="designation" class="form-control" >
                         <option value="Accountant"> Accountant</option>
                         <option value="Assistant Accountant"> Assistant Accountant </option>
                         <option value="Operator"> Operator </option>
                         <option value="Clerk"> Clerk </option>
                         <option value="Office Assistant"> Office Assistant </option>

                         <option value="Guard"> Guard </option>

                        </select>
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Mobile</label>
                       <div class="col-sm-8">
                      <input type="text" id="moblie" name="moblie" placeholder="Mobile" class="form-control"  size="27">
                       </div>
                       
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Email Id</label>
                       <div class="col-sm-8">
                      <input type="text" id="email_id" name="email_id" placeholder="Email Id" class="form-control"  size="27">
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Religion</label>
                       <div class="col-sm-8">
     
                        <select class="form-control" name="religion" id="religion">
                                <option value=""> Select Once </option>
                                <option value="Islam">Islam </option>
                                 <option value="Hindu">Hindu</option>
                                 <option value="Christian">Christian</option>
                                 <option value="Buddha">Buddha</option>
                            </select>
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Gender</label>
                       <div class="col-sm-8">
                    <select class="form-control" name="gender" id="gender">
                                <option value=""> Select Once </option>
                                <option value="Male"> Male </option>
                                 <option value="Female">Female</option>
                            </select>
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Qualification</label>
                       <div class="col-sm-8">
                      <input type="text" id="qualification" name="qualification" placeholder="Qualification" class="form-control"  size="27">
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Blood Group</label>
                       <div class="col-sm-8">
                        <select class="form-control" name="blood_group" id="blood_group">
                                <option value=""> Select Once </option>
                                <option value="O+"> O+ </option>
                                 <option value="O-">O-</option>
                                 <option value="A+"> A+ </option>
                                 <option value="A-">A-</option>
                                 <option value="B+"> B+ </option>
                                 <option value="B-">B-</option>
                                 <option value="AB+"> AB+ </option>
                                 <option value="AB-">AB-</option>
                            </select>
                       </div>
                       </div>
                    <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">National Id</label>
                       <div class="col-sm-8">
                      <input type="text" id="national_Id" name="national_Id" placeholder="National Id" class="form-control"  size="27">
                       </div>
                       </div>
                       
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">First joining date</label>
                       <div class="col-sm-8">
                      <input type="text" id="first_joining_date" name="first_joining_date" placeholder="First joining date" class="form-control"  size="27">
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Joining date at this school</label>
                       <div class="col-sm-8">
                      <input type="text" id="joining_date_at_this_school" name="joining_date_at_this_school" placeholder="Joining date at this school" class="form-control"  size="27" value="<?php echo $shgtfeeshead['']; ?>">
                       </div>
                       </div>
        <div class="form-group row">
         <label  class="col-sm-3 col-form-label">Image</label>
          <div class="col-sm-8">
            <input type="file" id="attachemnet" name="attachemnet">
          </div>
        </div>               
                    <input type="hidden" name="id" value="<?php echo $shgtfeeshead['id']; ?>">   
					  
					  	<button type="submit" class="btn btn-primary float-right" name="add" >Add</button>
					</form>



		      	</div>

		    </div>
	  	</div>
	</div>
                                   
                                  
                                  <!---Reques Modal---->
                                  
                                  
                            </div>
                        </div>
                    </div>
                    <!----------------Content Start---------------->
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
<div class="footer-content">
                        <p class="m-b-0">Copyright ©2020 <?php  echo $shqgetinstituteinfo['institutions_name']; ?>. All rights reserved.</p>
                    </div>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

            <!-- Search Start-->
            
            <!-- Search End-->

            <!-- Quick View START -->
            
            <!-- Quick View END -->
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

<!--<script type="text/javascript">
    $('.side-nav-menu').on('click', 'li', function(){
        $('.side-nav-menu li.inneractive').removeClass('inneractive');
        $(this).addClass('inneractive');
    })
</script>
<!-- <script type="text/javascript">
    $('.ModuleNav').on('click', 'li', function(){
        $('.ModuleNav li.active').removeClass('active');
        $(this).addClass('active');
    })
</script> 
<script type="text/javascript">
    $('.NavhideShow').on('click', 'li', function(){
        $('.stickyNav .navHideActive').removeClass('navHideActive');
        $(this).addClass('navHideActive');
    })
</script>
<script>
    $(document).ready(function(){
        $("#menuToggle").click(function(){
            $("#MobileToggle").fadeToggle();
        });
    });
</script>
<script>
    $(document).ready(function(){
        $("#menuToggle2").click(function(){
            $("#MobileToggle").fadeToggle();
        });
    });
</script>

<script>
    $(document).ready(function(){
        $(".Hidemybtn").click(function(){
            $(".Hidemybtn").show();
            $(this).hide();
        });
    });

$(document).ready(function(){	
	$("#ticketForm").submit(function(event){
		submitForm();
		return false;
	});
});
function submitForm(){
	 $.ajax({
		type: "POST",
		url: "support_do.php",
		cache:false,
		data: $('form#ticketForm').serialize(),
		success: function(response){
			$("#ticketForm").html(response)
			$("#contact-modal").modal('hide');
		},
		error: function(){
			alert("Error");
		}
	});
}
    
</script> -->
</body>



</html>