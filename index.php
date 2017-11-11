<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Codata Irrigation</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    iSamurai
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.html">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <i class="ti-pencil-alt2"></i>
                        <p>Irrigated Forage</p>
                    </a>
                </li>
                <li>
                    <a href="weanercalves.php">
                        <i class="ti-view-list-alt"></i>
                        <p>Zebu Weaners</p>
                    </a>
                </li>
                <li>
                    <a href="foodsecurity.php">
                        <i class="ti-text"></i>
                        <p>Food Security</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Irrigated Forage</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    

                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Irrigated Forage Production</h4>
                                <p class="category">Perennial species that are drought tolerant</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                            	<style type="text/css">
                            		#myInput {
								    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
								    background-position: 10px 12px; /* Position the search icon */
								    background-repeat: no-repeat; /* Do not repeat the icon image */
								    width: 100%; /* Full-width */
								    font-size: 16px; /* Increase font-size */
								    padding: 12px 20px 12px 40px; /* Add some padding */
								    border: 1px solid #ddd; /* Add a grey border */
								    margin-bottom: 12px; /* Add some space below the input */
}
                            	</style>
                            	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

                                <table class="table table-hover" id="table">
                                    <thead>
                                        <th>Species</th>
                                    	<th>Nutrition Value</th>
                                    	<th>Seed Production</th>
                                        <th>Biomass</th>
                                        <th>Bales</th>
                                        <th>Gross Margin From Hay</th>
                                        <th>Cost Benefit Ratio</th>
                                    	
                                    </thead>
                                    <tbody>
                                        <?php

                                                $curl = curl_init();

                                                curl_setopt_array($curl, array(
                                                  CURLOPT_URL => "https://atg-hackathon.mybluemix.net/api/irrigationforage",
                                                  CURLOPT_RETURNTRANSFER => true,
                                                  CURLOPT_ENCODING => "",
                                                  CURLOPT_MAXREDIRS => 10,
                                                  CURLOPT_TIMEOUT => 30,
                                                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                  CURLOPT_CUSTOMREQUEST => "GET",
                                                  CURLOPT_HTTPHEADER => array(
                                                    "cache-control: no-cache",
                                                    "postman-token: 9fe1b410-7ef4-3d87-734f-47ad268235f0"
                                                  ),
                                                ));

                                                $response = curl_exec($curl);
                                                $err = curl_error($curl);

                                                curl_close($curl);

                                                if ($err) {
                                                  echo "cURL Error #:" . $err;
                                                } else {
                                                  $data = json_decode($response, true);

                                                  $farms = $data["data"];
                                                  foreach ($farms as $farm) {
                                                      echo '<tr>';
                                                      echo '<td>' . $farm['species'] . '</td>';
                                                      echo '<td>' . $farm['attributes']['nutrition_value']. '</td>';
                                                      echo '<td>' . $farm['attributes']['seed_production'] . '</td>';
                                                      echo '<td>' . $farm['attributes']['biomass'] . '</td>';
                                                      echo '<td>' . $farm['attributes']['bales'] . '</td>';
                                                      echo '<td>' . $farm['attributes']['gross_margin_from_hay'] . '</td>';
                                                      echo '<td>' . $farm['attributes']['cost_benefit_ratio'] . '</td>';
                                                      echo '</tr>';
                                                }

                                                }
                                                ?>
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.techtenant.co.ke">
                                About iSamurai
                            </a>
                        </li>
                        
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.techtenant.co.ke">iSamurai</a>
                </div>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script>
    function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>


</html>
