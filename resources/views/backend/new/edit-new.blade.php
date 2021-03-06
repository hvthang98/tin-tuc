@extends('backend.master.master')
@section('main-content')
<div class="form-w3layouts">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật tin tức 
                </header>
                <div class="panel-body">
                    <div class="form">

                        <form class="cmxform form-horizontal " id="" method="post"
                            action="{{route('post-edit-new',['id'=>$news->id])}}"  enctype="multipart/form-data">
                            @csrf
                            
                            
                            <div class="form-group ">
                                <label for="name" class="control-label col-lg-3">Cập nhật tiêu đề tin tức</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="name" name="title" type="text" value="{{$news->title}}" 
                                        oninvalid="this.setCustomValidity('Không được để trống')"
                                        oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="" class="control-label col-lg-3">Danh mục tin tức</label>
                                <div class="col-lg-6">
                                    <select class="form-control m-bot15" id="danhmuc" name="categorys">
                                        @foreach($categories as $cat)
                                                <option value="{{$cat->id}}" <?php if($news->categorys_id == $cat->id) echo 'selected="selected"'; ?> >{{$cat->name}}</option>
                                         @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="" class="control-label col-lg-3">Loại tin tức</label>
                                <div class="col-lg-6">
                                    <select class="form-control m-bot15" id="loaitin" name="type_news">
                                        @foreach($typenews as $type)
                                                <option value="{{$type->id}}" <?php if($news->type_news_id == $type->id) echo 'selected="selected"'; ?> >{{$type->type_name}}</option>
                                         @endforeach
                                    </select>
                                </div>
                            </div>


                             <div class="form-group ">
                                <label for="" class="control-label col-lg-3">Tác giả</label>
                                <div class="col-lg-6"> 
                                   <input class=" form-control" type="text" name="user" disabled="disabled" 
                                        oninvalid="this.setCustomValidity('Không được để trống')"
                                        oninput="this.setCustomValidity('')" value="{{Auth::user()->name}}">
                                </div>
                            </div>
                            <div class="form-group ">
                            	<img style="margin-left: -490px; margin-top: 39px;" src="../../public/images/{{$news->avatar}}" width="200" height="200">
                                <label for=" file" class="control-label col-lg-3">Hình ảnh đại diện</label>

                                <div class="col-lg-6">
                                    <input type="file" name="avatar" >
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for=" mota" class="control-label col-lg-3">Thêm mô tả tin tức</label>
                                <div class="col-lg-6">
                                    <textarea  id="editor1" name="summary" cols="10">{!!$news->summary!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for=" content" class="control-label col-lg-3">Thêm nội dung tin tức</label>
                                <div class="col-lg-6">
                                    <textarea class="ckeditor" id="content" name="content" >{!!$news->content!!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Nhập vào tag cho tin tức</label>
                                <select name="tags[]" class="form-control multi-tag" multiple="multiple" style="width: 500px"  >
                                   
                                   @foreach($news->tags as $ta)

                                   <option value="{{$ta->tag_name}}"  selected="selected">{{$ta->tag_name}}</option>
                                   
                                   @endforeach 

                            </select>

                        <script type="text/javascript">

                            $(".multi-tag").select2({
                                tags: true,
                                tokenSeparators: [',']
                            })


                        </script>
                                
                            </div>
                            <div class="form-group ">
                                <label for=" order" class="control-label col-lg-3">Order Num</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" type="text" id="order" name="ordernum" value="{{$news->ordernum}}" 
                                        oninvalid="this.setCustomValidity('Không được để trống')"
                                        oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            
                             
                            <div class="form-group ">
                                <label for="sellprice" class="control-label col-lg-3">Trạng thái</label>
                                <div class="col-lg-6">
                                    <label>
                                        <input type="radio" name="status" id="" value="1" <?php 
                                        	if($news->status == 1){
                                        		echo 'checked = "checked"';
                                        	}
                                         ?> >
                                        Hiện
                                        <input type="radio" name="status" id="" value="0"
                                        <?php 
                                        	if($news->status == 0){
                                        		echo 'checked = "checked"';
                                        	}
                                         ?>>
                                        Ẩn
                                    </label>
                                </div>
                            </div>
							
                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <button class="btn btn-primary" type="submit">Tạo tin tức</button>
                                    <a href="" onclick="loading()"><button
                                            class="btn btn-default" type="button">Xóa</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- page end-->
    
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#danhmuc").change(function(){

			var danhmuc = $(this).val();
			$.get(
				"http://localhost:8080/tin-tuc/admin/ajax/danhmuc/"+danhmuc,
				
				 function(data){
				 	
					$("#loaitin").html(data);
				}
				);
		});
	});
</script>
@endsection