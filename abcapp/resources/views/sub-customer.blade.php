<div class="container customer-container">
    <div class="row">
        <div class="col-md-12 customer-form-1">
            <h4>Customer Information</h4>
            <form action="{{ route('store') }}" method="POST">
                <div class="form-group">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group margin-top-15px margin-bottom-15px">
                            <label for="date">Date:</label>
                            <input type="date" class="form-control" placeholder="Date" name="date" value="" />
                        </div>
                        <div class="col-md-6 form-group margin-top-15px margin-bottom-15px">
                            <label for="mvt">Motor Vehicle Trade:</label>
                            <input type="text" class="form-control" placeholder="Your Motor vehicle Trade" name="mvt" value="" />
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-6 form-group margin-top-15px margin-bottom-15px">
                        <label for="cust_name">Customer Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Customer Name" name="customer_name" value="" />
                    </div>
                    <div class="col-md-6 form-group margin-top-15px margin-bottom-15px">
                        <label for="cust_email">Customer Email:</label>
                        <input type="text" class="form-control" placeholder="Enter Customer Email" name="cust_email" value="" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 form-group margin-top-15px mvt-from">
                        <div class="mvt-label"><h4>MOTOR VEHICLE TRADER</h4></div>
                        <label for="registered_name" class="margin-left-right-top-10px">Registered Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Registered Name" name="register_name" value="" />
                        
                        <label for="trading_as" class="margin-left-right-top-10px">Trading As:</label>
                        <input type="text" class="form-control" placeholder="Enter Trading as" name="trading_as" value="" />
                        
                        <label for="address" class="margin-left-right-top-10px">Address:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="mvt_address" rows="3"></textarea>
                        
                        <label for="mvt-email" class="margin-left-right-top-10px">Email:</label>
                        <input type="text" class="form-control margin-bottom-15px" placeholder="Email *" name="email" value="" />
                    </div>
                    <div class="col-md-6 form-group margin-top-15px purchaser">
                        <div class="purch-label"><h4>PURCHASER</h4></div>
                        <label for="name" class="margin-left-right-top-10px">I/We: Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="we_name" value="" />

                        <label for="Res_post_address" class="margin-left-right-top-10px">Residential/Postal Address:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="post_address" rows="3"></textarea>
                        
                        <label for="occupation" class="margin-left-right-top-10px">Occupation:</label>
                        <input type="text" class="form-control" placeholder="Enter Occupation" name="occupation" value="" />
                        
                        <label for="employer" class="margin-left-right-top-10px">Employer:</label>
                        <input type="text" class="form-control margin-bottom-15px" placeholder="Employer" name="employer" value="" />

                        <label for="Drive_lice_ltsa" class="margin-left-right-top-10px">Driver Licence/LTSA No:</label>
                        <input type="text" class="form-control" placeholder="Enter Driver Licence/LTSA number" name="drive_lic_ltsa" value="" />
                        
                        <label for="bank" class="margin-left-right-top-10px">Bank:</label>
                        <input type="text" class="form-control" placeholder="Enter Bank detail" name="bank" value="" />
                        
                        <label for="DOB" class="margin-left-right-top-10px">Date Of Birth:</label>
                        <input type="date" class="form-control" placeholder="Date" name="dob" value="" />

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
                <div class="form-group">
                    <button type="submit" id="btn-sub" class="btn btn-primary" name="submit">Next</button>
                </div>
            </form>
        </div>
    </div>
</div>  
	