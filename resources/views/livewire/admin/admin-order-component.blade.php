<div>
    <style>
        nav svg {
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tất cả đơn hàng
                    </div>
                    <div class="panel-body">
                        @if(Session::has('order_massage'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('order_message')}}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>OrderId</th>
                                    <th>Tổng tiền sản phẩm </th>
                                    <th>Giảm </th>
                                    <th>Thuế</th>
                                    <th>Tổng tiền thanh toán</th>
                                    <th>Họ</th>
                                    <th>Tên</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Thông tin</th>
                                    <th>Ngày đặt hàng</th>
                                    <th colspan="2" class="text-center">Hành động</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>${{$order->subtotal}}</td>
                                    <td>${{$order->discount}}</td>
                                    <td>${{$order->tax}}</td>
                                    <td>${{$order->total}}</td>
                                    <td>{{$order->firstname}}</td>
                                    <td>{{$order->lastname}}</td>
                                    <td>{{$order->mobile}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->status}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td><a href="{{route('admin.orderdetails',['order_id' => $order->id])}}" class="btn btn-danger btn-sm">Chi tiết</a></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Trạng thái
                                            <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'Đã vận chuyển')">Đã vận chuyển</a></li>
                                                <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'Đã hủy')">Đã hủy </a></li>
                                            </ul>
                                           
                                        </div>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$orders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
