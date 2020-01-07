@extends('home')

@section('index')

    <a href="{{route('staffs.create')}}"><img src="https://img.icons8.com/plasticine/50/000000/create-new.png"></a>
    <a href="{{route('staffs.index')}}"><img src="https://img.icons8.com/ultraviolet/50/000000/cancel-last-digit.png"></a>
    <table class="table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Mã Nhân Viên</th>
            <th scope="col">Nhóm Nhân Viên</th>
            <th scope="col">Họ Tên</th>
            <th scope="col">Giới Tính</th>
            <th scope="col">Số Điện thoại</th>
            <th scope="col">Chức Năng</th>
        </tr>
        </thead>

        <tbody>
        @foreach($staffs  as $staff )
            <tr>
                <th scope="row">{{$staff->staff_code}}</th>
                <td>{{$staff->role->role}}</td>
                <td>{{$staff->name}}</td>
                <td>{{$staff->gender}}</td>
                <td>{{$staff->phone}}</td>
                <td>
                    <a href="{{route('staffs.delete', $staff->id)}}"  onclick="return confirm('ban co muon xoa khong ?')"><img src="https://img.icons8.com/bubbles/40/000000/delete-sign.png"></a>
                    <a href="{{route('staffs.edit', $staff->id)}}" ><img src="https://img.icons8.com/cute-clipart/35/000000/edit.png"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$staffs->links()}}
@endsection
