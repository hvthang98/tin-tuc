@extends('fontend.master.master')
@section('main-content')
<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8">
                <!-- Breaking News Widget -->
                <div class="breaking-news-area d-flex align-items-center">
                    <div class="news-title">
                        <p>Breaking News</p>
                    </div>
                    <div id="breakingNewsTicker" class="ticker">
                        <ul>
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a href="#">Welcome to Colorlib Family.</a></li>
                            <li><a href="#">Nam eu metus sitsit amet, consec!</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Breaking News Widget -->
                <div class="breaking-news-area d-flex align-items-center mt-15">
                    <div class="news-title title2">
                        <p>International</p>
                    </div>
                    <div id="internationalTicker" class="ticker">
                        <ul>
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a href="#">Welcome to Colorlib Family.</a></li>
                            <li><a href="#">Nam eu metus sitsit amet, consec!</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Hero Add -->
            <div class="col-12 col-lg-4">
                <div class="hero-add">
                    <a href="#"><img src="img/bg-img/hero-add.gif" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Hero Area End ##### -->

<!-- ##### Featured Post Area Start ##### -->
<div class="featured-post-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8">
                <div class="row">
                    <!-- Single Featured Post -->
                    <div class="col-12 col-lg-7">
                        <div class="single-blog-post featured-post">
                            <div class="post-thumb">
                                <a href="{{ route('sigle',$newsNew[0]->id) }}"><img src="{{ $newsNew[0]->avatar }}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="{{ route('sigle',$newsNew[0]->id) }}" class="post-catagory">{{ $newsNew[0]->categorys->name }}</a>
                                <a href="{{ route('sigle',$newsNew[0]->id) }}" class="post-title">
                                    <h6>{{ $newsNew[0]->title }}</h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-author">By <a href="#">{{ $newsNew[0]->users->name }}</a></p>
                                    <p class="post-excerp">{{ $newsNew[0]->summary }}</p>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('sigle',$newsNew[0]->id) }}" class="post-like"><img src="img/core-img/like.png" alt="">
                                            <span>392</span></a>
                                        <a href="{{ route('sigle',$newsNew[0]->id) }}" class="post-comment"><img src="img/core-img/chat.png" alt="">
                                            <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Featured Post -->
                    <div class="col-12 col-lg-5">
                        @php
                            $newsMiddle=$newsNew->slice(1,2);
                        @endphp
                        @foreach($newsMiddle as $news)
                            <div class="single-blog-post featured-post-2">
                                <div class="post-thumb">
                                    <a href="{{ route('sigle',$news->id) }}"><img src="{{ $news->avatar }}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="{{ route('sigle',$news->id) }}" class="post-catagory">{{ $news->categorys->name }}</a>
                                    <div class="post-meta">
                                        <a href="{{ route('sigle',$news->id) }}" class="post-title">
                                            <h6>{{ $news->title }}</h6>
                                        </a>
                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('sigle',$news->id) }}" class="post-like"><img src="img/core-img/like.png" alt="">
                                                <span>392</span></a>
                                            <a href="{{ route('sigle',$news->id) }}" class="post-comment"><img src="img/core-img/chat.png" alt="">
                                                <span>10</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- Single Featured Post -->
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <!-- Single Featured Post -->
                @php
                    $newsRight=$newsNew->slice(3,5);
                @endphp
                @foreach($newsRight as $news)
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="{{ route('sigle',$news->id) }}"><img src="{{ $news->avatar }}" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="{{ route('sigle',$news->id) }}" class="post-catagory">{{ $news->categorys->name }}</a>
                            <div class="post-meta">
                                <a href="{{ route('sigle',$news->id) }}" class="post-title">
                                    <h6>{{ $news->title }}</h6>
                                </a>
                                <p class="post-date">
                                    <span>{{ date('H:i',strtotime($news->created_at)) }}</span>
                                    |
                                    <span>{{ date('d/m/y',strtotime($news->created_at)) }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- ##### Featured Post Area End ##### -->

<!-- ##### Popular News Area Start ##### -->
<div class="popular-news-area section-padding-80-50">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="section-heading">
                    <h6>Du lịch</h6>
                </div>
                <div class="row">
                    @php
                        $travelNew=$newsTravel->slice(0,6);
                    @endphp
                    <!-- Single Post -->
                    @foreach($travelNew as $travel)
                        <div class="col-12 col-md-4">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="{{ route('sigle',$travel->id) }}"><img src="{{ $travel->avatar }}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="{{ route('sigle',$travel->id) }}" class="post-catagory">{{ $travel->categorys->name }}</a>
                                    <a href="{{ route('sigle',$travel->id) }}" class="post-title">
                                        <h6>{{ $travel->title }}</h6>
                                    </a>
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="{{ route('sigle',$travel->id) }}" class="post-like"><img src="img/core-img/like.png" alt="">
                                            <span>392</span></a>
                                        <a href="{{ route('sigle',$travel->id) }}" class="post-comment"><img src="img/core-img/chat.png" alt="">
                                            <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Single Post -->
                </div>
            </div>

            {{-- <div class="col-12 col-lg-4">
                <div class="section-heading">
                    <h6>Info</h6>
                </div>
                <!-- Popular News Widget -->
                <div class="popular-news-widget mb-30">
                    <h3>4 Most Popular News</h3>

                    <!-- Single Popular Blog -->
                    <div class="single-popular-post">
                        <a href="#">
                            <h6><span>1.</span> Amet, consectetur adipiscing elit. Nam eu metus sit amet odio
                                sodales.</h6>
                        </a>
                        <p>April 14, 2018</p>
                    </div>

                    <!-- Single Popular Blog -->
                    <div class="single-popular-post">
                        <a href="#">
                            <h6><span>2.</span> Consectetur adipiscing elit. Nam eu metus sit amet odio sodales
                                placer.</h6>
                        </a>
                        <p>April 14, 2018</p>
                    </div>

                    <!-- Single Popular Blog -->
                    <div class="single-popular-post">
                        <a href="#">
                            <h6><span>3.</span> Adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed
                                varius leo.</h6>
                        </a>
                        <p>April 14, 2018</p>
                    </div>

                    <!-- Single Popular Blog -->
                    <div class="single-popular-post">
                        <a href="#">
                            <h6><span>4.</span> Eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                        </a>
                        <p>April 14, 2018</p>
                    </div>
                </div>

                <!-- Newsletter Widget -->
                <div class="newsletter-widget">
                    <h4>Newsletter</h4>
                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <form action="#" method="post">
                        <input type="text" name="text" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                        <button type="submit" class="btn w-100">Subscribe</button>
                    </form>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- ##### Popular News Area End ##### -->

<!-- ##### Video Post Area Start ##### -->
<div class="video-post-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg1.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Video Post -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single-video-post">
                    <img src="img/bg-img/video1.jpg" alt="">
                    <!-- Video Button -->
                    <div class="videobtn">
                        <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Video Post -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single-video-post">
                    <img src="img/bg-img/video2.jpg" alt="">
                    <!-- Video Button -->
                    <div class="videobtn">
                        <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Video Post -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single-video-post">
                    <img src="img/bg-img/video3.jpg" alt="">
                    <!-- Video Button -->
                    <div class="videobtn">
                        <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Video Post Area End ##### -->

<!-- ##### Editorial Post Area Start ##### -->
<div class="editors-pick-post-area section-padding-80-50">
    <div class="container">
        <div class="row">
            <!-- Editors Pick -->
            <div class="col-12 col-md-7 col-lg-9">
                <div class="section-heading">
                    <h6>Thể thao</h6>
                </div>
                <div class="row">
                    <!-- Single Post -->
                    @foreach($newsSports as $sport)
                        <div class="col-12 col-lg-4">
                            <div class="single-blog-post">
                                <div class="post-thumb">
                                    <a href="{{ route('sigle',$sport->id) }}"><img src="{{ $sport->avatar }}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="{{ route('sigle',$sport->id) }}" class="post-title">
                                        <h6>{{ $sport->title }}</h6>
                                    </a>
                                    <div class="post-meta">
                                        <div class="post-date"><a
                                                href="{{ route('sigle',$sport->id) }}">{{ date('d/m/y',strtotime($sport->created_at)) }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- World News -->
            <div class="col-12 col-md-5 col-lg-3">
                <div class="section-heading">
                    <h6>Hot</h6>
                </div>
                @foreach($hotSports as $hot)
                    <!-- Single Post -->
                    <div class="single-blog-post style-2">
                        <div class="post-thumb">
                            <a href="{{ route('sigle',$hot->id) }}"><img src="{{ $hot->avatar }}" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="{{ route('sigle',$hot->id) }}" class="post-title">
                                <h6>{{ $hot->title }}</h6>
                            </a>
                            <div class="post-meta">
                                <div class="post-date"><a href="{{ route('sigle',$hot->id) }}">{{ date('d/m/y',strtotime($hot->created_at)) }}</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- ##### Editorial Post Area End ##### -->
@endsection
