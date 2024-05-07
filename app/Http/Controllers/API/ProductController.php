<?php

namespace App\Http\Controllers\API;

use App\Builders\ProductBuilder;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $productData = $request->validated();

        $type = Type::findOrFail($productData['type_id']);

        $product = (new ProductBuilder())
            ->setType($type)
            ->setName($productData['name'])
            ->setDescription($productData['description'])
            ->setPrice($productData['price'])
            ->build();

        if ($type->name === 'car') {
            $product->brand = $productData['brand'];
            $product->model = $productData['model'];
            $product->year = $productData['year'];
        } elseif ($type->name === 'apartment') {
            $product->location = $productData['location'];
            $product->rooms = $productData['rooms'];
            $product->bathrooms = $productData['bathrooms'];
        } elseif ($type->name === 'yacht') {
            $product->yacht_type = $productData['yacht_type'];
            $product->length = $productData['length'];
            $product->capacity = $productData['capacity'];
        }

        $product->save();

        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
