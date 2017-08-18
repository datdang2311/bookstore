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
				<form enctype="multipart/form-data" method="post" action="{{isset($new) ? route('editNew') : route('add')}}">

                    @if(isset($new))
					<div class="line">
						<div class="col-md-2">ID:</div>
						<div class="col-md-10">
							<input type="text" name="id" class="form-control" value="{{$new->id}}" readonly>
						</div>
					</div>
					@endif
					<div class="line">
						<div class="col-md-2">Tiêu đề:</div>
						<div class="col-md-10">
							<input type="text" name="title" class="form-control" value="{{ isset($new) ? $new->title : ''}}">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Ảnh:</div>
						<div class="col-md-10">
						    @if(isset($new->image))
						        <img src="{{asset($new->image)}}" alt="" style="width: 50%"/>
						         <input type="file" name="image">
						    @else
						        <input type="file" name="image">
						    @endif
						</div>
					</div>
					<div class="line">
					    <div class="col-md-2">Hot New</div>
					    <div class="col-md-10">
					        <input type="checkbox" {{ ((isset($new->hotNews)&&($new->hotNews==1))?"checked":"" ) }}>
					        Tin tức nổi bật.
					    </div>
					</div>
					<div class="line">
						<div class="col-md-2">Miêu tả:</div>
						<div class="col-md-10">
							<input type="text" name="description" class="form-control" value="{{ isset($new) ? $new->description : ''}}">
						</div>
					</div>
					<div class="line">
						<div class="col-md-2">Nội dung</div>
						<div class="col-md-10">
							<textarea name="content">{{ isset($new) ? $new->content : '' }}"</textarea>
							<script type="text/javascript">
                            	CKEDITOR.replace('content');
                            </script>
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