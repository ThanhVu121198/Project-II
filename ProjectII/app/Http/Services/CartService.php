<?php


namespace App\Http\Services;


use App\Jobs\SendMail;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class CartService
{
    public function create($request)
    {

        $qty = (int)$request->input('num_product');
        $product_id = (int)$request->input('product_id');

        if ($qty <= 0 || $product_id <= 0) {
            Session::flash('error', 'Số lượng hoặc Sản phẩm không chính xác');
            return false;
        }

        //Session::forget('carts');
        $carts = Session::get('carts');

        if (is_null($carts)) {
            Session::put('carts', [
                $product_id => $qty
            ]);
            //$carts = session('carts');
            return true;
        }
        //$carts = session('carts');

        //dd($carts);


        $exists = Arr::exists($carts, $product_id);
        //dd($exists);
        if ($exists) {
            // $carts[$product_id] = $carts[$product_id] + $qty;
            $carts[$product_id] = $carts[$product_id] + $qty;
            Session::put('carts', $carts);
            //$carts = session('carts');
            return true;
        }

        // Session::put('carts', [
        //     $product_id => $qty
        // ]);

        // return true;

        $carts[$product_id] = $qty;
        Session::put('carts', $carts);

        return true;
    }

    public function createHome($data)
    {

        $qty = (int)$data[1];
        $product_id = (int)$data[0];

        if ($qty <= 0 || $product_id <= 0) {
            Session::flash('error', 'Số lượng hoặc Sản phẩm không chính xác');
            return false;
        }

        //Session::forget('carts');
        $carts = Session::get('carts');

        if (is_null($carts)) {
            Session::put('carts', [
                $product_id => $qty
            ]);
            //$carts = session('carts');
            return true;
        }
        //$carts = session('carts');

        //dd($carts);


        $exists = Arr::exists($carts, $product_id);
        //dd($exists);
        if ($exists) {
            // $carts[$product_id] = $carts[$product_id] + $qty;
            $carts[$product_id] = $carts[$product_id] + $qty;
            Session::put('carts', $carts);
            //$carts = session('carts');
            return true;
        }

        // Session::put('carts', [
        //     $product_id => $qty
        // ]);

        // return true;

        $carts[$product_id] = $qty;
        Session::put('carts', $carts);

        return true;
    }

    public function getProduct()
    {
        $carts = Session::get('carts');
        if (is_null($carts)) return [];
        $product_carts = [];

        foreach($carts as $key => $cart_quantity){
            $product = Product::where('id', $key)->with('productImages')->first();
            if($product != null){
                $product['quantity_cart'] = $cart_quantity;
                array_push($product_carts, $product);
            }

        }
        Session::put('mini-carts', $product_carts);
        return $product_carts;
    }

    public function update($request)
    {
        Session::put('carts', $request->input('num_product'));

        return true;
    }

    public function remove($id)
    {
        $carts = Session::get('carts');
        unset($carts[$id]);

        Session::put('carts', $carts);
        return true;
    }

    public function addCart($request)
    {
        try {
            DB::beginTransaction();

            $carts = Session::get('carts');

            if (is_null($carts))
                return false;

            $customer = Customer::create([

                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'company_name' => $request->input('company_name'),
                'address' => $request->input('address'),
                'town' => $request->input('town'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'checkout-mess' => $request->input('checkout-mess')
            ]);

            $this->infoProductCart($carts, $customer->id);

            DB::commit();
            Session::flash('success', 'Đặt Hàng Thành Công');

            #Queue
            // SendMail::dispatch($request->input('email'))->delay(now()->addSeconds(2));

            Session::forget('carts');
            Session::forget('mini-carts');

        } catch (\Exception $err) {
            DB::rollBack();
            Session::flash('error', 'Đặt Hàng Lỗi, Vui lòng thử lại sau');
            return false;
        }

        return true;
    }

    protected function infoProductCart($carts, $customer_id)
    {
        $productId = array_keys($carts);
        $products = Product::select('id', 'name', 'price','img')
            ->whereIn('id', $productId)
            ->get();

        $data = [];
        foreach ($products as $product) {
            $data[] = [
                'customer_id' => $customer_id,
                'product_id' => $product->id,
                'quantity'   => $carts[$product->id],
                'buy_price' => $product->price
            ];
        }

        return Cart::insert($data);
    }

    // public function getCustomer()
    // {
    //     return Customer::orderByDesc('id')->paginate(15);
    // }

    // public function getProductForCart($customer)
    // {
    //     return $customer->carts()->with(['product' => function ($query) {
    //         $query->select('id', 'name', 'thumb');
    //     }])->get();
    // }
}
