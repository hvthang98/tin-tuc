@extends('backend.master.master')
@section('main-content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh sách người dùng
        </div>
        <table class="table table-striped b-t b-light">

            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Email</th>
                <th>Tên</th>
                <th>Ngày sinh</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Chức vụ</th>
                <th></th>
            </tr>
            @if(isset($users))
                @foreach($users as $user)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ date('d-m-Y',strtotime($user->birthday)) }}</td>
                        <td>{{ $user->phone_number }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            @if($user->level==0)
                                Quản lý
                            @elseif($user->level==1)
                                Tác giả
                            @elseif($user->level==2)
                                Người dùng
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('getEditUser',$user->id) }}"><i
                                    style="font-size: 20px" class="fa fa-pencil text-success text-active"></i></a>
                            <a href="{{ route('deleteUser',$user->id) }}"><i
                                    class="fa fa-trash-o" style="font-size:24px" onclick="questionLoading('Bạn có chắc chắn xóa user này không?')"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
        {{ $users->links() }}
    </div>
</div>

@endsection
