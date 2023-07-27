<?php

namespace App\Http\Controllers\Backend\Feature;

use Illuminate\Http\Request;
use App\Models\Feature\Order;
use App\Mail\InvoiceOrderMailable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Repositories\CrudRepositories;



class OrderController extends Controller
{   
    protected $order;
    public function __construct(Order $order)
    {
        $this->order = new CrudRepositories($order);
    }

    public function index($status = null)
    {
        if($status == null){
            $data['order'] = $this->order->get();
        }else{
            $data['order'] = $this->order->Query()->where('status',$status)->get();
        }
        return view('backend.feature.order.index',compact('data'));
    }

    public function show($id)
    {
        $data['order'] = Order::find($id);
        return view('backend.feature.order.show',compact('data'));
    }

    public function inputResi(Request $request)
    {
        $request->merge(['status' => 2]);
        $this->order->Query()->where('invoice_number',$request->invoice_number)->first()->update($request->only('status','receipt_number'));
        return back()->with('success',__('message.order_receipt'));
    }

    public function mailInvoice(int $orderId)
    {
        try{
            $order = Order::findorFail($orderId);
       
            Mail::to("$order->email")->send(new InvoiceOrderMailable($order));
            return redirect('app/feature/order/detail/'.$orderId)->with('message','Invoice Mail has been sent to '.$order->email);
        }catch(\Exception $e){
            return redirect('app/feature/order/detail/'.$orderId)->with('message','Something Went Wrong.! ');
        }
        
    }
}
