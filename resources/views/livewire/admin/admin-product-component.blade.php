<div>
 
<style>
    nav svg {
        height: 20px;
    }
    nav .hidden{
        display: block !important;
    }
</style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <div class="row">
                        <div class="col-md-6">
                            Tất cả sản phẩm 
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.addproduct')}}" class="btn btn-success pull-right">Thêm sản phẩm</a>
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
                                <tr>
                                    <th>Id</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên</th>
                                    <th>Stock</th>
                                    <th>Danh mục</th>
                                    <th>Giá</th>
                                    <th>Giá giảm</th>
                                    <th>Danh mục</th>
                                    <th>Ngày</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->id}} </td>
                                    <td><img src="{{ asset('assets/images/products')}}/{{$product->image}}" width="60" alt=""></td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->stock_status}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->regular_price}}</td>
                                    <td>{{$product->sale_price}}</td>
                                    <td>{{$product->category->name}}</td>
                                    
                                    <td>{{$product->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.editproduct',['product_slug'=>$product->slug])}}">
                                            <i class="fa fa-edit fa-2x text-info"></i>
                                        <a href="">
                                            <i class="fa fa-times fa-2x text-danger"  onclick="confirm('Bạn chắc chắn muốn xóa sản phẩm này chứ ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteProduct({{$product->id}})" style="margin-left: 12px;"></i>
                                        </a>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{$products->links()}}

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>