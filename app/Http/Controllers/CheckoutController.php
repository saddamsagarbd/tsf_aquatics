<?php

namespace App\Http\Controllers;

use App\Mail\CustomerInvoiceMail;
use Illuminate\Http\Request;
use DB;
use Session;
use Cart;
use Validator;
use PDF;
use Illuminate\support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
session_start();

class CheckoutController extends Controller
{
    public function index(){
        return view('frontend.pages.checkout');

    }

    // front user login

    public function LoginCheck(){
        return view('frontend.pages.front_user_login');
    }

    // customer registration

    public function customer_registration(Request $request){

    	$data = array();

    	$data['customer_name']=$request->customer_name;
    	$data['customer_email']=$request->customer_email;
    	$data['customer_phone']=$request->customer_phone;
    	$data['customer_pass']=md5($request->customer_pass);

    	$customer_id=DB::table('tbl_customer')
        ->insertGetId($data);
        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$request->customer_name);
//        return Redirect::to('/checkout');
        return \redirect('/checkout');
    }

    // customer login

    public function customer_login(Request $request){
        $email = $request->customer_email;
        $pass = md5($request->customer_pass);

        $result = DB::table('tbl_customer')
        ->where('customer_email',$email)
        ->where('customer_pass',$pass)
        ->first();
                /*echo "<pre>";
                print_r($result);
                exit();
                echo "</pre>";*/
                if ($result) {
                    Session::put('customer_id',$result->customer_id);
                    Session::put('customer_name',$result->customer_name);
                    return Redirect::to('/checkout');
                }else{
                    Session::put('message','Invalid email/password');
                    return Redirect::to('/user-login');
                }

            }

    // shipping save
        public function saveShipping(Request $request){

            return $this->sendMailToCustomer($request, $data);
            return $request->all();

                $validator = Validator::make($request->all(),[
                    'shipping_email' => 'required',
                    'shipping_first_name' => 'required',
                    'shipping_last_name' => 'required',
                    'shipping_address' => 'required',
                    'shipping_phone' => 'required',
                    'shipping_city' => 'required'
                ]);

                if ($validator->fails()) {

                  return Redirect::to('/checkout')->with(['errors'=>$validator->errors()]);
              }else{
                $data=array();
                $data['shipping_email']         =$request->shipping_email;
                $data['shipping_first_name']    =$request->shipping_first_name;
                $data['shipping_last_name']     =$request->shipping_last_name;
                $data['shipping_address']       =$request->shipping_address;
                $data['shipping_phone']         =$request->shipping_phone;
                $data['shipping_city']          =$request->shipping_city;
                $data['customer_id']            =Session::get('customer_id');


                $shipping_id = DB::table('tbl_shipping')
                                ->insertGetId($data);
                Session::put('shipping_id', $shipping_id);
                
                $count_orders = DB::table('place_orders')->get();
                
                $products = Cart::content();
                $product_ids = [];
                
                foreach ($products as $product) {

                    array_push($product_ids, $product->id);

                }

                $order = [];
                $initial_digit = 100 + count($count_orders);
                $order['order_id'] = '#SP-'.($initial_digit + 1);
                $order['order_details'] = json_encode($product_ids);
                $order['order_subtotal'] = Cart::subtotal();
                $order['shipping_charge'] = 50;
                $order['order_total'] = Cart::total() + 50;
                $order['shipping_id'] = Session::get('shipping_id');
                $order['order_placed_by'] = Session::get('customer_id');
                $order['created_at'] = date('Y-m-d H:i:s');

                DB::table('place_orders')->insert($order);

                return Redirect::to('/payment');

            }
        }
    // customer logout
        public function customerLogout(){
           Session::flush();
           Cart::destroy();
    	//Session::put('msg','Successfully Logout');
           return Redirect::to('/');
       }
    // payment
       public function Payment(){
        $allPublishedCategory = DB::table('tbl_categories')->where('publication_status',1)->get();

        $order = DB::table('place_orders')
                    ->select('place_orders.*', 'tbl_shipping.*')
                    ->join('tbl_shipping', "tbl_shipping.shipping_id", "place_orders.shipping_id") 
                    ->where([
                        'place_orders.order_placed_by' => Session::get('customer_id'), 
                        'place_orders.payment_status' => 0]
                    )
                    ->orderBy('place_orders.id', 'desc')
                    ->first();

        return view('frontend.pages.payment')->with(['order' => $order,'all_publish_category' => $allPublishedCategory]);
    }

    protected function sendMailToCustomer($request, $data)
    {
//        return view('mail.customer-invoice-template', ['data' => '']);
        try {
            $customer_email = 'akashm21412111026@gmail.com';
            $data = [
                'name' => 'M.A Aziz',
                'address' => 'Ashkona hazicamp'
            ];

            Mail::to($customer_email)
                ->send(new CustomerInvoiceMail($data));
            return 'Mail send success to customer';
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
