<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\CategoryStatus;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categories.index',[
            'title' => 'Kategori',
            'categories' => Category::all()->load('categoryStatus')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create', [
            'title' => 'Buat Baru Kategori',
            'statuses' => CategoryStatus::orderBy('name')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $validatedData = $request->validate([
            'category_status_id'  => [],
            'name'              => ['required', 'max:255', 'min:5'],
            'description'       => ['max:100']
        ]);

        Category::create($validatedData);

        return redirect('/categories')->with('messageSuccess', 'Kategori berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('categories.show', [
            'title' => 'Detail Kategori',
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit', [
            'title' => 'Edit Kategori',
            'category' => $category,
            'statuses' => CategoryStatus::orderBy('name')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $validatedData = $request->validate([
            'category_status_id'  => [],
            'name'              => ['required', 'max:255', 'min:5'],
            'description'       => ['max:100']
        ]);

        Category::where('id', $category->id)->update($validatedData);

        return redirect('/categories')->with('messageSuccess', 'Kategori berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category)
    {
        $data = $request->validate([
            'category_status_id' => []
        ]);

        Category::where('id', $category->id)->update($data);

        return redirect('/categories')->with('messageSuccess', 'Kategori Status berhasil di ubah');
    }
}
