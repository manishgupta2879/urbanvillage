@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/blog.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        @if(isset($tag))
            <li class="breadcrumb-item active"><a href="{{ url('blog') }}">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{  ucfirst(str_replace("-"," ",$tag)) }} </li>
        @else
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
        @endif
    </ol>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section_title_container">
                <h1 class="main-title">Urban Village Blog</h1>
                <p class="empty-pr">&nbsp;</p>
                <div class="header_title_border "></div>

                <br/><br/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            @if(count($posts) < 1)
                <h5 class="author">No Results Found</h5>
            @else
                <div class="row">
                @foreach($posts AS $k => $post)
                    <!-- Blog Post -->
                        <div class="col-sm-12 col-md-4">
                            <a href="{{ url('blog/view/'.$post->slug) }}">
                                <div class="card">
                                    <img class="card-img-top" src="{{ Storage::url($post->image) }}" alt="UVH Blog - {{ $post->title }}">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $post->title }}</h4>
                                        <p class="card-subtitle mb-2 text-muted">
                                            {{ date('d M Y', strtotime($post->created_at)) }} |
                                            in <a href="{{ url('blog/'.$post->category->slug) }}">{{ $post->category->name }}</a>
                                        </p>
                                        <a href="{{ url('blog/view/'.$post->slug) }}">
                                            <p class="card-text">{{ str_limit($post->excerpt, $limit = 250, $end = '...') }}</p>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
            @if(count($posts) > 4)
                <div class="page_nav">
                    <ul class="">
                        {{ $posts->links() }}
                    </ul>
                </div>
            @endif
        </div>
        <div class="col-md-3">
            <div class="sidebar">
                <div class="extra d-flex flex-column align-items-start justify-content-start">
                    <div class="extra_button"><a class="color-white">Categories</a></div>
                    <div class="sidebar_list">
                        <ul>
                            @foreach($categories AS $k => $category)
                                <li><a href="{{ url("blog/".$category->slug) }}">&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i> {{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- Extra -->
                <div class="extra d-flex flex-column align-items-start justify-content-start">
                    <div class="background_image" style="background: url({{ asset('images/advertis.jpg') }}); background-size: cover; background-repeat: no-repeat; margin-top:45px; height: 650px;"></div>
                    <div class="extra_button"><a href="{{ url('property/buyers') }}">Need a Property?</a></div>
                </div>
            </div>
        </div>
    </div>

</div>
@include('includes.footer')
