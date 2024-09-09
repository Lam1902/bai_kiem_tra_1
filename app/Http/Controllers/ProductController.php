<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        // Lấy tất cả sản phẩm từ cơ sở dữ liệu
        $products = Product::all();
        // Trả về view hiển thị danh sách sản phẩm
        return view('products.index', compact('products'));
    }

    public function create()


    {
        $categories = Category::all(); // Lấy tất cả danh mục
        return view('products.create', compact('categories'));
        // Trả về view để thêm sản phẩm mới
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validate và lưu sản phẩm mới
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image_url' => 'nullable|string',
            'category_id' => 'nullable|numeric',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        // Trả về view để chỉnh sửa sản phẩm
        $categories = Category::all(); // Lấy tất cả danh mục
        return view('products.edit', compact('product', 'categories'));
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // Validate và cập nhật sản phẩm
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image_url' => 'nullable|string',
            'category_id' => 'nullable|numeric',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        // Xóa sản phẩm
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
}
