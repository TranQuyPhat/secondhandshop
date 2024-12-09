<div>
  <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Thêm sản phẩm
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">Tất cả sản phẩm</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Tên sản phẩm </label>
                               <div class="col-md-4">
                                <input type="text" placeholder="Tên sản phẩm " class="form-control input-md" wire:model="name" wire:keyup="genarateSlug"/>
                                @error('name') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Slug sản phẩm </label>
                               <div class="col-md-4">
                                <input type="text" placeholder="Slug " class="form-control input-md"  wire:model="slug"/>
                                @error('slug') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Mô tả ngắn về sản phẩm </label>
                               <div class="col-md-4">
                                <textarea class="form-control" placeholder="Sản phẩm trông như thế nào ?" wire:model="short_description"></textarea>
                                @error('short_description') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Mô tả  về sản phẩm </label>
                               <div class="col-md-4">
                                <textarea class="form-control" placeholder="Mô tả rõ hơn sản phẩm " wire:model="description"></textarea>
                                @error('description') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Giá sản phẩm </label>
                               <div class="col-md-4">
                                <input type="text" placeholder="Giá hiện tại " class="form-control input-md" wire:model="regular_price" />
                                @error('regular_price') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Giá sale</label>
                               <div class="col-md-4">
                                <input type="text" placeholder="Giá sale " class="form-control input-md" wire:model="sale_price" />
                                @error('sale_price') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                            </div>

                            
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">SKU</label>
                               <div class="col-md-4">
                                <input type="text" placeholder="SKU " class="form-control input-md" wire:model="SKU" />
                                @error('SKU') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Kho</label>
                               <div class="col-md-4">
                                    <select  class="form-control" wire:model="stock_status">
                                        <option value="instock">Còn hàng</option>
                                        <option value="outofstock">Hết hàng</option>
                                    </select>
                                    @error('stock_status') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Tính năng</label>
                               <div class="col-md-4">
                                    <select  class="form-control" wire:model="featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                               </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Số lượng</label>
                               <div class="col-md-4">
                                <input type="text" placeholder="Số lượng " class="form-control input-md" wire:model="quantity" />
                                @error('quantity') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Hình ảnh </label>
                               <div class="col-md-4">
                                <input type="file"  class="input-file"  wire:model="image" />
                                @if($image)
                                    <img src="{{$image->temporaryUrl()}}" alt="" width="120" />
                                @endif
                                @error('image') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Thuộc danh mục </label>
                               <div class="col-md-4">
                                    <select  class="form-control" wire:model="category_id">
                                        <option value="0">Chọn danh mục của sản phẩm</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>                   

                                        @endforeach
                                       
                                    </select>
                                    @error('category_id') <p class="text-danger">{{$message}}</p> @enderror
                               </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"> </label>
                               <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Submit </button>
                               </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>
