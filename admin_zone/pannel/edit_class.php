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
                                
             $id=$_GET['id'];                       

	  
  		$gtfeeshead="SELECT * FROM `class` where id='$id'";
		$sl=0;
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
                                    <h3></h3>
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
                                <div class="table-responsive newRequestTable headerFixTable">
                                    	<form action="update_class.php" method="post" enctype="multipart/form-data" id="add-form">
		        	    
		        	 
                        <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Class</label>
                       <div class="col-sm-8">
                          
                           <select class="form-control" id="class_name" name="class_name"  >
                               <option selected="" value=""><?php echo $shgtfeeshead['class_name']; ?></option>
                               <option value="Baby">Baby</option>
                               <option value="Play">Play</option>
                               <option value="KG">KG</option>
                               <option value="Nursery">Nursery</option>
                               <option value="One">One</option>
                               <option value="Two">Two</option>
                               <option value="Three">Three</option>
                               <option value="Four">Four</option>
                               <option value="Five">Five</option>
                               <option value="Six">Six</option>
                               <option value="Seven">Seven</option>
                               <option value="Eight">Eight</option>
                               <option value="Nine">Nine</option>
                               <option value="Ten">Ten</option>
                               <option value="Eleven">Eleven</option>
                               <option value="Twelve">Twelve</option>
                            </select>
                            <input type="hidden" name="id" value="<?php echo $shgtfeeshead['id']; ?>">
                            <button type="submit" class="btn btn-primary mt-1" name="add" >Add</button>
                                              </div>
                                              
                                            </div> 
                                            
                                         
		
					  	
					</form>
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