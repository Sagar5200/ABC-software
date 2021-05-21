<div class="container payment-container">
    <div class="row">
        <div class="col-md-12 payment-form-1">
            <h4>Terms and Agremment Information</h4>
                <form action="{{ route('termsagree') }}" method="POST">
                @csrf
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
                                    <input type="text" class="form-control" name="company" placeholder="" value="" />
                                </div>
                            </div><br>

                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <label for="value" class="margin-left-right-top-10px">Amount of Cover  &#36;:</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="" name="amount_of_cover" value="" />
                                </div>
                            </div><br>

                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <label for="value" class="margin-left-right-top-10px">Cover Note or Policy No:</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="" name="cover_or_policy_no" value="" />
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
                                    <input type="text" class="form-control" placeholder="" name="purchaser" value="" />
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
                                    <input type="date" class="form-control" placeholder="" name="acceptance_date" value="" />
                                </div>
                            </div><br>
                        </div>
                        <div class="col-md-6 form-group margin-top-bottom-auto ">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"  value="" data-toggle="modal" data-target="#myModal">
                                <!-- <button class="btn btn-primary" onclick="openterm()" id="btn-popup">Purchaser Offer and Agreement</button> -->
                                <label class="form-check-label" for="flexCheckChecked">Purchaser Offer and Agreement</label>

                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">The terms and conditions on the reverse are part of this agreement</label>
                            </div>                            
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" id="btn-sub" class="btn btn-primary" name="submit">Review</button>
                    </div>
                </form>
                <form action="">
                

                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                                <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                            </div>

                        </div>
                        </div>
                </form>
               
        </div>
    </div>
</div>