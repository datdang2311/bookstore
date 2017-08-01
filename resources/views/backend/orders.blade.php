@extends('backend.layout')
@section('controller')
 <div class="brw">
    <h6 class="bry">Quản lý Website</h6>
    <h2 class="brx">Đơn hàng</h2>
  </div>

</div>
<br><br><br>
<div class="bpx azo">
  <div class="bpy bpz">
    <div class="ayt brg">
      <input type="text" class="form-control bvj" placeholder="Tìm kiếm">
      <span class="bv"><i class="fa fa-search" aria-hidden="true" ></i></span>
    </div>
  </div>

  {{--<div class="bpy">--}}
    {{--<div class="pz">--}}
      {{--<a href="news/addView">--}}
          {{--<button type="button" class="ce pi">--}}
            {{--<i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>--}}
          {{--</button>--}}
      {{--</a>--}}
    {{--</div>--}}
  {{--</div>--}}
</div>


<div class="nu">
  <table class="ck" data-sort="table">
    <thead>
      <tr>
        <th width="60px">ID</th>
        <th width="100px">Tên khách hàng</th>
        <th width="110px">Số điên thoại</th>
        <th width="100px">Địa chỉ</th>
        <th width="100px">Tổng tiền</th>
        <th width="100px">Trạng thái</th>
        <th width="10px"></th>
        <th width="10px"></th>
      </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{$order['id']}}</td>
                <td>{{$customer[$order['id']]['fullName']}}</td>
                <td style="max-height: inherit">{{$customer[$order['id']]['phoneNumber']}}</td>
                <td>{{$customer[$order['id']]['address']}}</td>
                <td>{{$order['OrderTotalFinal']}}</td>
                <td>{{$order['PaymentStatus']}}</td>
                <td>
                  <a href="{{ url('admin/orders/editView/'.$order['id']) }}">
                    <i class="fa fa-wrench" aria-hidden="true" id="fa-wrench"></i>
                  </a>
                </td>
                <td>
                  <a onclick="return window.confirm('Bạn có chắc chắc muốn xóa tài khoản này?');" href="{{ url('admin/news/delete/'.$order['id']) }}">
                    <i class="fa fa-trash-o" aria-hidden="true" ></i>
                  </a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>

<div class="awt">
  <nav>
    <ul class="sq">
      <li class="sr">
        <a class="ss" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="aep">Previous</span>
        </a>
      </li>
      <li class="sr active"><a class="ss" href="#">1</a></li>
      <li class="sr">
        <a class="ss" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="aep">Next</span>
        </a>
      </li>
    </ul>
  </nav>
</div>

      </div>
    </div>
  </div>

  <!--  -->
</div>
@endsection