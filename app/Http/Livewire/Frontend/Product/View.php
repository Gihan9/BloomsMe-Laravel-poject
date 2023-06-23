<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;
use App\Models\Wishlist;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class View extends Component
{

    public $category, $product, $productColorSelectedQuantity, $quantityCount=1, $productColorId;

    public function colorSelected($productColorId)
    {
        //dd($productColorId);
        $this->productColorId = $productColorId;
       $productColor = $this->product->productColors()->where('id',$productColorId)->first();
       $this->productColorSelectedQuantity = $productColor->quantity;

       if($this->productColorSelectedQuantity == 0){
          $this->productColorSelectedQuantity = 'outofstock';
       }

    }
    public function incrementQuantity()
    {
        if($this->quantityCount < 10 ){
            $this->quantityCount++;
        }
        
    }
    public function decrementQuantity()
    {
        if($this->quantityCount > 1 ){
        $this->quantityCount--;
        }
    }

    public function addToCart(int $productId)
    {
        if(Auth::check()){

            if($this->product->where('id',$productId)->where('status', '0')->exists()){

                //check for product color quantity
                if($this->product->productColors()->count() > 1)
                {

                    if($this->productColorSelectedQuantity != NULL){

                        if(Cart::where('user_id', auth()->user()->id)->where('product_id', $productId)->where('product_color_id', $this->productColorId)->exists()){
                            
                            $this->dispatchBrowserEvent('message', [
                            'text' => 'Product Alredy Added',
                            'type' => 'warning',
                            'status' =>404
                        ]);

                        }else{
                            $productColor = $this->product->productColors()->where('id',$this->productColorId)->first();
                        if($productColor->quantity > 0){

                            if($productColor->quantity > $this->quantityCount)
                            {

                                Cart::create([
                                    'user_id' => auth()->user()->id,
                                    'product_id' => $productId,
                                    'product_color_id' => $this->productColorId,
                                    'quantity' =>  $this->quantityCount

                                ]);

                                $this->emit('CartAddedUpdated');
                                $this->dispatchBrowserEvent('message', [
                                    'text' => 'Product Added successfully',
                                    'type' => 'success',
                                    'status' =>200
                                ]);
                            }else{

                                $this->dispatchBrowserEvent('message', [
                                    'text' => 'Only '.$productColor->quantity.' Quantity Available' ,
                                    'type' => 'warning',
                                    'status' =>404
                                ]);
                            }

                        }else{
                            $this->dispatchBrowserEvent('message', [
                                'text' => 'Out Of Stock',
                                'type' => 'warning',
                                'status' =>404
                            ]);
                        }
                        }
                        

                    }else{
                        $this->dispatchBrowserEvent('message', [
                            'text' => 'Select your Product Color',
                            'type' => 'info',
                            'status' =>404
                        ]);

                    }

                }else
                {
                    if(Cart::where('user_id', auth()->user()->id)->where('product_id', $productId)->exists()){

                        $this->dispatchBrowserEvent('message', [
                            'text' => 'Product Alredy Added',
                            'type' => 'warning',
                            'status' =>404
                        ]);
                    }else{

                         if($this->product->quantity > 0)
                         {

                            if($this->product->quantity > $this->quantityCount)
                            {
                                Cart::create([
                                    'user_id' => auth()->user()->id,
                                    'product_id' => $productId,
                                    
                                    'quantity' =>             $this->quantityCount

                                ]);
                                $this->emit('CartAddedUpdated');
                                $this->dispatchBrowserEvent('message', [
                                    'text' => 'Product Added successfully',
                                    'type' => 'success',
                                    'status' =>200
                                ]);

                            }else{

                                $this->dispatchBrowserEvent('message', [
                                    'text' => 'Only '.$this->product->quantity.' Quantity Available' ,
                                    'type' => 'warning',
                                    'status' =>404
                                ]);
                            }

                        }else{

                        $this->dispatchBrowserEvent('message', [
                            'text' => 'Out Of Stock',
                            'type' => 'warning',
                            'status' =>404
                        ]);
                    }
                    }
                   
                }
               


            }else{
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Product Does not exists',
                    'type' => 'warning',
                    'status' =>404
                ]);
            }

        }else{

            $this->dispatchBrowserEvent('message', [
                'text' => 'Please Login to add to cart',
                'type' => 'info',
                'status' =>401
            ]);

        }
    }
    public function mount($category, $product)
    {
        $this->category = $category;
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.frontend.product.view', [
            'category' => $this->category,
            'product' => $this->product,

        ]);
    }
    public function addToWishlist($productId)
    {
        if(Auth::check())
        {
            if(Wishlist::where('user_id',auth()->user()->id)->where('product_id', $productId)->exists())
            {
               
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Already added to wishlist',
                    'type' => 'warning',
                    'status' => 409
                ]);
            return false;

            }else{

            
                Wishlist::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $productId
                ]);
                $this->emit('wishlistAddedUpdated');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Wishlist Added successfully',
                    'type' => 'success',
                    'status' => 200
                ]);
            }

        }else{
            
            $this->dispatchBrowserEvent('message', [
                'text' => 'Please Login to continue',
                'type' => 'info',
                'status' =>401
            ]);
            return false;
        }
    }
}
