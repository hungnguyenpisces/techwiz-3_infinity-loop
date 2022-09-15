@extends('admin.layouts._master')

@section('title')
Custom title if need
@endsection

@section('extraCss')
<!-- extra css -->
<link href="/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- end extra css -->
@endsection


@section('content')

	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>Payments</h2>
				<small class="text-muted">Welcome to Swift application</small>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="header">
							<h2>Hospital Payments</h2>
							<ul class="header-dropdown">
								<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
									<ul class="dropdown-menu pull-right">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="body table-responsive">
							<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
								<thead>
								<tr>
									<th>Title</th>
									<th>Description</th>
									<th>Thumbnail</th>
									<th>Hidden</th>
									<th>Action</th>
								</tr>
								</thead>
								<tfoot>
								<tr>
									<th>Title</th>
									<th>Description</th>
									<th>Thumbnail</th>
									<th>Hidden</th>
									<th>Action</th>
								</tr>
								</tfoot>
								<tbody>
									@foreach($all_blogs as $blog_item)
									<tr>
										<td>{{$blog_item->title}}</td>
										<td>{{$blog_item->short_description}}</td>
										<td><img class="preview_image" scr="een" src="/storage/{{$blog_item->image->image}}"></td>
										<td>{{$blog_item->is_viewable?"No":"Yes"}}</td>
										<td>
											<a href="{{route('blog.edit',$blog_item->id)}}" class="btn btn-primary waves-effect fllf">
												<i class="material-icons">edit</i>
											</a>
											<form method="post" action="{{route('blog.destroy',$blog_item->id)}}">
												@csrf
												@method("DELETE")
												<button class="btn btn-danger waves-effect">
													<i class="material-icons">delete</i>
												</button>
											</form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection


@section('extraJs')
	<!-- extraJs -->
	<script src="/assets/bundles/datatablescripts.bundle.js"></script>
	<script src="/assets/js/morphing.js"></script>
	<script src="/assets/js/pages/tables/jquery-datatable.js"></script>

	<!-- end extraJs -->
@endsection
