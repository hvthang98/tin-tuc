@extends('backend.master.master')
@section('title')
Quản lý danh mục
@endsection
@section('main-content')
<style>
    .style-icon {
        font-size: 26px;
        color: #000000;
        cursor: pointer;
    }

    .show-form {
        position: fixed;
        top: 200px;
        right: 110px;
    }

</style>
<div class="">
    <div class="panel-heading">
        Quản lý loại tin
    </div>
    @include('notification.error')
    <div class="row">
        <div class="col-sm-3 com-w3ls">
            <section class="panel" style="padding-bottom: 20px;">
                <div class="panel-body">
                    <a class="btn btn-compose">
                        Thêm loại tin
                    </a>
                </div>
                <div class="panel-body" style="display: block;">
                    <form action="{{ route('postTypeNews') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="type_name" required>
                        </div>
                        <div class="form-group ">
                            <label>Danh mục</label>
                            <div>
                                <select class="form-control m-bot15" name="categorys_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-info">Lưu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <div class="col-sm-9 mail-w3agile">
            <section class="panel">
                <header class="panel-heading wht-bg">
                    <h4 class="gen-case">Danh sách loại tin
                    </h4>
                </header>
                <div class="panel-body minimal">
                    <div class="table-inbox-wrap ">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width:50px;">STT</th>
                                        <th>Tên loại tin</th>
                                        <th>Danh mục</th>
                                        <th>Trạng thái</th>
                                        <th>Tùy Chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($typeNews)>0)
                                        @foreach($typeNews as $type)
                                            <tr>
                                                <td>{{ $stt++ }}</td>
                                                <td>{{ $type ->type_name }}</td>
                                                <td>{{ $type->categorys->name }}</td>
                                                <td>
                                                    @if($type->status == 0)
                                                        {{ 'Ẩn' }}
                                                    @elseif($type->status == 1)
                                                        {{ 'Hiện' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <i class="fa fa-edit style-icon edit"
                                                        data-name="{{ $type->type_name }}" data-id="{{ $type->id }}"
                                                        data-status="{{ $type->status }}"
                                                        data-category="{{ $type->categorys->id }}">
                                                    </i>
                                                    <a
                                                        href="{{ route('deleteTypeNews',$type->id) }}"><i
                                                            class="fa fa-times style-icon"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <footer class="panel-footer">
                            {{ $typeNews->links() }}
                        </footer>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="col-lg-8 show-form">
        <section class="panel">
            <header class="panel-heading">
                Chỉnh sửa thể loại
                <span class="pull-right">
                    <i class="fa fa-times style-icon timeout"></i>
                </span>
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="" id="form-category" method="POST">
                        @csrf
                        <div class="form-group">
                            @csrf
                            <label for="exampleInputEmail1">Tên thể loại</label>
                            <input type="text" class="form-control form-edit" name="type_name" value="">
                        </div>
                        <div class="form-group ">
                            <label>Danh mục</label>
                            <select class="form-control m-bot15" name="categorys_id" id="select-category">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Trạng thái</label>
                            <div class="radio">
                                <label id="status-show">
                                    <input type="radio" name="status" id="" value="1">
                                    Hiện
                                </label>
                            </div>
                            <div class="radio">
                                <label id="status-hide">
                                    <input type="radio" name="status" id="" value="0">
                                    Ẩn
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Lưu</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    let showForm = $('.show-form');
    let url = location.origin + location.pathname + '/update/';
    showForm.hide();
    $('.timeout').click(function () {
        showForm.hide();
    });
    $('.edit').click(function () {
        let name = this.dataset.name;
        let id = parseInt(this.dataset.id);
        let status = parseInt(this.dataset.status);
        let idCategory = parseInt(this.dataset.category);
        console.log(idCategory);
        showForm.show();
        $('.show-form .form-edit').attr('value', name);
        $('#form-category').attr('action', url + id);
        let statusShow = '<input type="radio" name="status" id="" value="1"' + 'checked' + '>Hiện';
        let statusHide = '<input type="radio" name="status" id="" value="0"' + 'checked' + '>Ẩn';
        if (status == 1) {
            $('#status-show').html(statusShow);
        } else {
            $('#status-hide').html(statusHide);
        }
        insertCategory(idCategory);
    });
    // category

    let category = '<?php echo $category_json ?>';
    listCategory = JSON.parse(category);
    function insertCategory(id) {
        let list = [];
        let option;
        for (let item of listCategory) {
            if (item.id == id){
                option = '<option value="'+item.id+'" selected>'+item.name+'</option>';
            }
            else{
                option = '<option value="'+item.id+'">'+item.name+'</option>';
            }
            list.push(option);
        }
        $('#select-category').html(list.join(''));
    }

</script>
@endsection
