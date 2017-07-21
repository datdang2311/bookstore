@extends('backend.layout')
@section('controller')
<div class="brw">
   <h6 class="bry">Quản lý website</h6>
   <h2 class="brx">Sản phẩm</h2>
</div>
<br><br><br>
<div class="tbl">
	<table width="100%">
		<tr>
			<th id="aeph" width="50%;">Thêm sửa sản phẩm</th>
			<th width="50%"></th>
		</tr>
		<tr>
			<td id="aepb" width="100%" colspan="2">
				<form enctype="multipart/form-data">
					<!-- Line 1 -->
					<div class="line">
						<div class="col-md-2">Mã sản phẩm:</div>
						<div class="col-md-10">
							<input type="text" name="product_id" class="form-control">
						</div>
					</div>
					<!-- End Line 1 -->
					<div class="line">
						<div class="col-md-2">Tên sản phẩm:</div>
						<div class="col-md-10">
							<input type="text" name="product_name" class="form-control">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Tác giả:</div>
						<div class="col-md-10">
							<input type="text" name="product_author" class="form-control">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Nhà xuất bản:</div>
						<div class="col-md-10">
							<select name="" class="form-select">
								<option>Nhà xuất bản 1</option>
								<option>Nhà xuất bản 2</option>
								<option>Nhà xuất bản 3</option>
							</select>
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Năm xuất bản:</div>
						<div class="col-md-10">
							<select class="form-select-year">
								<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option>
							</select>
							<select class="form-select-year">
								<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option>
							</select>
							<select class="form-select-year">
								<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option>
							</select>
							<select class="form-select-year">
								<option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option>
							</select>
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Cân nặng: </div>
						<div class="col-md-10">
							<input type="number" name="product_weight" class="form-control">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Ngôn ngữ:</div>
						<div class="col-md-10">
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Người dịch: </div>
						<div class="col-md-10">
							<input type="text" name="" class="form-control">
						</div>			
					</div>
					<div class="line">
						<div class="col-md-2">Kích thước: </div>
						<div class="col-md-10">
							<input type="number" name="product_size_x" class="form-ct"> mm 
							x <input type="number" name="product_size_y" class="form-ct"> mm
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Tình trạng: </div>
						<div class="col-md-10">
							<select class="form-select">
								<option>Còn hàng</option>
								<option>Hết hàng</option>
							</select>
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Giá bìa: </div>
						<div class="col-md-10">
							<input type="number" name="" class="form-ct">VNĐ / Giá bán:<input type="number" name="" class="form-ct">VNĐ
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Ảnh sản phẩm:</div>
						<div class="col-md-10">
							<input type="file" name="product_image">
						</div>
					</div>
					<div class="line">
						<div class="col-md-12">Mô tả:</div>
						<div class="col-md-12">
							<textarea name="product_description"></textarea>
							<script type="text/javascript">
								CKEDITOR.replace('product_description')
							</script>
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