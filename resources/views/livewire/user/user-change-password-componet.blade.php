<div>
   <div class="container" style="padding:  30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel ">
                <h3>Thay đổi mật khẩu </h3>
            </div>
            <div class="panel-body">
                @if(Session::has('password_success'))
                    <div class="alert alert-success" role="alert">{{Session::get('password_success')}}</div>
                @endif

                @if(Session::has('password_error'))
                    <div class="alert alert-danger" role="alert">{{Session::get('password_error')}}</div>
                @endif
                <form class="form-horizontal" wire:submit.prevent="changePassword">
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Mật khẩu hiện tại</label>
                        <div class="col-md-4">
                            <input type="password" placeholder="Mật khẩu hiện tại" class="form-control input-md" name="current_password" wire:model="current_password" />
                            @error('current_password') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Mật khẩu mới</label>
                        <div class="col-md-4">
                            <input type="password" placeholder="Mật khẩu mới" class="form-control input-md" name="password" wire:model="password"/>
                            @error('password') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Xác thực mật khẩu</label>
                        <div class="col-md-4">
                            <input type="password" placeholder="Vui lòng nhập lại mật khẩu mới" class="form-control input-md" name="password_confirmmation" wire:model="password_confirmation" />
                            @error('password_confirmation') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                           <button type="submit" class="btn btn-primary"> Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

   </div>
</div>
