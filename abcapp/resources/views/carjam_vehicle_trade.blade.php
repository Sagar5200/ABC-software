<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- CSS Files -->
	<!-- <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.main.css')}}"> -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/web-css.css">
   <!-- Fontawesome -->
   <link rel="stylesheet" type="text/css" href="css/all.min.css">
   <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">

   <!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="css/style.css" rel="stylesheet" />
   
   
      <title>Car Jam Information</title>
   </head>
   
   <body>
      <div class="container-fluid">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
               <div>
                  <p><b>Enter Plate Number:</b></p>
                     <div class="input-group">
                        <div class="form-outline">
                           <div class="input-group">
                              <input type="search" class="form-control rounded" placeholder="Search" name="plate" aria-label="Search"
                                 aria-describedby="search-addon" />
                              <button type="button" class="btn btn-outline-primary">search</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <form action="" method="get">
                     <div class="form-group">
                           <label for="registration_no">Registration No:</label>
                           <td>{{ $car['idh']['vehicle']['plate']}}</td><br>

                           <label for="make">Make::</label>
                           <td>{{ $car['idh']['vehicle']['make']}}</td><br>

                           <label for="registration_no">Registration No:</label>
                           <td>{{ $car['idh']['vehicle']['model']}}</td><br>

                           <label for="registration_no">Vehicle Year:</label>
                           <td>{{ $car['idh']['vehicle']['year_of_manufacture']}}</td><br>

                           <label for="registration_no">Engine No:</label>
                           <td>{{ $car['idh']['vehicle']['engine_no']}}</td><br>

                           <label for="registration_no">Year of Registration:</label>
                           <td>{{ $car['idh']['vehicle']['year_of_manufacture']}}</td><br>

                           <label for="registration_no">First registered NZ:</label>
                           <td>{{ $car['idh']['vehicle']['date_of_first_registration_in_nz']}}</td><br>

                           <label for="registration_no">Chassis/Frame or VIN No:</label>
                           <td>{{ $car['idh']['vehicle']['chassis']}} {{ $car['idh']['vehicle']['vin'] }}</td><br>

                           <label for="registration_no">Engine Capacity:</label>
                           <td>{{ $car['idh']['vehicle']['cc_rating']}}</td><br>

                           <label for="registration_no">Operating Fuel Type:</label>
                           <td>{{ $car['idh']['vehicle']['fuel_type']}}</td><br>

                           <label for="registration_no">Colour:</label>
                           <td>{{ $car['idh']['vehicle']['main_colour']}}</td><br>

                           <label for="registration_no">Actual Distance the vehicle has travelled:</label>
                           <td>{{ $car['idh']['vehicle']['latest_odometer_reading']}}</td><br>

                           <label for="registration_no">VIC/WOF Details:</label>
                           <td>{{ $car['idh']['vehicle']['date_of_latest_wof_inspection']}} {{ $car['idh']['vehicle']['result_of_latest_wof_inspection'] }} {{ $car['idh']['vehicle']['expiry_date_of_last_successful_wof'] }}</td><br>
                           
                           <label for="registration_no">Speacial Conditions:</label>
                           <td>{{ $car['idh']['vehicle']['latest_odometer_reading']}}</td><br>

                           <label for="registration_no">Particular and/or special purpose for which the vehicle is required (eg. towinf, offroad side):</label>
                           <td>{{ $car['idh']['vehicle']['latest_odometer_reading']}}</td><br>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   
      
      
  
      
   <!--Jquery-->
	<script src="js/jquery-2.2.4.min.js"></script>
   <script src="js/jquery-3.6.0.min.js"></script>
	<!--Popper jquery-->
	<script src="js/popper.min.js"></script>
	<!--bootstrap-->
	<script src="js/bootstrap.min.js"></script>
	<!-- masonary -->
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
	<!--Custom Js-->
	<script src="js/demo.js"></script>
   	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="js/jquery.validate.min.js" type="text/javascript"></script>
   </body>
</html>