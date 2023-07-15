<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use Illuminate\View\View;

class BrandController extends Controller
{
    /**
     * display brand list
     *
     */
    public function index(Request $request): View
    {
        $brands = Brand::all();

        return view('backend.pages.brands.index', ['brands' => $brands]);
    }

    /**
     * display new brand add form
     *
     */
    public function create(Request $request): View
    {
        return view('backend.pages.brands.create');
    }

    /**
     * store Brand
     *
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'logo' => [
                'required', File::image()->min(5)->max(512)->dimensions(Rule::dimensions()->maxWidth(512)->maxHeight(512)),
            ],
            'description' => ['nullable', 'string', 'max:512'],
        ]);

        if ($request->hasFile('logo')) {
            // prepare brand logo image
            $filepath = 'uploads/backend/brands/';
            $logo = $request->file('logo');
            $filename = date('YmdHi') . $logo->getClientOriginalName();
            $logo->move(public_path($filepath), $filename);
            $validated['logo'] = $filename;
        }

        Brand::create($validated);

        return back()->with('status', 'created');
    }

    /**
     * display brand details
     *
     */
    public function show(Request $request, $id): View
    {
        $brand = Brand::findOrFail($id);

        return view('backend.pages.brands.show', ['brand' => $brand]);
    }

    /**
     * display brand edit form
     *
     */
    public function edit(Request $request, $id): View
    {
        $brand = Brand::findOrFail($id);

        return view('backend.pages.brands.edit', ['brand' => $brand]);
    }

    /**
     * update brand details
     *
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'logo' => [
                'nullable', File::image()->min(12)->max(512)->dimensions(Rule::dimensions()->maxWidth(512)->maxHeight(512)),
            ],
            'description' => ['nullable', 'string', 'max:512'],
        ]);

        $brand = Brand::findOrFail($id);
        $filepath = 'uploads/backend/brands/';

        if ($request->hasFile('logo')) {
            // remove old profile image (if exists)
            if ($brand->logo != '' && $brand->logo != null) {
                unlink($filepath . $brand->logo);
            }

            // prepare brand logo image
            $logo = $request->file('logo');
            $filename = date('YmdHi') . $logo->getClientOriginalName();
            $logo->move(public_path($filepath), $filename);
            $validated['logo'] = $filename;
        }



        $brand->update($validated);

        return back()->with('status', 'updated');
    }

    /**
     * delete brand
     *
     */
    public function destroy(Request $request, $id): RedirectResponse
    {
        $brand = Brand::findOrFail($id);
        $filepath = 'uploads/backend/brands/';


        $brand->delete();

        // remove old profile image (if exists)
        if ($brand->logo != '' && $brand->logo != null) {
            unlink($filepath . $brand->logo);
        }

        return redirect()->route('dashboard.brand.index')->with('status', 'deleted');
    }
}
