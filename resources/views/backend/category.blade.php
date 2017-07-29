@extends('backend.layout')
@section('controller')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<style type="text/css">

</style>
<div class="brw">
    <h6 class="bry">Quản lý Website</h6>
    <h2 class="brx">Danh mục sản phẩm</h2>
</div>

</div>
<br><br><br>
<div class="bpx azo">
  <div class="bpy bpz">
    <div class="ayt brg">
      <input type="text" class="form-control bvj" placeholder="Tìm kiếm sản phẩm">
      <span class="bv"><i class="fa fa-search" aria-hidden="true" ></i></span>
    </div>
  </div>
  <div class="bpy">
    <div class="pz">
      <a href="accounts\add">
        <div type="button" class="ce pi">
          <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
        </div>
      </a>
    </div>
  </div>
</div>


<div class="nu">
  <table class="ck" data-sort="table">
    <thead>
      <tr>
        <th width="100px">Ảnh</th>
        <th width="30px">ID</th>
        <th width="120px">Tên danh mục</th>
        <th width="120px">Mô tả</th>
        <th width="5px"></th>
        <th width="5px"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($arr as $rows)
      <tr>
        <td style="text-align: center;">
          @if(file_exists('upload/avatars/'.$rows->avatar))
            <img src="{{ asset('upload/avatars/'.$rows->avatar) }}" style="height: 50px;">
          @endif
        </td>
        <td>{{ $rows->id }}</td>
        <td>{{ $rows->name }}</td>
        <td>{{ $rows->account }}</td>
        <td>
          <a href="{{ url('admin/accounts/edit/'.$rows->id) }}">
            <i class="fa fa-wrench" aria-hidden="true" id="fa-wrench"></i>
          </a>
        </td>
        <td>
          <a onclick="return window.confirm('Bạn có chắc chắc muốn xóa tài khoản này?');" href="{{ url('admin/accounts/delete/'.$rows->id) }}">
            <i class="fa fa-trash-o" aria-hidden="true" ></i>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div>
  {{ $arr->render() }}
</div>
@endsection