<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch categories with the latest first
        $categories = Category::latest()->get();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request input
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:draft,published,archived',
        ]);

        // Create a new category
        Category::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        // Redirect back with success message
        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // Show the category details
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // Return the edit form with the category data
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // Validate the request input
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:draft,published,archived',
        ]);

        // Update the category with the validated data
        $category->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        // Redirect back with success message
        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // Delete the category
        $category->delete();

        // Redirect back with success message
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }
}
