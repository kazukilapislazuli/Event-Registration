<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

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
<form action="" method="post" width="100%">

 <!--   <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">    -->
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Event Registration Form</h2>
                </div>

<!-------------------------------------name--------------------------->

                <div class="card-body">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="name">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="lname">
                                            <label class="label--desc" name="lname">last name</label>
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
                                    <input class="input--style-5" type="text" name="college">
                                </div>
                            </div>
                        </div>


<!-------------------------------email id------------------------------------->
			<div class="form-row">
                            <div class="name">Email ID</div>
                            <div class="value">
                                <div class="input-group-desc">
                                     <input class="input--style-5" type="text" name="email">
                                     <label class="label--desc">Email ID</label>
                                </div>
                            </div>
                        </div>
                        

<!------------------------------------------------phone number-------------------------->

                        <div class="form-row">
                            <div class="name">Phone Number</div>
                            <div class="value">
                                <div class="input-group-desc">
                                     <input class="input--style-5" type="text" name="phone">
                                     <label class="label--desc">Phone Number</label>
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
                                        <select name="techeve">
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

<!---------------------------NON TECHNICAL EVENTS---------------------------------->

			<div class="form-row">
                            <div class="name">Non-Technical Events</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="nontecheve">
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
                                        <select name="funeve">
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
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor<form action="" method="post" width="100%">
/datepicker/moment.min.js"></script>
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
