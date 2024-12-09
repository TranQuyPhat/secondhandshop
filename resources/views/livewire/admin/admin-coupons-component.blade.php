<div>

    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Tất cả phiếu giảm giá
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addcoupon')}}" class="btn btn-success pull-right">Thêm phiếu giảm giá </a>

                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Mã giảm giá</th>
                                <th>Loại phiếu giảm giá</th>
                                <th>Giá trị phiếu giảm giá</th>
                                <th>Giá trị giỏ hàng</th>
                                <th>Ngày hết hạn</th>
                                <th>Hành động</th>
                            </thead>
                       
                        <tbody>
                            @foreach($coupons as $coupon)
                                <tr>
                                    <td>{{$coupon->id}}</td>
                                    <td>{{$coupon->code}}</td>
                                    <td>{{$coupon->type}}</td>

                                    @if($coupon->type == 'fixed')
                                        <td>${{$coupon->value}}</td>

                                    @else
                                     <td>{{$coupon->value}}%</td>
                                    
                                     @endif
                                    
                                    <td>{{$coupon->cart_value}}</td>
                                    <td>{{$coupon->expiry_date}}</td>
                                  
                                    <td>
                                        <a href="{{route('admin.editcoupon',['coupon_id'=>$coupon->id])}}"><i class="fa fa-edit fa-2x"> </i></a> 
                                        <a href="#"><i class="fa fa-times fa-2x text-danger" onclick="confirm('Bạn chắc chắn muốn xóa phiếu giảm giá này ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCoupon({{$coupon->id}})" style="margin-left: 10px;"></i></a>
                                   </td>
                                </tr>

                            @endforeach
                        </tbody>
                        </table>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
