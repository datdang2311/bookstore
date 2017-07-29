@extends('backend.layout')
@section('controller')
<div class="brw">
   <h6 class="bry">Quản lý Website</h6>
   <h2 class="brx">Danh mục sản phẩm</h2>
</div>
<br><br><br>
<div class="tbl">
	<table width="100%">
		<tr>
			<th id="aeph" width="50%;">Thêm sửa Danh mục sản phẩm</th>
			<th width="50%"></th>
		</tr>
		<tr>
			<td id="aepb" width="100%" colspan="2">
				<form enctype="multipart/form-data" method="post">
					<div class="line">
						<div class="col-md-2">Mã:</div>
						<div class="col-md-10">
							<input type="text" name="id" class="form-control" value="{{ isset($arr->id)?$arr->id:'' }}" disabled="">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Tên:</div>
						<div class="col-md-10">
							<input type="text" name="name" class="form-control" value="{{ isset($arr->name)?$arr->name:'' }}">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Mô tả:</div>
						<div class="col-md-10">
							<input type="text" name="description" class="form-control" value="{{ isset($arr->description)?$arr->description:'' }}" {{ isset($arr->account)?"disabled":'' }}>
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Ảnh minh họa:</div>
						<div class="col-md-7">
							<input type="file" name="imageUrl">
						</div>
					</div>
					<div class="line submit_line">
						<div class="col-md-12">
							<input type="submit" name="" value="Lưu Danh mục" class="button_submit">
						</div>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			</td>
		</tr>
	</table>
</div>
@endsection