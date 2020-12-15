<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\Category;
use App\Models\Stock;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Liveamount;
use App\Models\Customer;
use App\Models\Apidata;
use App\Models\Orderitem;
use App\Models\Order;
use App\Models\Paymentmethod;
use DB;


class PosController extends Controller
{
    //

    public function index(){

    	$total_sum=Stock::sum('qty');
    	$category_list=Category::where('name', '!=', 'OTHERS')->where('name', '!=', 'COMBO')->get();
    	$product_list=Product::all();
        $customer_list=Customer::all();
        $paymentmethod_list=Paymentmethod::where('status','1')->get();

    	return view('admin.Pos.list',compact('category_list','total_sum','product_list','customer_list','paymentmethod_list'));
    }

    public function getDiscount(Request $request){

        $cnt_user=Order::where('cus_mobile',$request->mobile_no)->count();

        if($cnt_user=='3'){

            $discount='20';

         echo json_encode($discount);
         
        }
        else{

            $discount='0';

           echo json_encode($discount);
        }
    }

    public function byamount(){

        $total_sum=Stock::sum('qty');
        $category_list=Category::where('name', '!=', 'OTHERS')->where('name', '!=', 'COMBO')->get();
        $product_list=Product::all();
        $customer_list=Customer::all();
        $paymentmethod_list=Paymentmethod::where('status','1')->get();

        return view('admin.Pos.list_byamount',compact('category_list','total_sum','product_list','customer_list','paymentmethod_list'));
    }

    public function regularpos(){

        $total_sum=Stock::sum('qty');
        $category_list=Category::where('name', '!=', 'CHICKEN')->where('name', '!=', 'MUTTON')->where('name', '!=', 'FISH')->get();
        $product_list=Product::all();
        $customer_list=Customer::all();
        $paymentmethod_list=Paymentmethod::where('status','1')->get();


        return view('admin.Pos.list_regular',compact('category_list','total_sum','product_list','customer_list','paymentmethod_list'));
    }

 
    public function invoice($id){

    $order_list=Orderitem::where('order_id',$id)->get();
    $order_r=Order::where('id',$id)->get();

    return view('invoice_print',compact('order_list','order_r'));

     }

      public function regularinvoice($id){

    $order_list=Orderitem::where('order_id',$id)->get();
    $order_r=Order::where('id',$id)->get();

    return view('regular_invoice_print',compact('order_list','order_r'));

     }



     //By category fetch the products.

     public function getProduct(Request $request)
    {

        // if($request->category_id==0){

        //  $product_list=Product::all();  //Fetch all the product

        // }else{
            
        $product_list=Product::WHERE('category_id',$request->category_id)->get()->all();
  
        // }


        echo json_encode($product_list);

    }

    public function getLiveamount(){

        if(Auth::user()->role_id=="SUPERADMIN"){
              $liveamount_list=Liveamount::all();
        }else{

            $liveamount_list=Liveamount::where('branch_id',Auth::user()->frans_id)->where('created_at', '>=', date('Y-m-d').' 00:00:00')->get()->all();  
        }

       

        echo json_encode($liveamount_list);

    }


     public function getCart()
    {

        $product_list=Cart::all();

        echo json_encode($product_list);

    }

     public function getApiData(Request $request)
    {

            // dd($request->franchisee_id);return;

        // $data1=file_get_contents('http://askmeguru.com/APISETUP/api.php?id="FRD00'.$request->franchisee_id.'"');

        $data1=file_get_contents('http://askmeguru.com/APISETUP/api.php');

          $data=json_decode($data1);


          // $data=Apidata::where('branch_id',$request->franchisee_id)->get();

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

        if($cart_cnt==0){

        if(Auth::user()->role_id=='SUPERADMIN'){

        $total_stock=Stock::where('product_id',$request->product_id)->sum('qty'); 

       
        }else{

             $total_stock=Stock::where('product_id',$request->product_id)->where('franchisee_id',Auth::user()->frans_id)->sum('qty'); 

        }


        if($total_stock>1){

         

        // $query="SELECT * FROM `liveamounts` as lv INNER JOIN products as pr on pr.id=lv.product_id  WHERE lv.product_id='".$request->product_id."'  ";

        // Cart::create($request->all());

         if(Auth::user()->role_id=='SUPERADMIN'){

        $query="SELECT * FROM `liveamounts` as lv INNER JOIN products as pr on pr.id=lv.product_id  WHERE  lv.product_id='".$request->product_id."' ";

        Cart::create($request->all()); //Insert into cart product id.

          }

          if(Auth::user()->role_id=='FRANCHISEEOWNER' || Auth::user()->role_id=='STOREMANAGER'){

           

        $query="SELECT *, lv.rate as todayrate FROM `liveamounts` as lv INNER JOIN products as pr on pr.id=lv.product_id  WHERE  lv.product_id='".$request->product_id."' and lv.branch_id='".Auth::user()->frans_id."' "; 

         //Joins the product and liveamount tables

          Cart::create($request->all()); //Insert into cart product id.

          }

            $data=DB::select(DB::raw($query));  

            echo json_encode($data);


            // and 'created_at'>=date('Y-m-d H:i:sa')
          // DATE(`created_at`) = CURDATE()
          // where('created_at', '>=', date('Y-m-d').' 00:00:00')

       

       }else{

        $response_array['empty'] = 'empty';

        echo json_encode($response_array);   
       }

 }else{

    $cart_list=Cart::where('product_id',$request->product_id)->get();

           
         foreach ($cart_list as $cart) {

           if($cart->product_id==$request->product_id){ 

             $response_array['success'] = 'success';

             echo json_encode($response_array);    

     }
     // else{


     //    Cart::create($request->all());

     //    $product_list=Liveamount::where('product_id',$request->product_id)->get();

     //    echo json_encode($product_list);
     // }
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