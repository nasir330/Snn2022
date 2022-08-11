<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvoiceHeader;
use App\Models\Invoice;


class InvoiceController extends Controller
{
    public function index(Request $request ) {
        $data = InvoiceHeader::all();        
        return view("templates.Invoice.index", ['data'=>$data]);
       // session()->flash('success','Invoice created successfully..!!');      
        //return redirect()->back();        
    }

    public function create(Request $request) {
        return view("templates.CreateInvoice.index");
    }

    public function invoiceCreate(Request $request) {
        $data = $request->all();
        Invoice::create($data);
       
        session()->flash('success','Customer Information submitted successfully..!!');
        return redirect()->route('invoice-step2'); 
    }

    public function invoiceStep2(Request $request) {       
        $data = Invoice::all();
        
        $noOfDays = 14;
        return view("templates.CreateInvoice.step2",['data'=>$data,'noOfDays'=>$noOfDays]); 
    }

    //set invoice header
    public function setHeader(Request $request ) {
        $data = $request->all();
        InvoiceHeader::create($data);
        session()->flash('success','Invoice Header created successfully..!!');
        return redirect()->back(); 
    }
}
