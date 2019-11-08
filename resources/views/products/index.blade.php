@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh sách bài viết</h3>

          <div class="box-tools">
          	<form action="" method="get">
	            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
	              <input type="text" name="keyword" class="form-control pull-right" placeholder="Search">

	              <div class="input-group-btn">
	                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
	              </div>
	            </div>
        	</form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
			<table class="table table-hover">
				<tbody>
					<tr>
					  <th>ID</th>
					  <th>Name</th>
					  <th>Category id</th>
					  <th>Image</th>
					  <th>
					  	<a href="" class="btn btn-sm btn-success">Add</a>
					  </th>
					</tr>
					@foreach($products as $pr)
					<tr>
						<td>{{$pr->id}}</td>
						<td>{{$pr->name}}</td>
						<td>{{$pr->category_id}}</td>
						<td>
							<img src="{{$pr->image}}" width="70">
						</td>
						<td>
							<a href="" class="btn btn-sm btn-info">Edit</a>
							<a href="" class="btn btn-sm btn-danger">Remove</a>
							<a href="" class="btn btn-sm btn-primary">Add to cart</a>

						</td>
					</tr>
					@endforeach
					<tr>
					</tr>
				</tbody>
			</table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
</div>
{{-- <form action="" method="get">
	<input type="text" name="keyword" placeholder="Tìm kiếm...">
	<button type="submit">tim</button>
</form>
<table>
	<tbody>
		
	</tbody>
</table> --}}
@endsection
