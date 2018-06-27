<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;
use PDF;
use App\Client;
use App\Product;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $invoices = Invoice::all();
        return view('admin.invoices.index',compact('invoices',$invoices));
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        $clients = Client::all();
        $produts = Product::all();
        return view('admin.invoices.create',compact('clients',$clients),compact('produts',$produts));
    }

    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(Request $request)
    {
        //Validate
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);

        $invoices = Invoice::create([
            'title' => $request->title,
            'description' => $request->description,
            'client_id' => $request->client_id,
            'product_id' => $request->product_id,

        ]);
        return redirect('admin/invoices/' . $invoices->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     *
     */
    public function show(Invoice $invoice)
    {
        $invoice_id = $invoice->id;
        $clients = Invoice::with('user')->where('id','=',$invoice_id)->get();

        $invoices = Invoice::with('products')->where('id', '=', $invoice_id)->firstOrFail();
        return view('admin.invoices.show', compact('invoice','invoices'),compact('clients'));

        return view('admin.invoices.show', compact('invoice', $invoice),compact('clients',$clients));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice

     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *

     * @param  \App\Invoice  $invoice

     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     *
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
    public function downloadPDF($id){
        $clients = Invoice::with('user')->where('id','=',$id)->get();
        $invoices = Invoice::with('products')->where('id', '=', $id)->firstOrFail();
        $invoice_spec = invoice::find($id);
        $view=view('admin.invoices.pdf',compact('invoices','clients','invoice_spec'));
        $html_content =$view->render();
        PDF::SetTitle('asdss');
        PDF::AddPage();
        $lg = Array();
        $lg['a_meta_charset'] = 'UTF-8';
        $lg['a_meta_dir'] = 'rtl';
        $lg['a_meta_language'] = 'fa';
        $lg['w_page'] = 'page';
        PDF::SetFont('dejavusans', '', 12);
        PDF::setRTL(true);
        PDF::Ln();
        PDF::setLanguageArray($lg);
        PDF::writeHTML($html_content,true, 0, true, 0);
        PDF::Output('SamplePDF.pdf');
//        return view('admin.invoices.show',compact('$invoice',$invoice));
    }
}
