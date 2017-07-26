@extends('backend.layout')
@section('controller')
<div class="brw">
   <h6 class="bry">Quản lý hệ thống</h6>
   <h2 class="brx">Tài khoản Admin</h2>
</div>
<br><br><br>
<div class="tbl">
	<table width="100%">
		<tr>
			<th id="aeph" width="50%;">Thêm sửa Tài khoản Admin</th>
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
						<div class="col-md-2">Tài khoản:</div>
						<div class="col-md-10">
							<input type="text" name="account" class="form-control" value="{{ isset($arr->account)?$arr->account:'' }}" {{ isset($arr->account)?"disabled":'' }}>
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Mật khẩu:</div>
						<div class="col-md-10">
							<input type="text" name="password" class="form-control" value="{{ isset($arr->password)?$arr->password:'' }}" {{ isset($arr->account)?"disabled":'' }}>
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Địa chỉ:</div>
						<div class="col-md-10">
							<input type="text" name="address" class="form-control" value="{{ isset($arr->address)?$arr->address:'' }}">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Số điện thoại:</div>
						<div class="col-md-10">
							<input type="text" name="phoneNumber" class="form-control" value="{{ isset($arr->phoneNumber)?$arr->phoneNumber:'' }}">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Ảnh đại diện:</div>
						<div class="col-md-7">
							<input type="file" name="avatar">
						</div>
					</div>
					<div class="line submit_line">
						<div class="col-md-12">
							<input type="submit" name="" value="Lưu Tài khoản" class="button_submit">
						</div>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			</td>
		</tr>
	</table>
</div>
@endsection