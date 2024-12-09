<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Sản phẩm đã đặt
                            </div>
                            <div class="col-md-6">
                            <a href="{{route('admin.orders')}}" class="btn btn-success pull-right">Tất cả đơn hàng</a>
                        </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>
                                    Mã đơn hàng
                                </th>
                                <td>
                                    {{$order->id}}
                                </td>
                                <th>
                                    Ngày đặt hàng
                                </th>
                                <td>
                                    {{$order->created_at}}
                                </td>
                                <th>
                                    Tình trạng
                                </th>
                                <td>
                                    {{$order->status}}
                                </td>
                                @if($order->status == "đã vận chuyển")
                                <th>Ngày vận chuyển</th>
                                <td>{{$order->delivered_date}}</td>

                                @elseif($order->status == "đã hủy")
                                <th>
                                    Ngày hủy
                                </th>
                                <td>{{$order->canceled_date}}</td>
                                @endif
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <div class="row">
                        <div class="col-md-6">
                        Đơn hàng đã đặt
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.orders')}}" class="btn btn-success pull-right">Tất cả đơn hàng</a>
                        </div>
                       </div>
                    </div>
                    <div class="panel-body">
                        <div class="wrap-iten-in-cart">

                            <h3 class="box-title">Tên sản phẩm </h3>
                            <ul class="products-cart">
                                @foreach($order->orderItems as $item)
                                <li class="pr-cart-item">
                                    <div class="product-image">
                                        <figure><img src="{{ asset('assets/images/products') }}/{{$item->product->image}}" alt=""></figure>
                                    </div>
                                    <div class="product-name">
                                        <a class="link-to-product" href="#">{{$item->product->name}}</a>
                                    </div>
                                    <div class="price-field produtc-price">
                                        <p class="price">${{$item->price}}</p>
                                    </div>
                                    <div class="quantity">
                                        <h5>{{$item->quantity}}</h5>
                                    </div>
                                    <div class="price-field sub-total">
                                        <p class="price">${{$item->price * $item->quantity}}</p>
                                    </div>

                                </li>
                                @endforeach

                            </ul>

                        </div>
                        <div class="summary">
                            <div class="order-summary">
                                <h4 class="title-box">
                                    <p class="summary-info"><span class="title">Tổng tiền </span><b class="index">${{$order->subtotal}}</b></p>
                                    <p class="summary-info"><span class="title">Thuế</span><b class="index">${{$order->tax }}</b></p>
                                    <p class="summary-info"><span class="title">Vận chuyển</span><b class="index">Miễn phí</b></p>
                                    <p class="summary-info"><span class="title">Tiền thanh toán </span><b class="index">${{$order->total}}</b></p>


                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Chi tiết thanh toán
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Họ</th>
                                <td>{{$order->firstname}}</td>
                                <th>Tên</th>
                                <td>{{$order->lastname}}</td>

                            </tr>
                            <tr>
                                <th>Số điện thoại</th>
                                <td>{{$order->mobile}}</td>
                                <th>Emai</th>
                                <td>{{$order->email}}</td>
                            </tr>

                            <tr>
                                <th>Quốc gia</th>
                                <td>{{$order->country}}</td>
                                <th>Tỉnh</th>
                                <td>{{$order->province}}</td>
                                <th>Địa chỉ cụ thể</th>
                                <td>{{$order->city}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Chi tiết giao hàng
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Giao dịch
                    </div>
                    <div class="panel-body">
                    <table class="table">
                            <tr>
                                <th>Chế độ giao dịch</th>
                                <td>{{$order->transaction->mode}}</td>
                               

                            </tr>
                            <tr>
                            <th>Trạng thái  </th>
                                <td>{{$order->transaction->status}}</td>
                               
                            </tr>

                            <tr>
                            <th>
                               Ngày giao dịch</th>
                                <td>{{$order->transaction->created_at}}</td>
                               
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>