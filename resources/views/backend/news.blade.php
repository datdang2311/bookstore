@extends('backend.layout')
@section('controller')
<div class="brw">
    <h6 class="bry">Quản lý Website</h6>

    <h2 class="brx">Tin tức</h2>
</div>

</div>
<br><br><br>
<div class="bpx azo">
    <div class="bpy bpz">
        <div class="ayt brg">
            <input type="text" class="form-control bvj" placeholder="Tìm kiếm">
            <span class="bv"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
    </div>
    <div class="bpy">
        <div class="pz">
            <a href="news/addView">
                <button type="button" class="ce pi">
                    <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
                </button>
            </a>
        </div>
    </div>
</div>


<div class="nu">
    <table class="ck" data-sort="table">
        <thead>
        <tr>
            <th width="60px">ID</th>
            <th width="100px">Tiêu đề</th>
            <th width="100px">Ảnh</th>
            <th width="200px">Mô tả</th>
            <th width="10px">Hot</th>
            <th width="10px"></th>
            <th width="10px"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $new)
        <tr>
            <td>{{$new->id }}</td>
            <td>{{$new->title }}</td>
            <td>
                @if(!empty($new->image))
                <img src="{{asset($new->image)}}" alt="" width="50%"/>
                @endif
            </td>
            <td style="height: 70px;">{{$new->description}}</td>
            <td><input type="checkbox" disabled {{($new->hotNews==1?"checked":"")}}></td>
            <td>
                <a href="{{ url('admin/news/editView/'.$new->id) }}">
                    <i class="fa fa-wrench" aria-hidden="true" id="fa-wrench"></i>
                </a>
            </td>
            <td>
                <a onclick="return window.confirm('Bạn có chắc chắc muốn xóa tài khoản này?');"
                   href="{{ url('admin/news/delete/'.$new->id) }}">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="awt">
    <nav>
        <ul class="sq">
            <li class="sr">
                <a class="ss" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="aep">Previous</span>
                </a>
            </li>
            <li class="sr active"><a class="ss" href="#">1</a></li>
            <li class="sr">
                <a class="ss" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="aep">Next</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

</div>
</div>
</div>

<!--  -->
</div>
@endsection