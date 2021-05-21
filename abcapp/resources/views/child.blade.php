<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-1">
            <h4>DESCRIPTION OF MOTOR VEHICLE/MOTORCYCLE TO BE PURCHASED</h4>
            <div class="input-group md-form form-sm form-2 pl-0">
                <input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search" id="platenumber" name="plate" aria-label="Search">
                <span class="input-group-text amber lighten-3" id="basic-text1" onclick="findplate()"><button type="button" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            
            <form action="{{ route('carstore') }}" method="POST">
                @csrf
                    <div class="form-group margin-top-15px margin-bottom-15px">
                        <label for="registration_no">Registration No:</label>
                        <input type="text" class="form-control" placeholder="Registration No" name="registration_no" value="@if (isset($car['idh'])) {{ $car['idh']['vehicle']['plate']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="make">Make::</label>
                        <input type="text" class="form-control" placeholder="Registration No" name="make" value="@if (isset($car['idh'])) {{ $car['idh']['vehicle']['make']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Registration No:</label>
                        <input type="text" class="form-control" placeholder="Registration No" name="model" value="@if (isset($car['idh'])) {{ $car['idh']['vehicle']['model']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Vehicle Year:</label>
                        <input type="text" class="form-control" placeholder="Registration No" name="vehicle_year" value="@if (isset($car['idh'])) {{ $car['idh']['vehicle']['year_of_manufacture']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Engine No:</label>
                        <input type="text" class="form-control" placeholder="Registration No" name="engine_no" value="@if (isset($car['idh'])) {{ $car['idh']['vehicle']['engine_no']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Year of Registration:</label>
                        <input type="text" class="form-control" placeholder="Your Email *" name="year_of_registration" value="@if (isset($car['idh'])) {{ $car['idh']['vehicle']['year_of_manufacture']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">First registered NZ:</label>
                        <input type="text" class="form-control" placeholder="Your Email *" name="first_registration_nz" value="@if (isset($car['idh'])) {{ $car['idh']['vehicle']['date_of_first_registration_in_nz']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Chassis/Frame or VIN No:</label>
                        <input type="text" class="form-control" placeholder="Your Email *" name="chassis_no" value="@if (isset($car['idh'])) {{ $car['idh']['vehicle']['chassis']}} {{ $car['idh']['vehicle']['vin'] }} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Engine Capacity:</label>
                        <input type="text" class="form-control" placeholder="Your Email *" name="engine_capacity" value="@if (isset($car['idh'])) {{ $car['idh']['vehicle']['cc_rating']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Operating Fuel Type:</label>
                        <input type="text" class="form-control" placeholder="Your Email *" name="fuel_type" value="@if (isset($car['idh'])) {{ $car['idh']['vehicle']['fuel_type']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Colour:</label>
                        <input type="text" class="form-control" placeholder="Your Email *" name="colour" value="@if (isset($car['idh'])) {{ $car['idh']['vehicle']['main_colour']}} @endif" />
                    </div> 
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Actual Distance the vehicle has travelled:</label>
                        <input type="text" class="form-control" placeholder="Your Email *" name="dist_vehicle_travelled" value="@if (isset($car['idh'])) {{ $car1['idh']['vehicle']['main_colour']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">VIC/WOF Details:</label><br>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="wof_details" rows="3" value="@if (isset($car['idh']))
                        {{ $car['idh']['vehicle']['date_of_latest_wof_inspection']}} {{ $car['idh']['vehicle']['result_of_latest_wof_inspection'] }} {{ $car['idh']['vehicle']['expiry_date_of_last_successful_wof'] }}
                        @endif"></textarea>
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Speacial Conditions:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="special_condition" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="registration_no">Particular and/or special purpose for which the vehicle is required (eg. towinf, offroad side):</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="special_purpose" rows="3"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" id="btn-sub-1" class="btn btn-primary" name="submit">Save</button>
                    </div>
                </form>
               
        </div>
        <div class="col-md-6 login-form-2">
            <h4>DESCRIPTION OF TRADE IN MOTOR VEHICLE/MOTORCYCLE</h4>
            <div class="input-group md-form form-sm form-2 pl-0">
                <input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search" id="platenumber1" aria-label="Search">
                <span class="input-group-text amber lighten-3" id="basic-text1" onclick="findplate1()"><button type="button" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
            
            <form action="{{ route('cartradestore') }}" method="POST">
                @csrf
                    <div class="form-group margin-top-15px margin-bottom-15px">
                        <label for="registration_no">Registration No:</label>
                        <input type="text" class="form-control" placeholder="Registration No" name="registration_no" value="@if (isset($car1['idh'])) {{ $car1['idh']['vehicle']['plate']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="make">Make:</label>
                        <input type="text" class="form-control" placeholder="Make" name="make" value="@if (isset($car1['idh'])) {{ $car1['idh']['vehicle']['make']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Model:</label>
                        <input type="text" class="form-control" placeholder="Your Email *" name="model" value="@if (isset($car1['idh'])) {{ $car1['idh']['vehicle']['model']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Vehicle Year:</label>
                        <input type="text" class="form-control" placeholder="Your Email *" name="vehicle_year" value="@if (isset($car1['idh'])) {{ $car1['idh']['vehicle']['year_of_manufacture']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Engine No:</label>
                        <input type="text" class="form-control" placeholder="Registration No" name="engine_no" value="@if (isset($car1['idh'])) {{ $car1['idh']['vehicle']['engine_no']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Colour:</label>
                        <input type="text" class="form-control" placeholder="Your Email *" name="colour" value="@if (isset($car1['idh'])) {{ $car1['idh']['vehicle']['main_colour']}} @endif" />
                    </div> 
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">First registered NZ:</label>
                        <input type="text" class="form-control" placeholder="Your Email *" name="first_registration_nz" value="@if (isset($car1['idh'])) {{ $car1['idh']['vehicle']['date_of_first_registration_in_nz']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Chassis/Frame or VIN No:</label>
                        <input type="text" class="form-control" placeholder="Your Email *" name="chassis_no" value="@if (isset($car1['idh'])) {{ $car1['idh']['vehicle']['chassis']}} {{ $car1['idh']['vehicle']['vin'] }} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">CC Rating:</label>
                        <input type="text" class="form-control" placeholder="Your Email *" name="cc_rating" value="@if (isset($car1['idh'])) {{ $car1['idh']['vehicle']['cc_rating']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">No of Owners NZ:</label>
                        <input type="text" class="form-control" placeholder="Your Email *" name="no_of_owner_nz" value="@if (isset($car1['idh'])) {{ $car1['idh']['vehicle']['fuel_type']}} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Motive Power:</label>
                        <input type="text" class="form-control" placeholder="Your Email *" name="motive_power" value="@if (isset($car1['idh'])) {{ $car1['idh']['vehicle']['power']}} @endif" />
                    </div>
                    
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Present Odometer:</label>
                        <input type="text" class="form-control" placeholder="Your Email *" name="present_odometer" value="@if (isset($car1['idh'])) {{ $car1['idh']['vehicle']['power'] }} @endif" />
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">VIC/WOF Details:</label><br>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="wof_details" rows="3" value="@if (isset($car1['idh']))
                        {{ $car1['idh']['vehicle']['date_of_latest_wof_inspection']}} {{ $car1['idh']['vehicle']['result_of_latest_wof_inspection'] }} {{ $car1['idh']['vehicle']['expiry_date_of_last_successful_wof'] }}
                        @endif"></textarea>
                    </div>
                    <div class="form-group margin-bottom-15px">
                        <label for="registration_no">Extra Fitted:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="extra_fitted" rows="3"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" id="btn-sub-2" class="btn btn-success" name="submit">Save/Next</button>
                    </div>
            </form>
        </div>
    </div>
</div>