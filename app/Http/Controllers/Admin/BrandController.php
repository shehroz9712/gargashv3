<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::latest()->get();

        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::latest()->get();

        return view('admin.brands.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request)
    {

        $image = uploadImage($request->file('image'), "brands");

        $brand = Brand::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'user_id' => auth()->id(), // ✅ set authenticated user ID
            'image' => $image,
            'heading' => $request->heading,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        $sectionFiles = $request->file('sections', []);
        foreach ($request->sections as $index => $sectionData) {
            if (isset($sectionFiles[$index]['image'])) {
                $sectionData['image'] = uploadImage($sectionFiles[$index]['image'], 'brands');
            }
            $brand->sections()->create($sectionData);
        }

        return redirect()->route('admin.brands.index')->with('success', 'Brand created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $brand = Brand::findOrFail($id);

        return view('admin.brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        $categories = Category::latest()->get();
        return view('admin.brands.edit', compact('brand', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(BrandRequest $request, Brand $brand)
    {
        $brand->update($request->only([
            'name',
            'slug',
            'category_id',
            'user_id',
            'image',
            'heading',
            'description',
            'status'
        ]));

        // Delete old sections (optional, if you want full replace)
        $brand->sections()->delete();

        if ($request->has('sections')) {
            foreach ($request->sections as $sectionData) {
                $brand->sections()->create($sectionData);
            }
        }

        return redirect()->route('admin.brands.index')->with('success', 'Brand updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->sections()->delete();
        $brand->delete();

        return redirect()->route('admin.brand.index')->with('success', 'Brand deleted successfully!');
    }
}
