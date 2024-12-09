<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Hồ sơ cá nhân
                </div>
                <div class="panel-body">
                    <div class="col-md-4" style="border-right: 1px solid black ;">
                        @if($user->profile->image)
                            <img src="{{asset('assets/images/profile')}}/{{$user->profile->image}}" width="100%" alt="" />
                        @else
                            <img src="{{asset('assets/images/profile/images.png')}}" width="100%" alt="" />
                        @endif
                    </div>
                    <div class="col-md-8">
                        <p><b>Tên :</b>{{$user->name}}</p>
                        <p><b>Email :</b>{{$user->email}}</p>
                        <p><b>SỐ điện thoại :</b>{{$user->profile->mobile}}</p>
                        <hr>
                        <p><b>Quốc gia :</b>{{$user->profile->country}}</p>
                        <p><b>Tỉnh :</b>{{$user->profile->province}}</p>
                        <a href="{{route('user.editprofile')}}" class="btn btn-info pull-right">Cập nhật hồ sơ</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
