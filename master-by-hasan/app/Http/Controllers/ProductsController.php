<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// use App\Models\User;
// use App\Models\Carts;


class ProductsController extends Controller
{





    public function cart(Request $request, $id)
    {
        if (Auth::check()) {
            $user = auth()->user();
            $product = Products::find($id);

            if (!$product) {
                return redirect()->back()->with('error', 'Product not found.');
            }

            $cart = session()->get('cart', []);

            if (isset($cart[$id])) {

                $cart[$id]['quantity'] += 1;
            } else {

                $cart[$id] = [
                    'id' => $product->id,
                    // Add the 'id' here
                    'name' => $product->name,
                    'description' => $product->description,
                    'price' => $product->price,
                    'image' => $product->image,
                    'quantity' => 1,
                    // 'total' => $product->price * $product->quantity,
                ];
            }

            session()->put('cart', $cart);

            return redirect()->back()->with('message', 'Product added to cart successfully');

        } else {
            return redirect('login');
        }
    }

    public function remove(Request $request)
    {
        $productId = $request->input('product_id');

        if ($productId) {
            $cart = session('cart', []);

            // Check if the product is in the cart
            if (isset($cart[$productId])) {
                // Remove the product from the cart
                unset($cart[$productId]);

                // Update the cart in the session
                session(['cart' => $cart]);

                return redirect()->route('cart.index')->with('success', 'Product removed from cart');
            }
        }

        return redirect()->route('cart.index')->with('error', 'Product not found in cart');
    }


    public function cat(Request $request)
    {
        // Retrieve the selected price range
        $priceRange = $request->input('price_range');

        // Initialize min and max price variables
        $minPrice = null;
        $maxPrice = null;

        // Parse the selected price range, if any
        if ($priceRange) {
            list($minPrice, $maxPrice) = explode('-', $priceRange);
        }

        // Fetch products based on the selected price range or get all products if no range is selected
        $products = ($minPrice !== null && $maxPrice !== null)
            ? Products::whereBetween('price', [$minPrice, $maxPrice])->get()
            : Products::all();

        return view('categories', compact('products'));
    }


    public function searchByName(Request $request)
    {
        // Retrieve the user's search input
        $searchQuery = $request->input('product_name');

        // Filter products based on the name attribute
        $products = Products::where('name', 'like', '%' . $searchQuery . '%')->get();

        return view('categories', compact('products'));
    }


    // public function searchCategories(Request $request)
    // {
    //     $categorys = DB::table('categories')->get();



    //     return view('categories', compact('categorys'));
    // }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view('home', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Products::all();

        return view('admin_dasebord\admin_products_create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Products();
        $product->name = $request->input('name');
        $product->image = $request->input('image');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');



        $product->save();


        $productid = $product->id;

        return redirect()->route('admin_products', ['product' => $productid])->with('success', 'Products created successfully');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */

    public function show(Products $product)
    {
        return view('product', compact('product'));
    }

    public function shows()
    {
        $products = Products::all();
        return view('admin_dasebord\admin_products', compact('products'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $product)
    {
        return view('admin_dasebord/admin_products_edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $product)
    {
        $product->update([
            'name' => $request->input('name'),
            'image' => $request->input('image'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('admin_products', ['product' => $product->id])->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);
        $product->delete();
        return redirect()->route('admin_products', ['product' => $id])->with('success', 'Products deleted successfully');
    }
}
