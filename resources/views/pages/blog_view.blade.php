@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/blog.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('blog') }}">Blog</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ ucfirst(strtolower($post->title)) }}</li>

    </ol>
</div>
<div class="blog">
    <div class="container">
        <div class="row">
            <!-- Blog Posts -->
            <div class="col-lg-9">
                <div class="blog_posts">
                    <!-- Blog Post -->
                    <div class="blog_post">
                        <div class="blog_post_image">
                            <img src="{{ Storage::url($post->image) }}" alt="UVH Blog - {{ $post->title }}">
                            <div class="section_title_container" style="margin-bottom:-35px;">
                                <br/>
                                <h1>{{ $post->title }}</h1>
                            </div>
                            <div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
                                <div>{{ date('d', strtotime($post->created_at)) }}</div>
                                <div>{{ date('M,y', strtotime($post->created_at)) }}</div>
                            </div>
                        </div>
                        <div class="blog_post_content">
                            <div class="blog_post_info">
                                <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <li>by <a href="#">Admin</a></li>
                                    <li>in <a href="{{ url('blog/'.$post->category->slug) }}">{{ $post->category->name }}</a></li>
                                    <!--<li>
                                        <ul class="d-flex flex-row align-items-start justify-content-start">
                                            <li><a href="#">tips and tricks</a></li>
                                            <li><a href="#">houses</a></li>
                                            <li><a href="#">marketing</a></li>
                                        </ul>
                                    </li>-->
                                </ul>
                            </div>
                            <div class="blog_post_text">
                                {!! $post->body !!}
                            </div>
                        </div>
                    </div>



                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <!-- Categories -->
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
                            <!--<div class="extra_phone_container mt-auto">
                                <div>Call Maria Smith</div>
                                <div>00349 566 77892</div>
                            </div>-->
						</div>

                </div>
            </div>

        </div>
    </div>
</div>
@include('includes.footer')
