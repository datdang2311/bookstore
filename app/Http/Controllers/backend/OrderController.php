<?php

namespace App\Http\Controllers\backend;

use App\Model\Customers;
use App\Model\OrderItems;
use App\Model\Orders;
use App\Model\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class orderController extends Controller
{
    public function getAll()
    {
        $orders = Orders::all()->toBase()->toArray();
        foreach ($orders as $order) {
            $customers[$order['id']] = Customers::find($order['CustomerId'])->toArray();
        }
        return view('backend.orders', ['orders' => $orders, 'customer' => $customers]);
    }

    public function editView($id)
    {
        $order = Orders::find($id)->toArray();
        $orderItems = OrderItems::all()->where('orderId', '=', $order['id'])->where('active', '=', 1)->toArray();
        foreach ($orderItems as $item) {
            $products[$item['id']] = Products::find($item['productId'])->toArray();
        }
        $customer = Customers::find($order['CustomerId'])->toArray();
        return view('backend.orders_detail', ['order' => $order, 'orderItems' => $orderItems, 'products' => $products, 'customer' => $customer]);
    }

    public function deleteProduct($orderId, $orderItemId)
    {
        $orderItem = new OrderItems();
        $orderItem->where('id', '=', $orderItemId)->update(['active' => 0]);
        return redirect(url('admin/orders/editView/'.$orderId));
    }
    public function edit(Request $request){
        $params = $request->toArray();
        $orderId = $params['orderId'];
        $name = $params['name'];
        $phoneNumber = $params['phoneNumber'];
        $address = $params['address'];
        $email = $params['email'];
        $orderStatus = $params['orderStatus'];
        $paymentMethod = $params['paymentMethod'];
        $paymentStatus = $params['paymentStatus'];
        $shipmentMethod = $params['shipmentMethod'];
        $shippingStatus = $params['shippingStatus'];

        $order = new Orders();
        $order->where('id','=',$orderId)->update(['ReceiverName'=>$name,
            'ReceiverPhone'=>$phoneNumber,
            'ReceiverAddress'=>$address,
            'PaymentMethod'=>$paymentMethod,
            'PaymentStatus'=>$paymentStatus,
            'ShipmentMethod'=>$shipmentMethod,
            'ShippingStatus'=>$shippingStatus
        ]);
        return redirect(url('admin/orders/editView/'.$orderId));
    }
}
