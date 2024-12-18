<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|max:45',
            'type' => 'required|max:45',
            'selling_price' => 'required|numeric',
            'purchase_price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ],
        [
            'name.required' => 'Nama wajib diisi',
            'name.max' => 'Nama maksimal 45 karakter',
            'type.required' => 'Jenis wajib diisi',
            'type.max' => 'Jenis maksimal 45 karakter',
            'image.max' => 'Foto maksimal 2 MB',
            'image.mimes' => 'File ekstensi hanya bisa jpg,png,jpeg,gif, svg',
            'image.image' => 'File harus berbentuk foto'
        ]);

        //jika file image ada yang terupload
        if(!empty($request->image)){
            //maka proses berikut yang dijalankan
            $fileName = 'image-'.uniqid().'.'.$request->image->extension();
            //setelah tau imagenya sudah masuk maka tempatkan ke public
            $request->image->move(public_path('image'), $fileName);
        } else {
            $fileName = 'nophoto.jpg';
        }

        //tambah data produk
        DB::table('products')->insert([
            'name'=>$request->name,
            'type'=>$request->type,
            'selling_price'=>$request->selling_price,
            'purchase_price'=>$request->purchase_price,
            'description' => $request->description,
            'image'=>$fileName,
        ]);

        return redirect()->route('index.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
