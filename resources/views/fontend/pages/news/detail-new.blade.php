@extends('fontend.master.master')
@section('main-content')
<div class="hero-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8">
                <!-- Breaking News Widget -->
                <div class="breaking-news-area d-flex align-items-center">
                    <div class="news-title">
                        <p>Breaking News</p>
                    </div>
                    <div id="breakingNewsTicker" class="ticker" style="height: 38px;">
                        <ul>



                            <li class="tickerHook"
                                style="top: 3.2928px; left: 0px; position: absolute; display: block; opacity: 0.9216; z-index: 99;">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li class=""
                                style="top: -3em; left: 0px; position: absolute; display: block; opacity: 0; z-index: 98;">
                                <a href="#">Welcome to Colorlib Family.</a></li>
                            <li class=""
                                style="top: -2.7648em; left: 0px; position: absolute; display: block; opacity: 0.0784; z-index: 98;">
                                <a href="#">Nam eu metus sitsit amet, consec!</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Breaking News Widget -->
                <div class="breaking-news-area d-flex align-items-center mt-15">
                    <div class="news-title title2">
                        <p>International</p>
                    </div>
                    <div id="internationalTicker" class="ticker" style="height: 38px;">
                        <ul>



                            <li class="tickerHook"
                                style="top: 3.2928px; left: 0px; position: absolute; display: block; opacity: 0.9216; z-index: 99;">
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li class=""
                                style="top: -3em; left: 0px; position: absolute; display: block; opacity: 0; z-index: 98;">
                                <a href="#">Welcome to Colorlib Family.</a></li>
                            <li class=""
                                style="top: -2.7648em; left: 0px; position: absolute; display: block; opacity: 0.0784; z-index: 98;">
                                <a href="#">Nam eu metus sitsit amet, consec!</a></li>
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
<div class="blog-area section-padding-0-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="blog-posts-area">
                    <!-- Single Featured Post -->
                    <div class="single-blog-post featured-post single-post">
                        <div class="post-thumb" style="background-color: red">
                            <a href="#"><img src="img/bg-img/25.jpg" alt="" style="width: 100%"></a>
                        </div>
                        @foreach($new as $ne)
                            <div class="post-data">
                                <a href="#" class="post-catagory">{{ $ne->type_news->type_name }}</a>
                                <a href="#" class="post-title">
                                    <h6>{{ $ne->title }}</h6>
                                </a>
                                <input type="hidden" id="new_id" name="" value="{{ $ne->id }}">
                                <input type="hidden" id="user_id" name="" value="<?php if(Auth::check()){
                                echo Auth::user()->id ;
                            } ?>">
                                <div class="post-meta">
                                    <p class="post-author">Tác giả: <a href="#">{{ $ne->users->name }}</a></p>
                                    {!! $ne->content !!}
                                    <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                        <!-- Tags -->
                                        <div class="newspaper-tags d-flex">
                                            <span>Tags:</span>
                                            <ul class="d-flex">
                                                <li><a href="#">finacial,</a></li>
                                                <li><a href="#">politics,</a></li>
                                                <li><a href="#">stock market</a></li>
                                            </ul>
                                        </div>

                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center post-like--comments">
                                            <a href="#" class="post-like"><img id="like" src="img/core-img/like.png"
                                                    alt=""> <span id="like1">{{ $ne->like }}</span></a>
                                            <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt="">
                                                <span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <!-- About Author -->
                    <div class="blog-post-author d-flex">
                        <div class="author-thumbnail">
                            <img src="img/bg-img/32.jpg" alt="">
                        </div>
                        <div class="author-info">
                            <a href="#" class="author-name">James Smith, <span>The Author</span></a>
                            <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi.
                                Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis
                                sapien.</p>
                        </div>
                    </div>

                    <div class="pager d-flex align-items-center justify-content-between">
                        <div class="prev">
                            <a href="#" class="active"><i class="fa fa-angle-left"></i> previous</a>
                        </div>
                        <div class="next">
                            <a href="#">Next <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>

                    <div class="section-heading">
                        <h6>Tin liên quan</h6>
                    </div>

                    <div class="row">
                        @foreach($othernew as $other)
                            <!-- Single Post -->
                            <div class="col-12 col-md-4">
                                <div class="single-blog-post style-3 mb-80">
                                    <div class="post-thumb">
                                        <a href="#"><img src="../../public/images/{{ $other->avatar }}" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="{{ route('sigle',['id'=>$other->id]) }}"
                                            class="post-catagory">{{ $other->title }}</a>
                                        <a href="{{ route('sigle',['id'=>$other->id]) }}"
                                            class="post-title">
                                            <h6>{!! $other->summary !!}</h6>
                                        </a>
                                        <div class="post-meta d-flex align-items-center">
                                            <a href="#" class="post-like"><img src="img/core-img/like.png" alt="">
                                                <span>{{ $other->like }}</span></a>
                                            <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt="">
                                                <span>10</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>

                    <!-- Comment Area Start -->


                    <div class="comment_area clearfix">
                        <h5 class="title">{{ $ne->comments->count() }} Bình luận</h5>

                        <ol id="ol1">
                            @foreach($ne->comments as $com)
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="img/bg-img/30.jpg" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author">{{ $com->users->name }}</a>
                                            <a href="#" class="post-date">Gửi vào: {{ $com->created_at }}</a>
                                            <p>{{ $com->content }}</p>
                                        </div>

                                    </div>


                                    <!-- phản hồi bình luận -->
                                    <?php $replies = $com->reply_comments()->where('comments_id','=', $com->id)->get() ?>
                                    <div class="showreply">
                                        <div class="notifi-reply">
                                            @if(count($replies)!= 0)
                                                <span class="notifi" style="margin-left: 100px;"> Có
                                                    {{ count($replies) }} phản hồi</span>

                                        </div>
                                        <div class="area-replies">

                                            <ol class="children" id="replycom{{ $com->id }}">
                                                @foreach($replies as $reply)
                                                    <li class="single_comment_area">
                                                        <!-- Comment Content -->
                                                        <div class="comment-content d-flex">
                                                            <!-- Comment Author -->
                                                            <div class="comment-author">
                                                                <img src="img/bg-img/31.jpg" alt="author">
                                                            </div>
                                                            <!-- Comment Meta -->
                                                            <div class="comment-meta">
                                                                <a href="#"
                                                                    class="post-author">{{ $reply->users->name }}</a>
                                                                <a href="#" class="post-date">Đã gửi lúc:
                                                                    {{ $reply->created_at }}</a>
                                                                <p>{{ $reply->content }}</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ol>
                                        </div>


                            @endif
                            <div class="rep">
                                <span style="margin-left: 100px;width: 100px">Phản hồi</span>
                                <div class="reply" class="contact-form-area">

                                    <div class="row">

                                        <div class="col-12">
                                            <input class="comments_id" type="hidden" value="{{ $com->id }}" name="">
                                            <textarea id="textarea{{ $com->id }}" style="margin-left: 100px;"
                                                name="message" class="form-contro" cols="102" rows="5"
                                                placeholder="Message"></textarea>
                                        </div>
                                        <div class="send-reply">
                                            <button style="margin-left: 100px;"
                                                class="btn newspaper-btn mt-30 w-100">Gửi phản hồi</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                    </div>
                    <!-- Kết thúc phản hồi bình luận -->
                    </li>

                    @endforeach
                    <!-- Single Comment Area -->


                    <!-- Single Comment Area -->

                    </ol>
                </div>
                @endforeach
                <div class="post-a-comment-area section-padding-80-0">
                    <h4>Viết ý kiến của bạn</h4>

                    <!-- Reply Form -->
                    <div class="contact-form-area">


                        <div class="row">

                            <div class="col-12">
                                <textarea name="comment" id="comment_text" cols="102" rows="5"
                                    placeholder="Ý kiến của bạn"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button id="subcomment" class="btn newspaper-btn mt-30 w-100">Gửi bình luận</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
{{--  
        <div class="col-12 col-lg-4">
            <div class="blog-sidebar-area">

                <!-- Latest Posts Widget -->
                <div class="latest-posts-widget mb-50">

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">Finance</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                </a>
                                <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/20.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">Politics</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>Sed a elit euismod augue semper congue sit amet ac sapien.</h6>
                                </a>
                                <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/21.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">Health</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                </a>
                                <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/22.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">Finance</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                </a>
                                <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/23.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">Travel</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                </a>
                                <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="img/bg-img/24.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">Politics</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                </a>
                                <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Popular News Widget -->
                <div class="popular-news-widget mb-50">
                    <h3>4 Most Popular News</h3>

                    <!-- Single Popular Blog -->
                    <div class="single-popular-post">
                        <a href="#">
                            <h6><span>1.</span> Amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales.
                            </h6>
                        </a>
                        <p>April 14, 2018</p>
                    </div>

                    <!-- Single Popular Blog -->
                    <div class="single-popular-post">
                        <a href="#">
                            <h6><span>2.</span> Consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer.
                            </h6>
                        </a>
                        <p>April 14, 2018</p>
                    </div>

                    <!-- Single Popular Blog -->
                    <div class="single-popular-post">
                        <a href="#">
                            <h6><span>3.</span> Adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius
                                leo.</h6>
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
                <div class="newsletter-widget mb-50">
                    <h4>Newsletter</h4>
                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <form action="#" method="post">
                        <input type="text" name="text" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                        <button type="submit" class="btn w-100">Subscribe</button>
                    </form>
                </div>

                <!-- Latest Comments Widget -->
                <div class="latest-comments-widget">
                    <h3>Latest Comments</h3>

                    <!-- Single Comments -->
                    <div class="single-comments d-flex">
                        <div class="comments-thumbnail mr-15">
                            <img src="img/bg-img/29.jpg" alt="">
                        </div>
                        <div class="comments-text">
                            <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                            <p>06:34 am, April 14, 2018</p>
                        </div>
                    </div>

                    <!-- Single Comments -->
                    <div class="single-comments d-flex">
                        <div class="comments-thumbnail mr-15">
                            <img src="img/bg-img/30.jpg" alt="">
                        </div>
                        <div class="comments-text">
                            <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                            <p>06:34 am, April 14, 2018</p>
                        </div>
                    </div>

                    <!-- Single Comments -->
                    <div class="single-comments d-flex">
                        <div class="comments-thumbnail mr-15">
                            <img src="img/bg-img/31.jpg" alt="">
                        </div>
                        <div class="comments-text">
                            <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                            <p>06:34 am, April 14, 2018</p>
                        </div>
                    </div>

                    <!-- Single Comments -->
                    <div class="single-comments d-flex">
                        <div class="comments-thumbnail mr-15">
                            <img src="img/bg-img/32.jpg" alt="">
                        </div>
                        <div class="comments-text">
                            <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                            <p>06:34 am, April 14, 2018</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  --}}
    </div>
</div>
</div>


<script type="text/javascript">
    $(document).ready(function () {


        var a = $("#new_id").attr('value');

        $("#like").on('click', function () {
            if (checklogin() == false) {
                alert('Bạn chưa đăng nhập');
            } else if (checklogin() == true) {
                $("#like").css('background-color', 'blue');


                $.get(
                    "http://localhost:8080/tin-tuc/ajax/like/" + a,


                    function (data) {

                        $("#like1").text(data);
                    }
                );
            }
        });

        function checklogin() {
            var check = $('#user_id').attr('value');
            if (check != '') {
                return true;
            } else if (check == '') {
                return false;
            }
        }

        $(".reply").hide();

        $(".rep").on('click', function () {

            $(this).children('.reply').show();

        });

        $("#message").on('click', function () {

            if (checklogin() == false) {
                var con = confirm(
                    'Để bình luận bạn phải đăng nhập. Bạn có muốn chuyển sang trang đăng nhập ?');
                if (con == true) {
                    $(location).attr('href', 'http://www.facebook.com')
                }
            }

        });

        $("#sendreply").on('click', function () {
            if (checklogin() == false) {
                alert("Bạn chưa đăng nhập");
            } else if (checklogin() == true) {
                var reply = $("#message").val();
                if (reply == '') {
                    alert("Bạn chưa điền phản hồi bình luận");
                } else {
                    //ajax
                }
            }
        });

        $("#comment_text, .form-contro").on('click', function () {

            if (checklogin() == false) {
                var con = confirm(
                    'Để bình luận bạn phải đăng nhập. Bạn có muốn chuyển sang trang đăng nhập ?');
                if (con == true) {
                    $(location).attr('href', 'http://www.hoclaptrinh.org')
                }
            }

        });
        $("#subcomment").on('click', function () {
            if (checklogin() == false) {
                alert("Bạn chưa đăng nhập");
            } else if (checklogin() == true) {
                var reply = $("#comment_text").val();
                reply = $.trim(reply);
                if (reply == '') {
                    alert("Bạn chưa điền bình luận");
                } else {
                    $.get(
                        "http://localhost:8080/tin-tuc/ajax/comment/" + a, {
                            content: reply
                        },

                        function (data1) {
                            $("#ol1").append(data1);
                            $("#comment_text").val(" ");
                            alert('Đã gửi bình luận thành công');

                        }

                    );

                }
            }
        });

        $(".area-replies").hide();
        $(".notifi-reply").on('click', function () {

            $(this).parent().find(".area-replies").show();
        });

        $(".notifi").on('click', function () {
            $(this).hide();
        });

        $(".send-reply").on('click', function () {

            if (checklogin() == false) {
                alert("Bạn chưa đăng nhập");
            } else if (checklogin() == true) {
                var reply = $(this).parent().find("textarea").val();

                var comments_id = $(this).parent().find(".comments_id").val();

                reply = $.trim(reply);

                if (reply == '') {
                    alert("Bạn chưa điền bình luận");
                } else {
                    $.get(
                        "http://localhost:8080/tin-tuc/ajax/reply-comment/" + comments_id, {
                            content: reply
                        },

                        function (data) {
                            var list = '#replycom' + comments_id;
                            var textarea = '#textarea' + comments_id;
                            $(list).append(data);
                            $(textarea).val('');
                            alert('Đã gửi phản hồi thành công');

                        }

                    );

                }
            }
        });


    });

</script>
@endsection
<!-- ##### Blog Area End ##### -->

<!-- ##### Footer Area Start ##### -->

<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
