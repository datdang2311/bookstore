
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
				<form enctype="multipart/form-data" method="post">
					<!-- Line 1 -->
					<div class="line">
						<div class="col-md-2">Mã sản phẩm:</div>
						<div class="col-md-10">
							<input type="text" name="id" class="form-control" disabled value="{{ isset($arr->id)?$arr->id:"" }}">
						</div>
					</div>
					<!-- End Line 1 -->
					<div class="line">
						<div class="col-md-2">Tên sản phẩm:</div>
						<div class="col-md-10">
							<input type="text" name="name" class="form-control" value="{{ isset($arr->name)?$arr->name:"" }}">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Tác giả:</div>
						<div class="col-md-10">
							<input type="text" name="author" class="form-control" value="{{ isset($arr->author)?$arr->author:"" }}">
						</div>
					</div>
					<div class="line">
                    	<div class="col-md-2">Nhà xuất bản:</div>
                    		<div class="col-md-10">
                    			<input type="text" name="published" class="form-control" value="{{ isset($arr->published)?$arr->published:"" }}">
                    		</div>
                    </div>
					<div class="line">
						<div class="col-md-2">Danh mục:</div>
						<div class="col-md-10">
							<select name="category" class="form-select">
								<?php
								$categories = new \App\Model\Categories();
								foreach($categories->get() as $category){
								?>
								<option {{ isset($arr->categoryId)&&($arr->categoryId == $categories->getIdByName($category->name))?"selected":"" }} >{{ $category->name }}</option>
								<?php }?>
							</select>
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Năm xuất bản:</div>
						<div class="col-md-10">
							<select class="form-select" name="year">
							    <?php
							    $year_selected = isset($arr->year)?$arr->year:2017;
							    for($i = 1900; $i<2018; $i++){ ?>
							    <option {{($i == $year_selected)?"selected":""}} >{{ $i }}</option>
							    <?php } ?>
							</select>
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Cân nặng: </div>
						<div class="col-md-10">
							<input type="number" name="weight" class="form-control" value="{{ isset($arr->weight)?$arr->weight:"" }}">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Ngôn ngữ:</div>
						<div class="col-md-10">
							<select class="form-select" name="language">
                                <?php
                                $languages = new \App\Model\Languages();
                                foreach($languages->get() as $language){
                                ?>
                                <option {{ isset($arr->languageId)&&($arr->languageId == $languages->getIdByName($language->name))?"selected":"" }}>{{ $language->name }}</option>
                                <?php }?>
							</select>
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Người dịch: </div>
						<div class="col-md-10">
							<input type="text" name="translatorName" class="form-control" value="{{ isset($arr->translatorName)?$arr->translatorName:"" }}">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Kích thước: </div>
						<div class="col-md-10">
						    <?php $size = isset($arr->size)?(explode('x', $arr->size)):"" ?>
							<input type="number" name="size_x" class="form-ct" value="{{ isset($arr->size)?$size[0]:"" }}"> mm
							x <input type="number" name="size_y" class="form-ct"value="{{ isset($arr->size)?$size[1]:"" }}"> mm
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Tình trạng: </div>
						<div class="col-md-10">
							<select class="form-select" name="status">
								<option {{ isset($arr->status)&&($arr->status == 1)?"selected":"" }}>Còn hàng</option>
								<option {{ isset($arr->status)&&($arr->status == 0)?"selected":"" }}>Hết hàng</option>
							</select>
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Giá bìa: </div>
						<div class="col-md-10">
							<input type="number" class="form-ct" name="coverPrice" value="{{ isset($arr->coverPrice)?$arr->coverPrice:"" }}">VNĐ / Giá bán:<input type="number" name="salePrice" class="form-ct" value="{{ isset($arr->salePrice)?$arr->salePrice:"" }}">VNĐ
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Ảnh sản phẩm:</div>
						<div class="col-md-10">
							<input type="file" name="image">
						</div>
					</div>
					<div class="line">
						<div class="col-md-12">Mô tả:</div>
						<div class="col-md-12">
							<textarea name="product_description">{{ isset($arr->description)?$arr->description:"" }}</textarea>
							<script type="text/javascript">
								CKEDITOR.replace('product_description');
							</script>
						</div>
					</div>

					<div class="line submit_line">
						<div class="col-md-12">
							<input type="submit" name="" value="Lưu Sản phẩm" class="button_submit">
						</div>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			</td>
		</tr>
	</table>
</div>
@endsection