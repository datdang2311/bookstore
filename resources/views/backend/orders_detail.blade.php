@extends('backend.layout')
@section('controller')
<div class="brw">
    <h6 class="bry">Quản lý Website</h6>
</div>
<div class="clearfix"></div>
{{--<br><br><br>--}}
{{--<div class="bpx azo">--}}
    {{--<div class="bpy bpz">--}}
        {{--<div class="ayt brg">--}}
            {{--<input type="text" class="form-control bvj" placeholder="Tìm kiếm">--}}
            {{--<span class="bv"><i class="fa fa-search" aria-hidden="true"></i></span>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="bpy">--}}
        {{--<div class="pz">--}}
            {{--<a href="news/addView">--}}
                {{--<button type="button" class="ce pi">--}}
                    {{--<i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>--}}
                {{--</button>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<h3 class="brx">Thông tin khách hàng</h3>
<form enctype="multipart/form-data" method="post" action="{{route('editOrder')}}" id="orderForm">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="orderId" value="{{$order['id']}}"/>
    <div class="line">
        <div class="col-md-2">Họ tên: </div>
        <div class="col-md-10">
            <input type="text" name="name" class="form-control" value="{{$order['ReceiverName']}}">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="line">
        <div class="col-md-2">Số điện thoại:</div>
        <div class="col-md-10">
            <input type="text" name="phoneNumber" class="form-control" value="{{$order['ReceiverPhone']}}">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="line">
        <div class="col-md-2">Địa chỉ giao hàng:</div>
        <div class="col-md-10">
            <input type="text" name="address" class="form-control" value="{{$order['ReceiverAddress']}}">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="line">
        <div class="col-md-2">Email:</div>
        <div class="col-md-10">
            <input type="text" name="email" class="form-control" value="{{$customer['email']}}" readonly>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="line">
        <div class="col-md-2">Trạng thái đơn hàng:</div>
        <div class="col-md-10">
            {{--<input type="text" name="orderStatus" class="form-control" value="{{$order['OrderStatus']}}">--}}
            <select class="form-select" name="orderStatus">
                <option {{ $order['OrderStatus']==1?"selected":"" }} value="1">Hoàn thành</option>
                <option {{ $order['OrderStatus']==0?"selected":"" }} value="0">Hủy</option>
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="line">
        <div class="col-md-2">Phương thức thanh toán:</div>
        <div class="col-md-10">
            {{--<input type="text" name="paymentMethod" class="form-control" value="{{$order['PaymentMethod']}}">--}}
            <select class="form-select" name="paymentMethod">
                <option {{ $order['PaymentMethod']==1?"selected":"" }} value="1">Thanh toán khi giao hàng</option>
                <option {{ $order['PaymentMethod']==2?"selected":"" }} value="2">Thanh toán qua ngân hàng</option>
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="line">
        <div class="col-md-2">Trạng thái thanh toán:</div>
        <div class="col-md-10">
            {{--<input type="text" name="paymentStatus" class="form-control" value="{{$order['PaymentStatus']}}">--}}
            <select class="form-select" name="paymentStatus">
                <option {{ $order['PaymentStatus']==0?"selected":"" }} value="0">Chưa thanh toán</option>
                <option {{ $order['PaymentStatus']==1?"selected":"" }} value="1">Đã thanh toán</option>
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="line">
        <div class="col-md-2">Phương thức vận chuyển:</div>
        <div class="col-md-10">
            <select class="form-select" name="shipmentMethod">
                <option {{ $order['ShipmentMethod']==0?"selected":"" }} value="0">Giao vận</option>
                <option {{ $order['ShipmentMethod']==1?"selected":"" }} value="1">Mua trực tiếp</option>
            </select>
            {{--<input type="text" name="shipmentMethod" class="form-control" value="{{$order['ShipmentMethod']}}">--}}
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="line">
        <div class="col-md-2">Trạng thái vận chuyển:</div>
        <div class="col-md-10">
            {{--<input type="text" name="shippingStatus" class="form-control" value="{{$order['ShippingStatus']}}">--}}
             <select class="form-select" name="shippingStatus">
                <option {{ $order['ShippingStatus']==0?"selected":"" }} value="0">Chưa giao hàng</option>
                <option {{ $order['ShippingStatus']==1?"selected":"" }} value="1">Đã giao</option>
            </select>
        </div>
    </div>
    {{--<div class="clearfix"></div>--}}

<div class="nu" style="margin-top: 65px">
    <h3 class="brx">Chi tiết sản phẩm</h3>
    <table class="ck" data-sort="table">
        <thead>
        <tr>
            <th width="60px" style="white-space: nowrap">Tên sản phẩm</th>
            <th width="110px">Ảnh</th>
            <th width="100px">Số lượng</th>
            <th width="100px">Giá</th>
            <th width="100px" >Thành tiền</th>
            {{--<th width="10px"></th>--}}
            <th width="10px"></th>
        </tr>
        </thead>
        @foreach($orderItems as $item)
        <tr>
            <td>{{$products[$item['id']]['name'] }}</td>
            <td>
                @if(!empty($products['image']))
                <img src="{{asset($products['image'])}}" alt="" width="50%"/>
                @endif
            </td>
            <td>{{$item['quantity'] }}</td>
            <td style="max-height: inherit">{{$products[$item['id']]['salePrice']}}</td>
            <td>{{$item['quantity']*$products[$item['id']]['salePrice']}}</td>
            {{--<td style="text-align: left">--}}
                {{--<a href="{{ url('admin/news/editView/'.$item['id'])}}">--}}
                    {{--<i class="fa fa-wrench" aria-hidden="true" id="fa-wrench"></i>--}}
                {{--</a>--}}
            {{--</td>--}}
            <td>
{{--              <a onclick="return window.confirm('Bạn có chắc chắc muốn xóa sản phẩm này khỏi đơn hàng?');" href="{{ url('admin/orders/deleteProduct/'.$order['id'].'/'.$item['id']) }}">--}}
              <button type="button" onclick="order.removeItemCart({{$item['id']}})">
                <i class="fa fa-trash-o" aria-hidden="true" ></i>
              </button>
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="4" style="text-align: center"> Tổng tiền</td>
            <td colspan="3">{{$order['OrderTotalGoods']}}</td>
        </tr>
    </table>
    <div class="line submit_line" style="text-align: right">
        <div class="col-md-12">
            <input type="submit" name="" value="Lưu" class="button_submit">
        </div>
    </div>
</div>
</form>
@endsection