@extends('admin.layouts._master')

@section('title')
Custom title if need
@endsection

@section('extraCss')
<!-- extra css -->
	<link rel="stylesheet" href="/assets/plugins/dropzone/dropzone.css">

	<link rel="stylesheet"
		href="/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" />

	<link rel="stylesheet" href="/assets/plugins/waitme/waitMe.css" />

	<link rel="stylesheet" href="/assets/plugins/bootstrap-select/css/bootstrap-select.css" />
	<style>
		.dropzone .dz-preview .dz-image, .dropzone .dz-preview.dz-file-preview .dz-image {
			border-radius: 0;
		}
	</style>
	<link rel="stylesheet" href="/assets/plugins/tags-input/tags-input.css" />
<!-- end extra css -->
@endsection


@section('content')

<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>Add blog post</h2>
				<small class="text-muted">Welcome to Swift application</small>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="header">
							<h2>Blog post details <small>Description text here...</small> </h2>
							<!-- <ul class="header-dropdown m-r--5">
								<li class="dropdown"> <a href="#" class="dropdown-toggle"
										data-toggle="dropdown" role="button" aria-haspopup="true"
										aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
									<ul class="dropdown-menu pull-right">
										<li><a href="#" class=" waves-effect waves-block">Action</a>
										</li>
										<li><a href="#" class=" waves-effect waves-block">Another
												action</a></li>
										<li><a href="#" class=" waves-effect waves-block">Something
												else here</a></li>
									</ul>
								</li>
							</ul> -->
						</div>
						<div class="body">
							<form method="post" action="{{route('blog.store')}}" id="blog_form_data" class="row clearfix">
								@csrf
								<input type="hidden" name="thumb_token" value="{{$thumb_token}}">
								<div class="col-lg-3 col-sm-12">
									<div class="form-group">
										<div class="form-line">
											<input type="text" name="title" class="form-control" placeholder="Title">
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-sm-12">
									<div class="form-group">
										<div class="form-line">
											<input type="text" name="description" class="form-control" placeholder="Description">
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-12">
									<div class="form-group">
										<div class="form-line">
											<input type="tags" name="description" placeholder="Tags">
										</div>
									</div>
								</div>
							</form>
							<div class="row clearfix">
								<div class="content-box">
									<div class="form-group">
										<div class="form-line">
											<textarea rows="4" name="content" id="blog_content" placeholder="Content" form="blog_form_data"></textarea>
										</div>
									</div>
								</div>
								<div class="form_file_upload">
									<form action="{{route('blog.upload')}}" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
										@csrf
										<input type="hidden" name="thumb_token" value="{{$thumb_token}}">
										<div class="dz-message-container">
											<div class="dz-message">
												<div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
												<h3>Drop thumbnail here or click to upload.</h3>
												<em>(When the thumbnail is not specified, the default image is used.)</em>
											</div>
										</div>
										<div class="fallback">
											<input name="file" type="file" />
										</div>
									</form>
								</div>
								<div class="col-sm-12">
									<input class="form-check-input" id="cb_is_hidden" type="checkbox" name="hidden" form="blog_form_data">
									<label class="form-check-label" for="cb_is_hidden">Hidden blog post</label>
									<div class="form-group"></div>
								</div>
								<div class="col-sm-12">
									<button type="submit" class="btn btn-raised g-bg-cyan" form="blog_form_data">Submit</button>
									<button type="submit" class="btn btn-raised">Cancel</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection


@section('extraJs')
<!-- extraJs -->
	<script src="/assets/plugins/autosize/autosize.js"></script>
	<script src="/assets/plugins/momentjs/moment.js"></script>
	<script src="/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
	<script src="/assets/js/pages/forms/basic-form-elements.js"></script>
	<script src="/assets/js/ckeditor/ckeditor.js" scr="een"></script>
	<script>
		ClassicEditor.create(document.getElementById("blog_content"),{
			simpleUpload:{
				uploadUrl: "{{route('blog.ck_upload')}}",
				withCretentials: true,
				headers:{
					'X-CSRF-TOKEN': "{{csrf_token()}}"
				}
			}
		})
	</script>
	<script>
		(function () {
			var js = "window['__CF$cv$params']={r:'738813effa6c2390',m:'VuitF6PK5DLz8PUEBdKZpsVkGiNhNI9t.TcTOEX1nOo-1660127654-0-AVnno4w4LkQWXS14bzfPf11UXujvCHySfOm6cnwfXhy4GB7TOvncdZ4EIGf7Z7sacrEz0dwdLp2jZcbwwgFOBJrYCHqf89kBgBDqYbgnLOEHCLJxvJ2kzrilFJ7ZKDIsMf2xsDqEWCSodC+RS4I7H8sFnYgiS5haTNejTnfK4Let',s:[0x65416c2db8,0x7772ee6685],u:'/cdn-cgi/challenge-platform/h/g'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/g/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";
			var _0xh = document.createElement('iframe');
			_0xh.height = 1;
			_0xh.width = 1;
			_0xh.style.position = 'absolute';
			_0xh.style.top = 0;
			_0xh.style.left = 0;
			_0xh.style.border = 'none';
			_0xh.style.visibility = 'hidden';
			document.body.appendChild(_0xh);
			function handler() {
				var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
				if (_0xi) {
					var _0xj = _0xi.createElement('script');
					_0xj.nonce = '';
					_0xj.innerHTML = js;
					_0xi.getElementsByTagName('head')[0].appendChild(_0xj);
				}
			}
			if (document.readyState !== 'loading') {
				handler();
			}
			else if (window.addEventListener) {
				document.addEventListener('DOMContentLoaded', handler);
			}
			else {
				var prev = document.onreadystatechange || function () { };
				document.onreadystatechange = function (e) {
					prev(e);
					if (document.readyState !== 'loading') {
						document.onreadystatechange = prev;
						handler();
					}
				};
			}
		})();
	</script>
	<script src="/assets/plugins/dropzone/dropzone.js"></script>
	<script src="/assets/plugins/tags-input/tags-input.js"></script>
	<script>
		Dropzone.options.frmFileUpload={
				maxFiles: 1,
				acceptedFiles: "image/*"
		};
		[].forEach.call(document.querySelectorAll('input[type="tags"]'), tagsInput);
	</script>
<!-- end extraJs -->
@endsection