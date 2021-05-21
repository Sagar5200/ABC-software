
        <div class="container payment-container">
            <div class="row">
                <div class="col-md-12 payment-form-1">
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
                            <div class="form-group">
                                <button type="submit" id="btn-sub" class="btn btn-primary" name="submit">Next</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>