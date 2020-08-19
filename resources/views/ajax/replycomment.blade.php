
<li class="single_comment_area">
    <!-- Comment Content -->
    <div class="comment-content d-flex">
        <!-- Comment Author -->
        <div class="comment-author">
            <img src="img/bg-img/31.jpg" alt="author">
        </div>
        <!-- Comment Meta -->
        <div class="comment-meta">
            <a href="#" class="post-author">{{$reply->users->name}}</a>
            <a href="#" class="post-date">{{$reply->created_at}}</a>
            <p>{{$reply->content}}</p>
        </div>
    </div>
</li>