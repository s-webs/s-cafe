<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        return ProductCategory::all();
    }

    public function store(Request $request)
    {
        $productCategory = ProductCategory::query()->create($request->all());
        return response()->json($productCategory, 201);
    }

    public function show($id)
    {
        return ProductCategory::query()->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $productCategory = ProductCategory::query()->findOrFail($id);
        $productCategory->update($request->all());
        return response()->json($productCategory, 200);
    }

    public function delete($id)
    {
        ProductCategory::query()->findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
