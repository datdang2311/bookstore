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
				<form enctype="multipart/form-data">
					<div class="line">
						<div class="col-md-2">Mã tài khoản:</div>
						<div class="col-md-10">
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Tên:</div>
						<div class="col-md-10">
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Tài khoản:</div>
						<div class="col-md-10">
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Mật khẩu:</div>
						<div class="col-md-10">
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Địa chỉ:</div>
						<div class="col-md-10">
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Số điện thoại:</div>
						<div class="col-md-10">
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Ảnh đại diện:</div>
						<div class="col-md-10">
							<input type="file" name="product_image">
						</div>
					</div>
					<div class="line submit_line">
						<div class="col-md-12">
							<input type="submit" name="" value="Lưu Sản phẩm" class="button_submit">
						</div>
					</div>
				</form>
			</td>
		</tr>
	</table>
</div>
@endsection