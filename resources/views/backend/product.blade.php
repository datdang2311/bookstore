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
      <input type="text" class="form-control bvj" placeholder="Tìm kiếm sản phẩm">
      <span class="bv"><i class="fa fa-search" aria-hidden="true" ></i></span>
    </div>
  </div>
  <div class="bpy">
      <div class="pz">
        <a href="products\add">
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
        <th width="70px">Ảnh</th>
        <th width="30px">ID</th>
        <th width="120px">Tên</th>
        <th width="120px">Danh mục</th>
        <th width="70px">Giá bán</th>
        <th width="20px">Status</th>
        <th width="10px"></th>
        <th width="10xp"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($arr as $rows)
        <?php
            $categories = new \App\Model\Categories();
            $category = $categories->getById($rows->categoryId);//do lấy theo từng cái nên lấy từ controller rắc rối
        ?>
        <tr>
            <td style="text-align: center">
            @if(file_exists("upload/products/$rows->image"))
                <img style="height: 70px;" src={{ asset('upload/products/'.$rows->image) }}>
            @endif
            </td>
            <td>{{ $rows->id }}</td>
            <td>{{ $rows->name}}</td>
            <td>{{ $category }}</td>
            <td>{{ $rows->salePrice }}</td>
            <td>{{ $rows->status }}</td>
            <td>
                <a href="{{ url('admin/products/edit/'.$rows->id) }}">
                    <i class="fa fa-wrench" aria-hidden="true" id="fa-wrench"></i>
                </a>
            </td>
            <td>
                <a onclick="return window.confirm('Bạn có chắc chắc muốn xóa sản phẩm này?');" href="{{ url('admin/products/delete/'.$rows->id) }}">
                    <i class="fa fa-trash-o" aria-hidden="true" ></i>
                </a>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="pag">
  {{ $arr->render() }}
</div>
@endsection