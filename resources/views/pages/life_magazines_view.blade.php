@include('includes.header')
<!--<header class="header-area home-banner">
    <img src="{{ asset('images/banner/blog.jpg') }}" alt="banner" />
</header>-->
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $page_title }}</li>
    </ol>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section_title_container">
                <h1 class="main-title">{{ $page_title }}</h1>
                <p class="empty-pr">&nbsp;</p>
                <div class="header_title_border "></div>

                <br/><br/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9" style="margin-bottom: 40px !important;>
            @if(count($life_magazines) < 1)
                <h5 class="author">No Results Found</h5>
            @else
                <div class="row">
                @foreach($life_magazines AS $k => $life_magazine)
                    <!-- Blog Post -->
                        <div class="col-sm-12 col-md-4">
                            <a href="{{ $life_magazine->link }}" target="_blank">
                                <div class="card" style="background: #a82266 !important;">
                                    <div class="card-body">
                                        <h4 class="card-title" style="color: white !important;">{{ date('F', strtotime($life_magazine->issue)) }}</h4>
                                        <p class="card-subtitle mb-2 text-muted"style="color: white !important;">Issue | 
                                            {{ date('M Y', strtotime($life_magazine->issue)) }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
            @if(count($life_magazines) > 4)
                <div class="page_nav">
                    <ul class="">
                        {{ $life_magazines->links() }}
                    </ul>
                </div>
            @endif
        </div>
    </div>

</div>
@include('includes.footer')
