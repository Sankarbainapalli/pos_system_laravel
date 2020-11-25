<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Category;
use App\Models\Stock;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Liveamount;
use App\Models\Customer;
use App\Models\Apidata;
use App\Models\Orderitem;
use App\Models\Order;
use DB;

class PosController extends Controller
{
    //

    public function index(){

    	$total_sum=Stock::sum('qty');
    	$category_list=Category::all();
    	$product_list=Product::all();
        $customer_list=Customer::all();

    	return view('admin.Pos.list',compact('category_list','total_sum','product_list','customer_list'));
    }

 
    public function invoice($id){

    $order_list=Orderitem::where('order_id',$id)->get();
    $order_r=Order::where('id',$id)->get();

    return view('invoice_print',compact('order_list','order_r'));

     }

     public function getProduct()
    {

        $product_list=Product::all();

        echo json_encode($product_list);
     

    }

     public function getCart()
    {

        $product_list=Cart::all();

        echo json_encode($product_list);

    }

     public function getApiData()
    {

        // $apidata=Apidata::orderBy('id', 'DESC')->get();

        $data1=file_get_contents('http://askmeguru.com/APISETUP/api.php');

          $data=json_decode($data1);

          echo json_encode($data);

    }


     public function delete_all_cart()
    {

        $product_list=Cart::truncate();

         $response_array['success'] = 'success';

             echo json_encode($response_array);  

    }
    



     public function addProduct(Request $request)
    {

        
        $cart_cnt=Cart::where('product_id',$request->product_id)->count();
            // return $cart_cnt;
        if($cart_cnt==0){

       Cart::create($request->all());

       $query="SELECT * FROM `liveamounts` as lv INNER JOIN products as pr on pr.id=lv.product_id  WHERE lv.product_id='".$request->product_id."' ";


            $product_list=DB::select(DB::raw($query));  

            // echo $product_list; 

        // $product_list=Liveamount::where('product_id',$request->product_id)->get();

        echo json_encode($product_list);

 }else{

    $cart_list=Cart::where('product_id',$request->product_id)->get();
           
         foreach ($cart_list as $cart) {

           if($cart->product_id==$request->product_id){ 

             $response_array['success'] = 'success';

             echo json_encode($response_array);    

     }else{

        Cart::create($request->all());

        $product_list=Liveamount::where('product_id',$request->product_id)->get();

        echo json_encode($product_list);
     }
 }
     }
        // }

         

        // Cart::create($request->all());

        //  $product_list=Liveamount::where('product_id',$request->product_id)->get();

        // echo json_encode($product_list);

    }

      public function removeProduct(Request $request)
    {

        $product_list=Cart::where('product_id',$request->product_id)->delete();

        // echo json_encode($product_list);

       $response_array['status'] = 'success';    

        echo json_encode($response_array);

    }

}