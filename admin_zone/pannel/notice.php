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
                                    <h3>Notice List</h3>
                                   </div>
                                    <div class="addstuinfBtn requestTablBtn text-right">
                                        <div class="reqheadNumber">
                                            
                                        </div>
                                         <div class="">
                                           <!--<a href="" data-toggle="modal" data-target=".bd-example-modal-lg" style="float: right;">Add New Ticket</a>-->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Add Notice</button>
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
                                    <table id="data-table" class="table table-striped">
                                        <thead class="tableHead">
                                          <tr>
                                              <th scope="col" style="text-align: center;">Date</th>
                                            <th scope="col" style="text-align: center;">Description</th>
                                            <th scope="col" style="text-align: center;">Image</th>
                                            <th scope="col" style="text-align: center;">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                                                          <?php
                                
                                    

	  
  		$gtfeeshead="SELECT * FROM `notice` ORDER BY `id` DESC";
		$sl=0;
		$qgtfeeshead=$mysqli->query($gtfeeshead);
		while($shgtfeeshead=$qgtfeeshead->fetch_assoc()){
		
		$sl++;
  
  ?>
   <tr>
    <td  align="center"><?php echo $shgtfeeshead['add_date']; ?></td>
    <td  align="center"><?php echo $shgtfeeshead['description']; ?></td>
    <td  align="center"><img src="upload/notice/<?php echo $shgtfeeshead['file_pathe']; ?>" width="120" height="100"/></td>
    <td  align="center">
        <!--<a href="edit_slider.php?slider_id=<?php echo $shgtfeeshead['id']; ?>">Edit</a>-->
    <a href="delete_notice.php?notice_id=<?php echo $shgtfeeshead['id']; ?>">Delete</a>
    </td>
  </tr>
                              
      
  <?php } ?> 

                                          
                                        </tbody>
                                      </table>
                                  </div>
                                  <div class="pegaeNation">
                                      <div class="paginationmain">
                                          <p>Displaying 1-10 out of 100</p>
                                      </div>
                                      <div class="paginationmain text-right">
                                          <ul>
                                              <li><a href="" class="pageActive">1</a></li>
                                              <li><a href="">2</a></li>
                                              <li><a href="">3</a></li>
                                              <li><a href="">4</a></li>
                                              <li><a href="">5</a></li>
                                          </ul>
                                      </div>
                                  </div>
                                   <!---Request Modal---->
                                   <!-- The Modal -->
	<div class="modal fade" id="myModal">
	  	<div class="modal-dialog">
		    <div class="modal-content">

		      	<!-- Modal Header -->
		      	<div class="modal-header">
			        <h4 class="modal-title">Add Notice</h4>
			        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
		      	</div>

		      	<!-- Modal body -->
		      	<div class="modal-body">
		        	<form action="notice_store.php" method="post" enctype="multipart/form-data" id="add-form">
                                            
                                         <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label">Description</label>
                                            <div class="col-sm-8">
                                                  <textarea type="text" id="description" name="description" rows="4" class="form-control"> </textarea>
                                              </div>
                                            </div>  
                                            <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label">File</label>
                                              <div class="col-sm-8">
                                                  <input type="file" id="attachemnet" name="attachemnet">
                                              </div>
                                            </div>
                                            
                                         
					  	
					  	<button type="button" class="btn btn-danger float-right" data-bs-dismiss="modal">Close</button>
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