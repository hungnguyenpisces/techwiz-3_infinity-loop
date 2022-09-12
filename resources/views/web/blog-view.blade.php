@extends('web.layouts._master')

@section('title')
@endsection

@section('extraCss')
	<!-- extra css -->

	<!-- end extra css -->
@endsection

@section('content')
{{-----content-----}}
<section class="section">
	<div class="container">
		<div class="col-12">
			<h2>{{$blog_data->title}}</h2>
			<div class="blog_content">
				{{$blog_data->content}}
			</div>
		</div>
	</div>
</section>
{{-----end content-----}}
@endsection

@section('extraJs')
	<!-- extraJs -->

	<!-- end extraJs -->
@endsection
