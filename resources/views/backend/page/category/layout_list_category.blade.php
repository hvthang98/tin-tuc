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
        Quản lý ảnh danh mục
    </div>
    @include('notification.error')
    <div class="row">
        <div class="col-sm-3 com-w3ls">
            <section class="panel">
                <div class="panel-body">
                    <a class="btn btn-compose">
                        Thêm danh mục
                    </a>
                </div>
                <div>
                    <form action="{{ route('createCategory') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" required >
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Lưu</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <div class="col-sm-9 mail-w3agile">
            <section class="panel">
                <header class="panel-heading wht-bg">
                    <h4 class="gen-case">Danh sách danh mục
                    </h4>
                </header>
                <div class="panel-body minimal">
                    <div class="table-inbox-wrap ">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width:50px;">STT</th>
                                        <th>Tên danh mục</th>
                                        <th>Trạng thái</th>
                                        <th>Tùy Chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($categories)>0)
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>{{ $stt++ }}</td>
                                                <td>{{ $category ->name }}</td>
                                                <td>@if ($category->status == 0)
                                                    {{ 'Ẩn' }}
                                                @elseif($category->status == 1)
                                                    {{ 'Hiện' }}
                                        @endif
                                        </td>
                                        <td>
                                            <i class="fa fa-edit style-icon edit" data-name="{{ $category->name }}"
                                                data-id="{{ $category->id }}">
                                            </i>
                                            <a
                                                href="{{ route('deleteCategory',$category->id) }}"><i
                                                    class="fa fa-times style-icon"></i></a>
                                        </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <footer class="panel-footer">

                        </footer>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="col-lg-8 show-form">
        <section class="panel">
            <header class="panel-heading">
                Chỉnh sửa danh mục
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
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" class="form-control form-edit" name="name" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Trạng thái</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" id="" value="1" checked>
                                    Hiện
                                </label>
                            </div>
                            <div class="radio">
                                <label>
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
    let id;
    showForm.hide();
    $('.timeout').click(function () {
        showForm.hide();
    });
    $('.edit').click(function () {
        let name = this.dataset.name;
        id = parseInt(this.dataset.id);
        showForm.show();
        $('.show-form .form-edit').attr('value', name);
        $('#form-category').attr('action', url + id);
    });

</script>
@endsection
