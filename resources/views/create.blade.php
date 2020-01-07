@extends('home')
@section('index')
    <h3>Thêm mới nhân viên</h3>
    <div class="container">
        <div class="row">
            <form method="post">
                @csrf
                <div class="form-group">
                    <label>Mã nhân viên</label>
                    <input type="text" class="form-control
                @if($errors->has('staffCode'))
                        border-danger
                        @endif
" name="staffCode">
                    @if($errors->has('staffCode'))
                        <p class="text-danger"><img
                                src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('staffCode')}}</p>
                    @endif
                </div>
                <label>Chọn nhóm nhân viên</label>
                <select name="role_id">
                    @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->role}}</option>
                    @endforeach
                </select>
                <div class="form-group">
                    <label>Họ và tên</label>
                    <input type="text" class="form-control
                     @if($errors->has('name'))
                        border-danger
                        @endif
" name="name">
                    @if($errors->has('name'))
                        <p class="text-danger"><img
                                src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('name')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Ngày sinh</label>
                    <input type="text" class="form-control
                     @if($errors->has('day_of_birth'))
                                            border-danger
                                            @endif
" name="day_of_birth">
                    @if($errors->has('day_of_birth'))
                        <p class="text-danger"><img
                                src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('day_of_birth')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Giới tính</label>
                    <input type="radio" name="gender" value="male"> Nam<br>
                    <input type="radio" name="gender" value="female"> Nữ<br>
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" class="form-control
                     @if($errors->has('phone'))
                        border-danger
                        @endif
" name="phone">
                    @if($errors->has('phone'))
                        <p class="text-danger"><img
                                src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('phone')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Số CMND</label>
                    <input type="text" class="form-control
                         @if($errors->has('id_card'))
                        border-danger
                        @endif
" name="id_card">
                    @if($errors->has('id_card'))
                        <p class="text-danger"><img
                                src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('id_card')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control
                     @if($errors->has('email'))
                        border-danger
                        @endif
" name="email">
                    @if($errors->has('email'))
                        <p class="text-danger"><img
                                src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('email')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input type="text" class="form-control
                         @if($errors->has('address'))
                        border-danger
                        @endif
" name="address">
                    @if($errors->has('address'))
                        <p class="text-danger"><img
                                src="https://img.icons8.com/color/20/000000/high-importance--v1.png">{{$errors->first('address')}}</p>
                    @endif
                </div>
                <button type="submit"><img src="https://img.icons8.com/plasticine/50/000000/create-new.png"></button>
                <a href="{{route('staffs.index')}}"><img src="https://img.icons8.com/ultraviolet/50/000000/cancel-last-digit.png"></a>
            </form>
        </div>

    </div>

@endsection
