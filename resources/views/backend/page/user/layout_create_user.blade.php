@extends('backend.master.master')
@section('title')
Đăng ký tài khoản
@endsection
@section('main-content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Đăng ký tài khoản User
        </header>
        <div class="panel-body" style="display: block;">
            @include('notification.error')
            <div class="form">
                <form class="cmxform form-horizontal " id="signupForm" method="post"
                    action="{{ route('postCreateUser') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group ">
                        <label for="username" class="control-label col-lg-3">Username/Email</label>
                        <div class="col-lg-6">
                            <input class="form-control " id="username-input" name="username" type="email" required>
                            <p class="text-danger notify-username">Email đã tồn tại, xin nhập lại</p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="password" class="control-label col-lg-3">Mật khẩu</label>
                        <div class="col-lg-6">
                            <input class="form-control password-input" id="" name="password" type="password" required>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="confirm_password" class="control-label col-lg-3">Nhập lại mật khẩu</label>
                        <div class="col-lg-6">
                            <input class="form-control confirm_password" id="" name="password_confirmation"
                                type="password" required>
                            <p class="text-danger notify-confirmed">Nhập lại mật khẩu sai</p>
                        </div>
                    </div>
                    {{-- <div class="form-group ">
                        <label for="firstname" class="control-label col-lg-3">Ảnh đại diện</label>
                        <div class="col-lg-6">
                            <input class=" form-control" id="" name="avtar" type="file">
                        </div>
                    </div> --}}
                    <div class="form-group ">
                        <label for="firstname" class="control-label col-lg-3">Họ và Tên</label>
                        <div class="col-lg-6">
                            <input class=" form-control" id="firstname" name="name" type="text" required>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="firstname" class="control-label col-lg-3">Ngày sinh</label>
                        <div class="col-lg-6">
                            <input class=" form-control" id="" name="birthday" type="date" required>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="lastname" class="control-label col-lg-3">Số điện thoại</label>
                        <div class="col-lg-6">
                            <input class=" form-control" id="phone-number" name="phoneNumber" type="number" required>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="email" class="control-label col-lg-3">Địa chỉ</label>
                        <div class="col-lg-6">
                            <input class="form-control " id="" name="address" type="text" required>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="email" class="control-label col-lg-3">Giới tính</label>
                        <div class="col-lg-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" id="optionsRadios1" value="1" checked>
                                    Nam
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" id="optionsRadios1" value="0">
                                    Nữ
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="email" class="control-label col-lg-3">Chức vụ</label>
                        <div class="col-lg-6">
                            <select class="form-control m-bot15" name="level">
                                <option value="0">Quản lý</option>
                                <option value="1">Tác giả</option>
                                <option value="2" selected>Người dùng</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-6">
                            <button class="btn btn-primary" type="submit">Save</button>
                            <button class="btn btn-default" type="button">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<script>
    //check username
    var username = $('#username-input');
    $('.notify-username').hide();
    username.keyup(function () {
        let text = username.val();
        let url = location.origin + '/tin-tuc/ajax/check-user';
        $.get(url, {
            username: text
        }, function (data) {
            if (data == false) {
                $('.notify-username').show();
            } else {
                $('.notify-username').hide();
            }
        });
    })
    //check password as confirmed password
    let password = $('.password-input');
    let confirmSelect = $('.confirm_password');
    let notifiConfirmed = $('.notify-confirmed');
    notifiConfirmed.hide();
    confirmSelect.change(function () {
        checkPassword();
    });
    function checkPassword() {
        let inputPassword = password.val();
        let inputConfirm = confirmSelect.val();
        if (inputPassword == inputConfirm) {
            notifiConfirmed.hide();
        } else {
            notifiConfirmed.show();
        }
    }

</script>
@endsection
