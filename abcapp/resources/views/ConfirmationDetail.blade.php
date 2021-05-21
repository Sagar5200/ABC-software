<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Page</title>
    <!-- CSS Files -->
	
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    
	<!-- Fontawesome -->
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="css/style.css" rel="stylesheet" />
   
    
</head>
<body>
    <div class="container review-container">
        <div class="row">
            <h2>Vehicle Offer and Sale Agreement</h2>
            <!-- customer Informarion -->               
           <form action="" method="">
               <!-- customer Informarion -->
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 form-group margin-top-15px margin-bottom-15px">
                        <label for="date">Date:</label>
                        <input type="text" class="form-control" placeholder="Date" name="date" value="{{ $customer->date }}" />
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 form-group margin-top-15px margin-bottom-15px">
                        <label for="mvt">Motor Vehicle Trade:</label>
                        <input type="text" class="form-control" placeholder="Your Motor vehicle Trade" name="mvt" value="{{ $customer->mvt }}" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group margin-top-15px margin-bottom-15px">
                        <label for="cust_name">Customer Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Customer Name" name="customer_name" value="{{ $customer->customer_name }}" />
                    </div>
                    <div class="col-md-6 form-group margin-top-15px margin-bottom-15px">
                        <label for="cust_email">Customer Email:</label>
                        <input type="text" class="form-control" placeholder="Enter Customer Email" name="cust_email" value="{{ $customer->cust_email }}" />
                    </div>
                </div>
                <div class="row margin-right-left-auto">
                    <div class="col-md-5 form-group margin-top-15px mvt-from">
                        <div class="mvt-label"><h4>MOTOR VEHICLE TRADER</h4></div>
                        <label for="registered_name" class="margin-left-right-top-10px">Registered Name:</label>
                        
                        <input type="text" class="form-control" placeholder="Enter Registered Name" name="register_name" value="{{ $mvtinfo->register_name }}" />
                        
                        <label for="trading_as" class="margin-left-right-top-10px">Trading As:</label>
                        <input type="text" class="form-control" placeholder="Enter Trading as" name="trading_as" value="{{ $mvtinfo->trading_as }}" />
                        
                        <label for="address" class="margin-left-right-top-10px">Address:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="mvt_address" rows="3" value="{{ $mvtinfo->mvt_address }}"></textarea>
                        
                        <label for="mvt-email" class="margin-left-right-top-10px">Email:</label>
                        <input type="text" class="form-control margin-bottom-15px" placeholder="Email *" name="email" value="{{ $mvtinfo->email }}" />
                    </div>
                    <div class="col-md-6 form-group margin-top-15px purchaser">
                        <div class="purch-label"><h4>PURCHASER</h4></div>
                        <label for="name" class="margin-left-right-top-10px">I/We: Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="we_name" value="{{ $purchaser->we_name }}" />

                        <label for="Res_post_address" class="margin-left-right-top-10px">Residential/Postal Address:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="post_address" rows="3"></textarea>
                        
                        <label for="occupation" class="margin-left-right-top-10px">Occupation:</label>
                        <input type="text" class="form-control" placeholder="Enter Occupation" name="occupation" value="{{ $purchaser->occupation }}" />
                        
                        <label for="employer" class="margin-left-right-top-10px">Employer:</label>
                        <input type="text" class="form-control margin-bottom-15px" placeholder="Employer" name="employer" value="{{ $purchaser->employer }}" />

                        <label for="Drive_lice_ltsa" class="margin-left-right-top-10px">Driver Licence/LTSA No:</label>
                        <input type="text" class="form-control" placeholder="Enter Driver Licence/LTSA number" name="drive_lic_ltsa" value="{{ $purchaser->drive_lic_ltsa }}" />
                        
                        <label for="bank" class="margin-left-right-top-10px">Bank:</label>
                        <input type="text" class="form-control" placeholder="Enter Bank detail" name="bank" value="{{ $purchaser->bank }}" />
                        
                        <label for="DOB" class="margin-left-right-top-10px">Date Of Birth:</label>
                        <input type="text" class="form-control" placeholder="Date" name="dob" value="{{ $purchaser->dob }}" />

                        <div class="row">
                            <label for="phone" class="margin-top-15px">Phone Number</label>
                            <div class="col-md-4 form-group ">
                                <label for="phone_home" class="margin-left-right-top-10px">Home:</label>
                                <input type="text" class="form-control margin-bottom-15px" name="phone_home" placeholder="Enter Phone Number" value="" />
                            </div>
                            <div class="col-md-4 form-group ">
                                <label for="phone_business" class="margin-left-right-top-10px">Business:</label>
                                <input type="text" class="form-control margin-bottom-15px" name="phone_business" placeholder="Enter Phone Number" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                <br>         
                <!-- end customer information -->
                <!-- Carjam information -->
                <div class="row">
                    <div class="col-md-6">
                        <h4>DESCRIPTION OF MOTOR VEHICLE/MOTORCYCLE TO BE PURCHASED</h4>
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
                                
                            </form>                   
                    </div>
                    <div class="col-md-6 ">
                        <h4>DESCRIPTION OF TRADE IN MOTOR VEHICLE/MOTORCYCLE</h4>
                                
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
                               
                        </form>
                    </div>
                </div>   
                <!--End Carjam information -->
                <!-- payment information -->
                <div class="row">
                    <div class="col-md-12 ">
                        <h4>Payment Information</h4>
                            <form action="{{ route('payment') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-5 form-group margin-top-15px trad-agree-from">
                                        <div class="mvt-label"><h4>TRADE IN AGREEMENT<br><font>(Refer to Condition 4)</font></h4></div>

                                        <pre>I offer to sell the trades the vechicle described:<br> &#8727; <em>I warrant my unencumbered title to same.</em><br> &#8727; <em>encumbrances are stated below</em><br> &#8727; <em>The Odometer fairly represents the distance travelled</em><br> <em>(Delete clause(s) not applicale. Purchaser to intial)</em></pre>
                                        
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="pur_price" class="margin-left-right-top-10px"><em><b><size style="font-size:20px">Purchase Price:<br>(inc GST)</size></b></em></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="purchase_price" placeholder="" value="" />
                                            </div>
                                        </div><br>
                                        
                                        <label for="worrning"><font color="red">This is the only TAX INVOICE <br>in respect of this transaction</font></label><br>
                                        
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="value" class="margin-left-right-top-10px"><em>Value &#36;:<br>(inc GST)</em></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="value" placeholder="" value="" />
                                            </div>
                                        </div><br>

                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="sign" class="margin-left-right-top-10px"><em>Sign: </em></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="" placeholder="" value="" />
                                            </div>
                                        </div>
                                        <label for="worrning"><font color="red">Only valid if signed by purchaser</font></label><br>

                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="less-en-bal" class="margin-left-right-top-10px"><b><em><size style="font-size:20px">Less Encumbrance<br>Balance &#36;:<br></size></em></b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="less_encum_bal" placeholder="" value="" />
                                            </div>
                                        </div><br>

                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="net-trad-allow" class="margin-left-right-top-10px"><b><em><size style="font-size:18px">NET TRADE-IN<br>ALLOWANCE &#36;:<br></size></em></b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="net_trade_allowance" placeholder="" value="" />
                                            </div>
                                        </div><br>

                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="pay-encum" class="margin-left-right-top-10px"><em>Pay Encumbrance to: </em></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="pay_encumbrance" placeholder="" value="" />
                                            </div>
                                        </div><br>

                                        <pre class="border-top-black margin-top-5px"><b>Motor Vehicle Trader acknowledges that in purchasing<br>this vehicle the trader accepts all the responsibilities<br>associated with the changes of ownership of the vehicle.</em></b></pre>

                                        
                                    </div>
                                    <div class="col-md-6 form-group margin-top-15px pur-pri-pay">
                                        <div class="purch-label"><h4>PURCHASE PRICE AND PAYMENT</h4></div>

                                        <P>I agree to pay as follows</P>

                                        <Table class="item-table" cellsp>
                                            <tr>
                                                <td>Sales Price (Incl GST)</td>
                                                <td height=30 colspan=1 style="text-align: center;">Amount</td>
                                            </tr>
                                            <tr>
                                                <td height=30 colspan=1 ></td>
                                                <td height=30 colspan=1 ></td>
                                            </tr>
                                            <tr>
                                                <td height=30 colspan=1 ></td>
                                                <td height=30 colspan=1 ></td>
                                            </tr>
                                            <tr>
                                                <td height=30 colspan=1 ></td>
                                                <td height=30 colspan=1 ></td>
                                            </tr>
                                            <tr>
                                                <td height=30 colspan=1 ></td>
                                                <td height=30 colspan=1 ></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: right; ">SUB TOTAL (incl GST)</td>
                                                <td height=30 colspan=1 ><input type="text" class="form-control" name="sub_total" placeholder="" value="" /></td>
                                            </tr>
                                        </Table>
                                        <label for="worrning"><font color="red">This is the only TAX INVOICE in respect of this transaction</font></label><br>

                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="value" class="margin-left-right-top-10px"><em>Value (inc GST) &#36;:</em></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="value_p" placeholder="" value="" />
                                            </div>
                                        </div><br>

                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="sign" class="margin-left-right-top-10px"><em>Sign: </em></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="" placeholder="" value="" />
                                            </div>
                                        </div>
                                        <label for="worrning"><font color="red">Only valid if signed by purchaser</font></label><br>

                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="net-trad-allow" class="margin-left-right-top-10px"><em><size">Less Net Trade in Allowance as Detailed :</size></em></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="less_net_trade" placeholder="" value="" />
                                            </div>
                                        </div><br>
                                        
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="less-en-bal" class="margin-left-right-top-10px" ><b><em><size style="font-size:20px">Net Price &#36;:<br></size></em></b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="net_price" placeholder="" value="" />
                                            </div>
                                        </div><br>

                                        <table class="table-price">
                                            <tr>
                                                <td height=30 colspan=1  style="text-align: center;"><b>SUMMARY <br>Cash Payments</b></td>
                                                <td height=30 colspan=1  style="text-align: center;"><b>AMOUNT</b></td>
                                            </tr>
                                            <tr>
                                                <td height=30 colspan=1>Deposit on signing (refer condition 8)</td>
                                                <td height=30 colspan=1><input type="text" class="form-control" name="deposit_signing" placeholder="" value="" /></td>
                                            </tr>
                                            <tr>
                                                <td height=30 colspan=1>Additional Payment</td>
                                                <td height=30 colspan=1><input type="text" class="form-control" name="add_pay" placeholder="" value="" /></td>
                                            </tr>
                                            <tr>
                                                <td height=30 colspan=1>Due on Delivery</td>
                                                <td height=30 colspan=1><input type="text" class="form-control" name="due_delivery" placeholder="" value="" /></td>
                                            </tr>
                                        </table><br>

                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="less-en-bal" class="margin-left-right-top-10px" ><b><em><size style="font-size:20px">TOTAL CASH &#36;:<br></size></em></b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="total_cash" placeholder="" value="" />
                                            </div>
                                        </div><br>

                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="less-en-bal" class="margin-left-right-top-10px" ><b><em><size style="font-size:20px">BALANCE TO BE PAID &#36;:<br></size></em></b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="bal_to_be_paid" placeholder="" value="" />
                                            </div>
                                        </div><br>

                                        <pre class="border-top-black margin-top-5px"><b>To be financed by:  <input type="text" class="finance-name" style="width: 15%!important;" name="finance_by" value="" id="finance-name" /> I wich to finance the balance outstanding<br>together with charges over a priod of <input type="text" class="month" style="width: 15%!important;" name="months" value="" id="month" /> months</em></b></pre>

                                        
                                    </div>
                                </div>
                                <br>
                                
                            </form>
                    </div>
                </div> 
                <!--end payment information  -->
                <!-- Purchase Information -->
                <div class="row">
                    <div class="col-md-12 ">
                        <h4>Terms and Agremment Information</h4>
                            <form action="{{ route('termsagree') }}" method="POST">
                                <div class="row terms-row">
                                    <div class="col-md-5 form-group margin-top-15px trad-agree-from">
                                        <div class="mvt-label"><h4>INSURANCE</font></h4></div>

                                        <div class="row align-items-mid">
                                            <div class="col-md-1">
                                                <label for="value" class="margin-left-right-top-10px"><b>OR</b></label>
                                            </div>
                                            <div class="col-md-11">
                                                <pre>1. I shall arrange my own insurance as from delivery<br><em>2. Please arrange the cover set out at my expense</em><br><em>(Delete one clause - purchaser to intial)</em><br></pre>
                                            </div>
                                        </div><br>

                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="value" class="margin-left-right-top-10px">Company:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="" value="" />
                                            </div>
                                        </div><br>

                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="value" class="margin-left-right-top-10px">Amount of Cover  &#36;:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="" value="" />
                                            </div>
                                        </div><br>

                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="value" class="margin-left-right-top-10px">Cover Note or Policy No:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="" value="" />
                                            </div>
                                        </div><br>

                                        <pre>1. I aknowledge that the vehicle is at my risk untile<br> the insurer notifies me of its acceptance of the risk.</pre>


                                    </div>
                                    <div class="col-md-6 form-group margin-top-15px trad-agree-from">
                                        <div class="mvt-label"><h4>THE PURCHASER ACKNOWLEDGES AND CERTIFIES THAT</h4></div>

                                        <pre style="text-align: center;">The goods to be supplied are being acquired for the purpose of<br>the purchasers business and accordingly the parties agree that<br>the provisions of the Consumer Gurantees Act 1993 will not apply.</pre>
                                        
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="value" class="margin-left-right-top-10px">Purchaser</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="" value="" />
                                            </div>
                                        </div><br><br><br>

                                        <div class="row align-items-center">
                                            <div class="col-md-12">
                                                <label for="value" class="margin-left-right-top-10px"><b>IF CLAUSE APPLIES, PURCHASER MUST INITIAL</b></label>
                                                <input type="text" class="form-control" placeholder="" value="" />
                                            </div>
                                        </div><br>
                                    </div>
                                </div>
                                <div class="row terms-row">
                                    <div class="col-md-5 form-group margin-top-15px mvt-accp-from">
                                        <div class="mvt-label"><h4>MOTOR VEHICLE TRADER'S ACCEPTANCE</font></h4></div>

                                        <pre style="text-align: center;">The foregoing in respect of the vehicle to be purchased<br>and of the vehicle to be traded(if any) are accepted<br>on the terms and condition set out</pre>


                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="sign" class="margin-left-right-top-10px"><em>Signature: </em></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="" value="" />
                                            </div>
                                        </div><br>
                                        <label for="worrning" ><font color="red">Motor Vehicle trader/Manager/Salesman</font></label><br><br>   

                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <label for="accpt-date" class="margin-left-right-top-10px"><em>Acceptance Date: </em></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="" value="" />
                                            </div>
                                        </div><br>
                                    </div>
                                    <div class="col-md-6 form-group margin-top-bottom-auto ">
                                        <h4>Purchaser Offer and Agreement</h4>
                                            <form action="" method="POST">
                                                
                                                <pre>I offer to purchase the above vehicle / motorcycle on the following basis:<br>&nbsp;&nbsp;<b>1. Terms and Conditions:</b> I acknowledge that i have read, understood and agree to be bound by the Terms and Conditions appearing overleaf.<br>&nbsp;&nbsp;<b>2. Consumer Information Notice (Window Card):</b> I acknowledge that i have been provided with and have signed a copy of the comnsumer information Notice<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;attached to the vehicle and that i have read, understood and accept the contents of the notice.<br>&nbsp;&nbsp;<b>3. Sign Documents:</b> I agree to do all acts and sign all documents necessary to give effect to the agreement.<br>&nbsp;&nbsp;<b>4. Odometer reading:</b> I acknowledge that the motor vehicle trader has explained to me the odometer reading of the vehicle in accordance with<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the information stated on the Supplier Information Notice.<br>&nbsp;&nbsp;<b>5. Retention of the Title:</b> I acknowledge that the motor vehicle Trader has explained to me the effects of clause 3 of the Terms and Conditions<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;overleaf and that i understand the effect of the clause.<br>&nbsp;&nbsp;<b>6. Privacy Act:</b> I authorise the motor Vehicle Trader to use any information provided by me in this Agreement for the purpose referred to in<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caluse 14 of the Terms and conditions Overleaf.<br>&nbsp;&nbsp;<b>7.</b> Consumer Guarantees Act 1993: The Consumer Guarantees Act 1993, Applicable to this agreement, provides the Purchaser with rights and<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tremedies on the sale of new or used motor vehicles of a type ordinarily acquired for personal, domestic or household use.<br>&nbsp;&nbsp;<b>7.1:</b> I agree that if i am accquiring the vehicle for business purpose in terms of sections 2 and 43 of the Consumer Guarantees Act 1993<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and the provisions of the act will not apply accordingly.<br>&nbsp;&nbsp;<b>8.</b> If this is an uninvited direct sale, as defined by s.36k of the fair Trading Act 1986 then the Purchaser has a right to cancel this agreement<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;under s.36M(1) by giving oral or written notice of cancellation to the above Motor Vehicle Trader within 5 working days after the date the purchaser<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;receives a copy of it.<br>&nbsp;&nbsp;<b>9. Acceptance of offer:</b> The Purchase acknowledges that this offer to purchase with not be binding unless and until it is accepted by an authorised<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;officer of the Motor Vehicle trader by signature in the space provider below:<br>

                                                </pre>

                                                <pre class="margin-top-5px"><b>I acknowledge receipt of a copy of this agreement and i request delivery <br>at <input type="time" class="finance-name" style="width: 15%!important;" name="finance_by" value="" id="finance-name" /> o'clock on <input type="date" class="month" style="width: 15%!important;" name="months" value="" id="month" /></b></pre>

                                                <pre class="margin-top-5px"><b>Signed: <input type="text" class="finance-name" style="width: 15%!important;" name="finance_by" value="" id="finance-name" /> (purchaser) Offer Date: <input type="date" class="month" style="width: 15%!important;" name="months" value="" id="month" /></b></pre>
                                                
                                                <br>
                                                
                                            </form>                                                                    
                                    </div>
                                </div>
                                <br>
                            </form>
                    </div>
                </div>
                <!-- End purchase information -->
                <div class="form-group">
                    <button type="submit" id="btn-sub" class="btn btn-primary" name="submit">Print</button>
                </div>
            </form>
        <!-- end customer information -->
    </div>
</body>
</html>

