
<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">TRANG CHỦ</a></li>
                <li class="item-link"><span>THANH TOÁN</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <form wire:submit.prevent="placeOrder">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-address-billing">
                            <h3 class="box-title">Địa chỉ thanh toán</h3>
                            <div class="billing-address">

                                <p class="row-in-form">
                                    <label for="fname">Họ<span>*</span></label>
                                    <input type="text" name="fname" value="" placeholder="Nhập họ của bạn" wire:model="firstname"/>
                                    @error('firstname') <span class="text-danger">{{$message}}</span>@enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="lname">Tên<span>*</span></label>
                                    <input type="text" name="lname" value="" placeholder="Nhập tên của bạn" wire:model="lastname"/>
                                    @error('lastname') <span class="text-danger">{{$message}}</span>@enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="email">Email :</label>
                                    <input type="email" name="email" value="" placeholder="Nhập email" wire:model="email"/>
                                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="phone">Số điện thoại :</label>
                                    <input type="text" name="phone" value="" placeholder="Nhập số điện thoại" wire:model="mobile"/>
                                    @error('mobile') <span class="text-danger">{{$message}}</span>@enderror
                                </p>
                               
                             
                                <p class="row-in-form">
                                    <label for="country">Quốc gia<span>*</span></label>
                                    <input type="text" name="country" value="" placeholder="Việt Nam" wire:model="country"/>
                                    @error('country') <span class="text-danger">{{$message}}</span>@enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="province">Tỉnh:</label>
                                    <input type="text" name="province" value="" placeholder="Tỉnh" wire:model="province"/>
                                    @error('province') <span class="text-danger">{{$message}}</span>@enderror
                                </p>
                               
                                <p class="row-in-form">
                                    <label for="city">Địa chỉ chi tiết <span>*</span></label>
                                    <input type="text" name="city" value="" placeholder="Ghi chi tiết địa chỉ của bạn ?" wire:model="city"/>
                                    @error('city') <span class="text-danger">{{$message}}</span>@enderror
                                </p>
                             
                               

                            </div>

                        </div>
                    </div>
                   



                </div>

                <div class="summary summary-checkout">
                    <div class="summary-item payment-method">
                        <h4 class="title-box">Phương thức thanh toán</h4>
                        
                        <div class="choose-payment-methods">
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model="paymentmode">
                                <span>Thanh toán khi giao hàng</span>
                                <span class="payment-desc">Đặt hàng thanh toán ngay khi nhận hàng</span>
                            </label>
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-visa" value="card" type="radio"  wire:model="paymentmode">
                                <span>Thanh toán bằng thẻ ghi nợ / thẻ tín dụng</span>
                                
                            </label>
                      
                            @error('paymentmode') <span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        @if(Session::has('checkout'))
                        <p class="summary-info grand-total"><span>Tổng tiền :</span> <span class="grand-total-price">${{Session::get('checkout')['total' ]}}</span></p>
                        @endif
                        <button type="submit" class="btn btn-primary">Đặt hàng</button>
                    </div>
                  
                </div>
            </form>
        </div>
    </div>





</main>
