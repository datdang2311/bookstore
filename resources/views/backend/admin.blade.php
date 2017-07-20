@extends('backend.layout')
@section('controller')
 <div class="brw">
    <h6 class="bry">Quản lý website</h6>
    <h2 class="brx">Sản phẩm</h2>
  </div>

</div>
<br><br><br>
<div class="bpx azo">
  <div class="bpy bpz">
    <div class="ayt brg">
      <input type="text" class="form-control bvj" placeholder="Tìm kiếm tài khoản">
      <span class="bv"><i class="fa fa-search" aria-hidden="true" ></i></span>
    </div>
  </div>
  <div class="bpy">
    <div class="pz">
      <button type="button" class="ce pi">
        <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
      </button>
    </div>
  </div>
</div>


<div class="nu">
  <table class="ck" data-sort="table">
    <thead>
      <tr>
        <th width="100px">Tên</th>
        <th width="60px">ID</th>
        <th width="100px">Tài khoản</th>
        <th width="150px">Địa chỉ</th>
        <th width="100px">Số điện thoại</th>
        <th width="10px"></th>
        <th width="10px"></th>
      </tr>
    </thead>
    <tbody>
    
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
      <li class="sr"><a class="ss" href="#">2</a></li>
      <li class="sr"><a class="ss" href="#">3</a></li>
      <li class="sr"><a class="ss" href="#">4</a></li>
      <li class="sr"><a class="ss" href="#">5</a></li>
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