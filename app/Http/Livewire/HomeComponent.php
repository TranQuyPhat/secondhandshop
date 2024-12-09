<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Sale;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $lproducts = Product::orderBy('created_at','DESC')->get()->take(8);
        $sproducts = Product::where('sale_price','>',0)->inRandomOrder()->get()->take(8);
        // $sale = Sale::find(1);
        if(Auth::check())
        {
            Cart::instance('cart')->restore(Auth::user()->email);
            Cart::instance('wishlist')->restore(Auth::user()->email);
        }
        return view('livewire.home-component',['lproducts'=>$lproducts,'sproducts'=>$sproducts])->layout('layouts.base');
    }
}
