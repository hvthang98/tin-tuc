@extends('backend.master.master')
@section('title')
	Chỉnh sửa thông tin người dùng
@endsection
@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Chỉnh sửa thông tin người Dùng
            </header>
            <div class="panel-body">
                <div class="position-center">
                    @include('notification.error')
                    @if (isset($user))
                        <form role="form"
                            action="{{ route('updateUser',$user->id) }}"
                            method="post">
                            @csrf
                            <div class="form-group">
                                <label for="mail">Email/Username </label>
                                <input type="text" name="username" class="form-control" id="" value="{{ $user->username }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="name">Tên </label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required >
                            </div>
                            <div class="form-group">
                                <label for="day">Ngày sinh</label>
                                <input type="date" name="birthday" class="form-control" value="{{ $user->birthday }}" required>
                            </div>
                            <div class="form-group">
                                <label for="gender">Giới tính</label>
                                <select name="gender" class="form-control input-sm m-bot15">
                                    <option value="0" @if ($user->gender==0)
                                        {{ 'selected' }}
                                    @endif>Nữ</option>
                                    <option value="1"  @if ($user->gender==1)
                                        {{ 'selected' }}
                                    @endif>Nam</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại</label>
                                <input type="number" name="phoneNumber" class="form-control"
                                    value="{{ $user->phone_number }}" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <input type="text" name="address" class="form-control" required value="{{ $user->address }}">

                            </div>
                            <div class="form-group">
                                <label for="level">Chức vụ</label>
                                <select name="level" class="form-control input-sm m-bot15">
                                    <option value="0" @if ($user->level==0)
                                        {{ 'selected' }}
                                    @endif>Quản lý</option>
                                    <option value="1"  @if ($user->level==1)
                                        {{ 'selected' }}
                                    @endif>Tác giả</option>
                                    <option value="2"  @if ($user->level==2)
                                        {{ 'selected' }}
                                    @endif>Người dùng</option>
                                </select>
                            </div>
                            <button type="submit" name="add-user" class="btn btn-info">Cập nhật người dùng</button>
                            <a
                                href="{{ route('getEditUser',$user->id) }}"><button
                                    class="btn btn-default" type="button" onclick="loading()">Xóa</button>
                            </a>
                        </form>
                    @endif
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
