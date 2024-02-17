<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\buy\Cart;
use App\Models\buy\Item;
use App\Models\Categories\ProductsCategory;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyController extends Controller
{
    public function index()
    {
        $data = [];
        $cart = Cart::where('id', auth()->id())->first();
        if ($cart == null) return view('buy.cart', ['msg' => 'سبد خرید شما خالی است.', 'items' => null]);

        $items = Item::where('cart_id', $cart->cart_id)->get();

        $data = $items->transform(function ($item) {
            return [
                'image' => $item->product->image,
                'name' => $item->product->name,
                'price' => $item->product->price,
                'count' => $item->count,
                'item_id' => $item->item_id,
            ];
        });
        return view('buy.cart', ['items' => $data]);
    }

    public function addItem(Product $product)
    {
        $product = request('product_id');
         $cart = Cart::where('id', auth()->id())->first();
        if ($cart == null) {
            Cart::create(['id' => auth()->id()]);

            $cart = Cart::where('id', auth()->id())->first();
            Item::create([
                'product_id' => $product,
                'cart_id' => $cart->cart_id,
                'count' => 1
            ]);

        } else {
             $item = Item::where('product_id', $product)->first();
            if ($item == null) {
                Item::create([
                    'product_id' => $product,
                    'cart_id' => $cart->cart_id,
                    'count' => 1
                ]);
            } else {
                $item->update(['count' => ($item->count + 1)]);
            }
        }

        return redirect('/buy');
    }


    public function removeItem(Item $item)
    {
        $getItem = Item::where('item_id', $item)->first();
        if ($getItem->count == 1) {
            $getItem = Item::first();
            if ($getItem == null) {
                $cart = Cart::where('id', auth()->id())->first();
                $cart->delete();
                return redirect('/');
            } else{
                return back();
            }

        } else {
            $getItem->update(['count' => ($getItem->count - 1)]);
        }


        return back();
    }
}
