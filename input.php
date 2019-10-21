
<html lang="en">

<head>
    <!-- Required meta tags-->
    
    <!-- Title Page-->
    <title>Registration Form</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
<!-- <div id="large-header" class="large-header">
  <canvas id="demo-canvas"></canvas>
    <h1 class="main-title"> <span class="thin"></span></h1>


</div>
-->
 <!--   <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">    -->
        <div class="wrapper wrapper--w790">
           <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Event Registration  Form</h2>
                </div>

<!-------------------------------------name--------------------------->
<form action="" method="post" width="100%">
                <div class="card-body">
                    <form method="POST">

                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="name" placeholder="______First Name_____" required>
                                            
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="lname" placeholder="______Last Name______" required>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


<!-------------------------------college------------------------------------->

                        <div class="form-row">
                            <div class="name">College</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="college" placeholder="___________________________________________________________" required>
                                </div>
                            </div>
                        </div>


<!-------------------------------email id------------------------------------->
			<div class="form-row">
                            <div class="name">Email ID</div>
                            <div class="value">
                                <div class="input-group-desc">
                                     <input class="input--style-5" type="email" name="email" required placeholder="___________________________________________________________">
                                     
                                </div>
                            </div>
                        </div>
                        

<!------------------------------------------------phone number-------------------------->

                        <div class="form-row">
                            <div class="name">Phone Number</div>
                            <div class="value">
                                <div class="input-group-desc">
                                     <input class="input--style-5" type="number" name="phone"  required placeholder="___________________________________________________________">
                                    
                                </div>
                            </div>
                        </div>

<!--------------------------------------------------branch---------------------------------->

                        <div class="form-row">
                            <div class="name">Branch</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="branch">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Computer Science</option>
                                            <option>Information Technology</option>
                                            <option>Electronics and Telecommunication</option>
					    <option>Mechanical</option>
				            <option>OTHER!!</option>
                                        </select>	
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
<!---------------------------technical events---------------------------------->

			<div class="form-row">
                            <div class="name">Technical Events</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="techeve" multiple="8">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            
                                            <option>Event 1</option>
                                            <option>Event 2</option>
					    <option>Event 3</option>
                                            <option>Event 4</option>
                                            <option>Event 5</option>  
					
                                        </select>	
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

<!---------------------------NON TECHNICAL EVENTS---------------------------------->

			<div class="form-row">
                            <div class="name">Non-Technical Events</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="nontecheve" multiple="8">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>----None----</option>
                                            <option>Event 1</option>
                                            <option>Event 2</option>
					    <option>Event 3</option>
                                            <option>Event 4</option>
                                            <option>Event 5</option>
                                        </select>	
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

<!----------------------------FUN EVENTS---------------------------------------------->

			<div class="form-row">
                            <div class="name">FUN Events</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="funeve" multiple="8">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>----None----</option>
                                            <option>Event 1</option>
                                            <option>Event 2</option>
					    <option>Event 3</option>
                                            <option>Event 4</option>
                                            <option>Event 5</option>
                                        </select>	
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

<!-----------------------------REGISTER BUTTON-------------------------------------------->


                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
</form>
        </div>
    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->



<?php
$data1 = $_POST['name'];
$data2 = $_POST['lname']; 
$data3 = $_POST['college'];
$data4 = $_POST['email'];
$data5 = $_POST['phone'];
$data6 = $_POST['branch'];
$data7 = $_POST['techeve'];
$data8 = $_POST['nontecheve'];
$data9 = $_POST['funeve'];
$output=shell_exec("python record.py $data1 $data2 $data3 $data4 $data5 $data6 $data7 $data8 $data9");

echo $output;

?>
