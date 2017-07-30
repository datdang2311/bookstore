
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
			<th id="aeph" width="50%;">Cập nhật Tin Tức</th>
			<th width="50%"></th>
		</tr>
		<tr>
			<td id="aepb" width="100%" colspan="2">
			    @if(isset($new))
				<form enctype="multipart/form-data" method="post" action="{{route('editNew')}}">
				@else
				<form enctype="multipart/form-data" method="post" action="{{route('addNew')}}">
				@endif
					<div class="line">
						<div class="col-md-2">ID:</div>
						<div class="col-md-10">
							<input type="text" name="id" class="form-control" value="{{ $new->id }}" readonly>
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Tiêu đề:</div>
						<div class="col-md-10">
							<input type="text" name="title" class="form-control" value="{{ $new->title }}">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Ảnh:</div>
						<div class="col-md-10">
						    @if(isset($new->image))
						        <img src="{{asset($new->image)}}" alt="" style="width: 50%"/>
						         <input type="file" name="image" class="" value="{{ $new->image }}" >
						    @else
						        <input type="file" name="image" class="" value="{{ $new->image }}" >

						    @endif
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Miêu tả:</div>
						<div class="col-md-10">
							<input type="text" name="description" class="form-control" value="{{ $new->description }}">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Nội dung</div>
						<div class="col-md-10">
							<input type="text" name="content" class="form-control" value="{{ $new->content }}">
						</div>
					</div>
					<div class="line submit_line">
						<div class="col-md-12">
							<input type="submit" name="" value="Lưu" class="button_submit">
						</div>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			</td>
		</tr>
	</table>
</div>
@endsection