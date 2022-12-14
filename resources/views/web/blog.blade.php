@extends('web.layouts._master')

@section('title')
@endsection

@section('extraCss')
    <!-- extra css -->

    <!-- end extra css -->
@endsection

@section('content')
    {{-----content-----}}

    <section class="section latest-news-area blog-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    @foreach($all_blogs as $blog_item)
                    <div class="single-news">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-12 pr-0">
                                <div class="image">
                                    <a href="{{route('view_blogs.view',$blog_item->id)}}"><img src="/storage/{{$blog_item->image->image}}" alt="#"></a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12  pl-0">
                                <div class="content">
                                    <h2 class="title"><a href="{{route('view_blogs.view',$blog_item->id)}}">{{$blog_item->title}}</a>
                                    </h2>
                                    <p>{{$blog_item->short_description}}</p>
                                    <ul class="meta-info">
                                        <li>
                                            <a href="#"><img src="/assets/images/blog/comment1.jpg" alt="#">
                                                {{$blog_item->user->last_name}} {{$blog_item->user->first_name}}</a>
                                        </li>
                                        <li>
                                            {{$blog_item->created_at}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="pagination left blog-grid-page">
                        <ul class="pagination-list">
                            <li><a href="#">Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div> -->
                </div>
                <aside class="col-lg-4 col-md-12 col-12">
                    <div class="sidebar blog-grid-page">
                        <div class="widget search-widget">
                            <h5 class="widget-title">Search This Site</h5>
                            <form>
                                <input type="text" name="q" placeholder="Search Here...">
                                <button type="submit"><i class="lni lni-search-alt"></i></button>
                            </form>
                            <a href="?" style="width:100%;"><button>Clear queries</button></a>
                        </div>
                        <div class="widget popular-feeds">
                            <h5 class="widget-title">Recent Feeds</h5>
                            <div class="popular-feed-loop">
                                @foreach ($recent_blogs as $blog_item)
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <a class="feed-img" href="{{route('view_blogs.view',$blog_item->id)}}">
                                            <img src="/storage/{{$blog_item->image->image}}" alt="#">
                                        </a>
                                        <h6 class="post-title"><a href="{{route('view_blogs.view',$blog_item->id)}}">{{$blog_item->title}}</a></h6>
                                        <span class="time"><i class="lni lni-calendar"></i>{{$blog_item->created_at}}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="widget popular-tag-widget">
                            <h5 class="widget-title">Popular Tags</h5>
                            <div class="tags">
                                @foreach ($tags as $tag)
                                <a href="{{route('view_blogs.tags_lookup',$tag->id)}}">{{$tag->tag_name}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>


    {{-----end content-----}}
@endsection

@section('extraJs')
    <!-- extraJs -->

    <!-- end extraJs -->
@endsection
