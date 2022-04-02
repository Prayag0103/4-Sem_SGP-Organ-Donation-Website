
<!-- database connectivity -->

<?php
    session_start();
    
    DEFINE('DBHOST' , 'localhost');
    DEFINE('DBNAME' , 'root');
    DEFINE('DBPASS' , '');
    DEFINE('DB' , 'organdonation');

    $conn = mysqli_connect(DBHOST , DBNAME , DBPASS , DB);
    
    if(isset($_POST['datasubmitted'])) {  
        $DonarNames = $_POST['DonarName'];
        $Emails = $_POST['Email'];
        $PhoneNumbers = $_POST['PhoneNumber'];
        $DateOfBirths = $_POST['DateOfBirth'];
        $Genders = $_POST['Gender'];
        $Ages = $_POST['Age'];
        $BloodGroups = $_POST['BloodGroup'];
        $Addresss = $_POST['Address'];
        $Citys = $_POST['City'];
        $OrgansDonations = $_POST['OrgansDonation'];
        $HospitalNames = $_POST['HospitalName'];
        $HospitalAddresss = $_POST['HospitalAddress'];
        $flag=true;
        echo $OrgansDonations;
        $query1 = "insert into OrganDonationData(DonarName,Email,PhoneNumber,DateOfBirth,Gender,Age,BloodGroup,Address,City,OrgansDonation,HospitalName,HospitalAddress) VALUES ('$DonarNames','$Emails','$PhoneNumbers','$DateOfBirths','$Genders','$Ages','$BloodGroups','$Addresss','$Citys','$OrgansDonations','$HospitalNames','$HospitalAddresss')";
            
        if($PhoneNumbers == null || $Emails == null) {
            $flag = false;
        }
        else {
            mysqli_query($conn, $query1);
        }

        if($flag == false) {
            echo '<script>alert("plz fill all the details");</script>';
        }
    }
?>
<html lang="en" class="no-js">

    <head>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
    <!-- CSS -->s
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">    
    <!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	</head>


<body>
    <header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html">Organ Donation</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="about.html"><b>About</b></a></li>
                            <li><a href="admin.html"><b>Admin</b></a></li>
							<li  class="active"><a href="register.html"><b>Register as Donor</b></a></li>
							<li><a href="contact.html"><b>Contact</b></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>             
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    	<form role="form" action="register.php" method="post" class="f1">
                    		<h1><font color="#ff0303"><b>Give name Save life</b></font></h1>
                    		<fieldset>
           
                    			<div class="form-group">
                    			    <label><b>Donor Name</b></label>
                                    <input type="text" name="DonarName" placeholder=" Enter DonorName" class="f1-first-name form-control" >
                                </div>
                                <div class="form-group">
                                    <label><b>Email</b></label>
                                    <input type="text" name="Email" placeholder="Enter Valid Email" class="f1-email form-control">
                                </div>
                                <div class="form-group">
                                    <label><b>ContactNumber</b></label>
                                    <input type="text" name="PhoneNumber" placeholder="Enter valid ContactNumber" class="f1-last-name form-control">
                                </div>
								<div class="form-group">
                                    <label><b>Date Of Birth</b></label><br>
									<input type="date" name="DateOfBirth" placeholder="Enter valid ContactNumber" class="f1-last-name form-control">
                                </div>
                                <div class="form-group">
                                    <label><b>Gender</b></label>
									<br>
                                    <input type="radio" name="Gender" id="f1-Gender" value="Male">&nbsp;Male&nbsp;&nbsp;&nbsp;
								    <input type="radio" name="Gender" id="f1-Gender" value="Female">&nbsp;Female&nbsp;&nbsp;&nbsp;
									<input type="radio" name="Gender" id="f1-Gender" value="Others">&nbsp;Others
                                </div>
                                <div class="form-group">
                                    <label><b>Age</b></label>
                                    <input type="text" name="Age" placeholder="Enter Age" class="f1-city form-control">
                                </div> 
                                <div class="form-group">
                                    <label><b>BloodGroup</b></label>
                                    <br>
									<select name="BloodGroup" class="form-control">
    									<option>select</option>
    									<option>O+ve</option>
    									<option>O-ve</option>
    									<option>A+ve</option>
    									<option>A-ve</option>
    									<option>B+ve</option>
    									<option>B-ve</option>
    									<option>AB+ve</option>
    									<option>AB-ve</option>
									</select>
                                </div>
                                 <div class="form-group">
                                    <label><b>Address</b></label>
                                    <textarea name="Address" placeholder="Enter Address" class="f1-Address form-control" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label><b>City</b></label>
                                    <input type="text" name="City" placeholder="Enter City" class="f1-city form-control">
                                </div> 
                                
                               
                                <div class="form-group">
                                    <label><b>I wish to donate</b></label><br>
                                    <input type="checkbox" name="OrgansDonation" value="">&nbsp;&nbsp;Blood
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="checkbox" name="OrgansDonation" value="All organs">&nbsp;&nbsp;All organs
                                    &nbsp;&nbsp;&nbsp;&nbsp;
									<input type="checkbox" name="OrgansDonation" value="Eyes">&nbsp;&nbsp;Eyes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="OrgansDonation" value="Liver">&nbsp;&nbsp;Liver
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
									<input type="checkbox" name="OrgansDonation" value="Heart">&nbsp;&nbsp;Heart
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="OrgansDonation" value="Heart">&nbsp;&nbsp;Body
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="checkbox" name="OrgansDonation" value="Kidneys">&nbsp;&nbsp;Kidneys&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="checkbox" name="OrgansDonation" value="Lungs">&nbsp;&nbsp;Lungs&nbsp;&nbsp;
                                </div>
                               <div class="form-group">
                                    <label><b>Choose hospital name </b></label>
                                      <input type="text" name="HospitalName" placeholder="Enter Hospital Name" class="f1-city form-control">
                                </div>
                                <div class="form-group">
                                    <label><b>Choose hospital address </b></label>
                                      <input type="text" name="HospitalAddress" placeholder="Enter Hospital Name" class="f1-city form-control">
                                </div>
                                <div class="f1-buttons">
                                    <button type="submit" class="btn btn-submit" name="datasubmitted">Submit</button>
                                </div>
                            </fieldset>
                    	
                    	</form>
                    </div>
                </div>
                    
            </div>
        </div>

        <!-- fh5co-blog-section -->
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p>Copyright 2017 <a href="#">Charity</a>. All Rights Reserved.Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">MyFriends</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

        <!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

        <!-- Main JS -->
	<script src="js/main.js"></script>
</body>
</html>