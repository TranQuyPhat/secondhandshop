<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Cập nhật hồ sơ
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <form wire:submit.prevent="updateProfile">
                    <div class="col-md-4" style="border-right: 1px solid black ;">
                        @if($newimage)
                        <img src="{{$newimage->temporaryUrl()}}" width="100%" alt="" />
                        @elseif($image)

                            <img src="{{asset('assets/images/profile')}}/{{$image}}" width="100%" alt="" />
                        @else
                            <img src="{{asset('assets/images/profile/images.png')}}" width="100%" alt="" />
                        @endif
                        <input type="file" class="form-control" wire:model="newimage"> 
                    </div>
                    <div class="col-md-8">
                        <p><b>Tên :</b><input type="text" class="form-control" wire:model="name"></p>
                        <p><b>Email :</b>{{$email}}</p>
                        <p><b>Số điện thoại :</b><input type="text" class="form-control" wire:model="mobile"></p>
                        <hr>
                        <p><b>Quốc gia :</b><input type="text" class="form-control" wire:model="country"></p>
                        <p><b>Tỉnh :</b><input type="text" class="form-control" wire:model="province"></p>
                        <button type="submit" class="btn btn-info pull-right">Cập nhật  </button>
                        


                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
