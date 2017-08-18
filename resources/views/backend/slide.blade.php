@extends('backend.layout')
@section('controller')
<div class="brw">
  <h6 class="bry">Quản lý website</h6>
  <h2 class="brx">Slide Ảnh</h2>
</div>
</div>
<br><br><br>
<div class="bpx azo">
  <div class="bpy bpz">
    <div class="ayt brg">
      <input type="text" class="form-control bvj" placeholder="Tìm kiếm ảnh">
      <span class="bv"><i class="fa fa-search" aria-hidden="true" ></i></span>
    </div>
  </div>
</div>
<table class="ck" data-sort="table">
   <thead>
      <tr>
        <th width="300px">Slide Image</th>
        <th width="30px">ID</th>
        <th width="20px"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($arr as $rows)
      <tr>
        <td style="text-align: center;">
          @if(file_exists('upload/slides/'.$rows->slide))
            <img src="{{ asset('upload/slides/'.$rows->slide) }}" style="height: 200px">
          @endif
        </td>
        <td>{{ $rows->id }}</td>
        <td>
          <a href="{{ url('admin/slides/edit/'.$rows->id) }}">
            <i class="fa fa-wrench" aria-hidden="true" id="fa-wrench"></i>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection