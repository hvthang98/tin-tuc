@extends('backend.master.master')
@section('main-content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh sách tin tức
        </div>
        <table id="tab" class="table table-striped b-t b-light">

            <tr>
                <th>STT</th>
                <th>Tiêu đề</th>
                <th>Loại tin</th>
                <th>Tác giả</th>
                <th>Hình đại diện</th>
                <th>Tóm lược</th>
                <th>Số lượt xem</th>
                <th>Số lược thích</th>
                
                <th></th>
            </tr>

            @if(isset($news))
            <?php $i = 1; ?>
                @foreach($news as $new)
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td>{{ $new->title }}</td>
                        <td>{{ $new->type_name }}</td>
                        <td>{{ $new->name }}</td>
                        <td><img width="100" height="100" src="../../public/images/{{$new->avatar}}"></td>
                       
                        <td> {!!$new->summary!!}</td>
                        <td>{{$new->view}}</td>
                        <td>{{$new->like}}</td>
                        <td>
                            <a href="{{route('edit-new',['id'=>$new->id])}}"><i
                                    style="font-size: 20px" class="fa fa-pencil text-success text-active"></i></a>
                            <a href="{{route('delete-new',['id'=>$new->id])}}"><i
                                    class="fa fa-trash-o" style="font-size:24px" onclick="questionLoading('Bạn có chắc chắn xóa user này không?')"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
        {{ $news->links() }}
    </div>
</div>
@endsection
