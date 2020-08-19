<li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="img/bg-img/30.jpg" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author">{{Auth::user()->name}}</a>
                                            <a href="#" id="date" class="post-date">{{$com->created_at}}</a>
                                            <p>{{$com->content}}</p>
                                        </div>

                                    </div>
                                    <!-- <div class="rep" >Phản hồi
                                        <input id="{{$com->id}}" type="hidden" name="">
                                        <div class="reply" class="contact-form-area">
                                    
                                        <div class="row">
                                            
                                            <div class="col-12">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message">{{$com->content}}</textarea>
                                            </div>
                                            
                                        </div>
                                    
                                </div>
                                </div> -->
                                
                                    <!-- phản hồi bình luận -->
                                    
                                     <!-- Kết thúc phản hồi bình luận -->
                                </li>
                                