<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">SecondhandShop</a></li>
                <li class="item-link"><span>Giỏ hàng của bạn</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
                @if(Cart::instance('cart')->count() > 0)
            <div class="wrap-iten-in-cart">
                @if(Session::has('success_message'))
                <div class="alert alert-success">
                    <strong>{{Session::get('success_message')}}</strong>
                </div>
                @endif
                @if(Cart::instance('cart')->count() > 0)
                <h3 class="box-title">Tên sản phẩm </h3>
                <ul class="products-cart">
                    @foreach(Cart::instance('cart')->content() as $item)
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="{{ ('assets/images/products') }}/{{$item->model->image}}" alt=""></figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product" href="#">{{$item->model->name}}</a>
                        </div>
                        <div class="price-field produtc-price">
                            <p class="price">${{$item->model->regular_price}}</p>
                        </div>
                        <div class="quantity">
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*">
                                <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"></a>
                                <a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"></a>
                            </div>
                        </div>
                        <div class="price-field sub-total">
                            <p class="price">${{$item->subtotal()}}</p>
                        </div>
                        <div class="delete">
                            <a href="#" wire:click.prevent="destroy('{{$item->rowId}}')" class="btn btn-delete" title="">
                                <span>Delete from your cart</span>
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    @endforeach

                </ul>
                @else
                <p>Không có sản phẩm nào trong cửa hàng </p>
                @endif
            </div>

            <div class="summary">
                <div class="order-summary">
                    <h4 class="title-box">Order Summary</h4>
                    <p class="summary-info"><span class="title">Tổng tiền sản phẩm</span><b class="index">${{Cart::instance('cart')->subtotal()}}</b></p>
                    @if(Session::has('coupon'))
                         <p class="summary-info"><span class="title">Áp dụng mã ({{Session::get('coupon')['code']}}) , trừ <a href="#" wire:click.prevent="removeCoupon"><i class="fa fa-times text-danger"></i></a> </span><b class="index"> - ${{number_format($discount,2)}}</b></p>
                         <hr>
                         <p class="summary-info"><span class="title">Tổng tiền ( đã giảm ) </span><b class="index">${{number_format($subtotalAfterDiscount,2)}}</b></p>
                       
                         <hr>
                         <p class="summary-info"><span class="title">Thuế ({{config('cart.tax')}}% ) </span><b class="index">${{number_format($taxAfterDiscount,2)}}</b></p>
                         <hr>
                         <p class="summary-info"><span class="title">Tổng tiền cần thanh toán </span><b class="index">${{number_format($totalAfterDiscount,2)}}</b></p>

                    @else
                    <p class="summary-info"><span class="title">Tiền vận chuyển</span><b class="index">${{Cart::instance('cart')->tax()}}</b></p>
                    <p class="summary-info total-info "><span class="title">Tổng tiền thanh toán</span><b class="index">${{Cart::instance('cart')->total()}}</b></p>
                    @endif
                    
                </div>

             
                <div class="checkout-info">
                @if(!Session::has('coupon')) 
                    <label class="checkbox-field">
                        <input class="form-input " name="have-code" id="have-code" value="1" type="checkbox" wire:model="haveCouponCode"><span>Tôi có phiếu giảm giá </span>
                    </label>
                    @if($haveCouponCode == 1 )
                    <div class="summary-item">
                        <form action="" wire:submit.prevent="applyCouponCode">
                            <h4 class="title-box">Mã giảm giá</h4>
                            @if(Session::has('coupon_message'))
                            <div class="alert alert-danger" role="danger">
                                {{Session::get('coupon_message')}}
                            </div>
                            @endif
                            <p class="row-in-form">
                                <label for="coupon-code">Nhập vào mã giảm giá của bạn </label>
                                <input type="text" name="coupon-code" wire:model="couponCode" />
                            </p>
                            <button type="submit" class="btn btn-small ">Áp dụng</button>
                        </form>
                    </div>

                    @endif
                    @endif
                    <a class="btn btn-checkout" href="#" wire:click.prevent="checkout">Thanh toán</a>
                    <a class="link-to-shop" href="shop.html">Tiếp tục mua hàng<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </div>
                <div class="update-clear">
                    <a class="btn btn-clear" href="#" wire:click.prevent="destroyAll()">Xóa hết giỏ hàng</a>
                    <a class="btn btn-update" href="#">Cập nhật giỏ hàng</a>
                </div>
            </div>
            @else 
            <div class="text-center" style="padding:30px 0">
                <h1>Giỏ hàng của bạn đang trống</h1>
                <p>Hãy thêm vào giỏ hàng nào</p>
                <a href="/shop" class="btn btn-primary">Cửa hàng</a>
            </div>
            @endif


        </div>
    </div>

</main>