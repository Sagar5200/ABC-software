<?php

namespace App\Http\Controllers;

use App\Models\Carjampurchased;
use App\Models\Carjamtrade;
use App\Models\Customer;
use App\Models\DataConnection;
use App\Models\MVTinfo;
use App\Models\Purchasepp;
use App\Models\Purchaser;
use App\Models\TradeAgreement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Insurance;
use App\Models\MVTAcceptance;
use App\Models\PurchaseAcknow;
use Illuminate\Support\Facades\DB as FacadesDB;


class DataConnectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customerinfo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // customer storge
            $Customer = new Customer();

            $Customer->customer_name = request('customer_name');
            $Customer->cust_email = request('cust_email');
            $Customer->date = request('date');
            $Customer->mvt = request('mvt');

            $Customer->save();
        // MVT Storge
            $MVTinfo = new MVTinfo();

            $MVTinfo->register_name = request('register_name');
            $MVTinfo->trading_as = request('trading_as');
            $MVTinfo->mvt_address = request('mvt_address');
            $MVTinfo->email = request('email');

            $MVTinfo->save();
        // Purchaser Storge
            $Purchaser = new Purchaser();

            $Purchaser->we_name = request('we_name');
            $Purchaser->post_address = request('post_address');
            $Purchaser->driver_lic_ltsa = request('occupation');
            $Purchaser->occupation = request('employer');
            $Purchaser->employer = request('drive_lic_ltsa');
            $Purchaser->bank = request('bank');
            $Purchaser->dob = request('dob');
            $Purchaser->phone_home = request('phone_home');
            $Purchaser->phone_business = request('phone_business');

            $Purchaser->save();

        return redirect('carinfo');
    }

    public function carstore(Request $request)
    {
        // Carjam Purchased storge
        $Carjampurchased = new Carjampurchased();

        $Carjampurchased->registration_no = request('registration_no');
        $Carjampurchased->make = request('make');
        $Carjampurchased->model = request('model');
        $Carjampurchased->vehicle_year = request('vehicle_year');
        $Carjampurchased->engine_no = request('engine_no');
        $Carjampurchased->year_of_registration = request('year_of_registration');
        $Carjampurchased->first_registration_nz = request('first_registration_nz');
        $Carjampurchased->chassis_no = request('chassis_no');
        $Carjampurchased->engine_capacity = request('engine_capacity');
        $Carjampurchased->fuel_type = request('fuel_type');
        $Carjampurchased->colour = request('colour');
        $Carjampurchased->dist_vehicle_travelled = request('dist_vehicle_travelled');
        $Carjampurchased->wof_details = request('wof_details');
        $Carjampurchased->special_condition = request('special_condition');
        $Carjampurchased->special_purpose = request('special_purpose');

        $Carjampurchased->save();

        return redirect('carinfo');
    }


    public function cartradestore(Request $request)
    {
    // Carjam Trade storge
        $Carjamtrade = new Carjamtrade();

        $Carjamtrade->registration_no = request('registration_no');
        $Carjamtrade->make = request('make');
        $Carjamtrade->model = request('model');
        $Carjamtrade->colour = request('colour');
        $Carjamtrade->vehicle_year = request('vehicle_year');
        $Carjamtrade->engine_no = request('engine_no');
        $Carjamtrade->wof_details = request('wof_details');
        $Carjamtrade->first_registration_nz = request('first_registration_nz');
        $Carjamtrade->chassis_no = request('chassis_no');
        $Carjamtrade->cc_rating = request('cc_rating');
        $Carjamtrade->no_of_owner_nz = request('no_of_owner_nz');
        $Carjamtrade->motive_power = request('motive_power');
        $Carjamtrade->present_odometer = request('present_odometer');
        $Carjamtrade->extra_fitted = request('extra_fitted');
        //$Carjampurchased->special_purpose = request('special_purpose');

        $Carjamtrade->save();

        return redirect('paymentinfo');
    }    

    public function paymentstore(Request $request)
    {
        // Trade Agreement
        $TradeAgreement = new TradeAgreement();

        $TradeAgreement->purchase_price = request('purchase_price');
        $TradeAgreement->value = request('value');
        $TradeAgreement->less_encum_bal = request('less_encum_bal');
        $TradeAgreement->net_trade_allowance = request('net_trade_allowance');
        $TradeAgreement->pay_encumbrance = request('pay_encumbrance');

        $TradeAgreement->save();

        // Purchase price and payment 
        $Purchasepp = new Purchasepp();

        $Purchasepp->value_p = request('value_p');
        $Purchasepp->less_net_trade = request('less_net_trade');
        $Purchasepp->net_price = request('net_price');
        $Purchasepp->deposit_signing = request('deposit_signing');
        $Purchasepp->add_pay = request('add_pay');
        $Purchasepp->due_delivery = request('due_delivery');
        $Purchasepp->total_cash = request('total_cash');
        $Purchasepp->bal_to_be_paid = request('bal_to_be_paid');
        $Purchasepp->sub_total = request('sub_total');
        $Purchasepp->finance_by = request('finance_by');
        $Purchasepp->months = request('months');

        $Purchasepp->save();

        return redirect('termsagreement');
    }

    public function termsstore(Request $request)
    {
        // insurance
        $Insurance = new Insurance();

        $Insurance->company = request('company');
        $Insurance->amount_of_cover = request('amount_of_cover');
        $Insurance->cover_or_policy_no = request('cover_or_policy_no');
        

        $Insurance->save();

        // Purchaser knowledge and certifies
        $PurchaseAcknow = new PurchaseAcknow();

        $PurchaseAcknow->purchaser = request('purchaser');
       
        $PurchaseAcknow->save();

        // Motor vehicle trader's acceptance
        $MVTAcceptance = new MVTAcceptance();

        $MVTAcceptance->acceptance_date = request('acceptance_date');        

        $MVTAcceptance->save();

        return redirect('reviewdata');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataConnection  $dataConnection
     * @return \Illuminate\Http\Response
     */
    public function show(DataConnection $dataConnection)
    {
       
            $customer = Customer::latest()->first();
            
            // return view('ConfirmationDetail',['customer'=>$customer]);
            
            $mvtinfo = MVTinfo::latest()->first();
            
            

            $carjampur = Carjampurchased::latest()->first();

            // return view('ConfirmationDetail',['carjampur'=>$carjampur]);

            $carjamtrade = Carjamtrade::latest()->first();

            // return view('ConfirmationDetail',['carjamtrade'=>$carjamtrade]);

            $purchaser = Purchaser::latest()->first();

            // return view('ConfirmationDetail',['purchaser'=>$purchaser]);

            $purchasepp = Purchasepp::latest()->first();

            // return view('ConfirmationDetail',['purchasepp'=>$purchasepp]);

            $insurance = Insurance::latest()->first();

            // return view('ConfirmationDetail',['insurance'=>$insurance]);

            $purchaseacknow = PurchaseAcknow::latest()->first();

            // return view('ConfirmationDetail',['purchaseacknow'=>$purchaseacknow]);

            $mvtacceptance = MVTAcceptance::latest()->first();

            // return view('ConfirmationDetail',['mvtacceptance'=>$mvtacceptance]);

            $tradeagreement = TradeAgreement::latest()->first();

            // return view('ConfirmationDetail',['tradeagreement'=>$tradeagreement]);

            return view('ConfirmationDetail',['customer'=>$customer],['mvtinfo'=>$mvtinfo],['purchaser'=>$purchaser],['carjampur'=>$carjampur],['carjamtrade'=>$carjamtrade],['purchasepp'=>$purchasepp],['insurance'=>$insurance],['purchaseacknow'=>$purchaseacknow],['mvtacceptance'=>$mvtacceptance],['tradeagreement'=>$tradeagreement]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataConnection  $dataConnection
     * @return \Illuminate\Http\Response
     */
    public function edit(DataConnection $dataConnection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataConnection  $dataConnection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataConnection $dataConnection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataConnection  $dataConnection
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataConnection $dataConnection)
    {
        //
    }
}
