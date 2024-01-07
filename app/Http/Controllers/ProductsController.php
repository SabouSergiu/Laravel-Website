<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Validator;


class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('products.index',compact('products'));
    }
    /**
    * Afisare form pt creare product
    *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('products.create');
    }

     /**
     * Memorare un user creat acum
     *
     * @param User $user
     * @param StoreUserRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Product $product, StoreProductRequest $request)
    {
        $product->create(array_merge($request->validated(), [
            'password' => 'test'
            ]));
    return redirect()->route('products.index')
    ->withSuccess(__('Product created successfully.'));
    }
    /**
     * Afisare date product
     *
     * @param Product $product
     *
     * @return \Illuminate\Http\Response
     */

    public function show(Product $product)
    {
        return view('products.show', [
            'product' => $product
            ]);
    }
    /**
     * Creare date product
     *
     * @param Product $product
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product
            ]);           
    }
     /**
     * Update date product
     *
     * @param Product $product
     * @param UpdateProductRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product,UpdateProductRequest $request)
    {
        $product->update($request->validated());
        return redirect()->route('products.index')->withSuccess(__('Product updated successfully.'));
    }
    /**
     * Stergere date product
     *
     * @param Product $product
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->withSuccess(__('Product deleted successfully.'));
    }
    
}
