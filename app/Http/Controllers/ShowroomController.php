<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use Illuminate\View\View;

class ShowroomController extends Controller
{
    /**
     * display showroom list
     *
     */
    public function index(Request $request): View
    {
        $showrooms = Showroom::all();

        return view('backend.pages.showrooms.index', ['showrooms' => $showrooms]);
    }

    /**
     * display new showroom add form
     *
     */
    public function create(Request $request): View
    {
        return view('backend.pages.showrooms.create');
    }

    /**
     * store showroom
     *
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'thumbnail' => [
                'required', File::image()->min(12)->max(1024)->dimensions(Rule::dimensions()->maxWidth(1600)->maxHeight(900)->ratio(16 / 9)),
            ],
            'phone' => ['required', 'regex:/(01)[0-9]{9}/'],
            'street_1' => ['required', 'string', 'max:255'],
            'street_2' => ['nullable', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1200'],
            'brand_1_id' => ['required', 'string'],
            'brand_2_id' => ['required', 'string'],
            'brand_3_id' => ['required', 'string'],
            'brand_4_id' => ['required', 'string'],
            'social_platform_1' => ['nullable', 'string', 'max:256'],
            'social_platform_link_1' => ['nullable', 'string', 'max:256'],
            'social_platform_2' => ['nullable', 'string', 'max:256'],
            'social_platform_link_2' => ['nullable', 'string', 'max:256'],
            'social_platform_3' => ['nullable', 'string', 'max:256'],
            'social_platform_link_3' => ['nullable', 'string', 'max:256'],
            'social_platform_4' => ['nullable', 'string', 'max:256'],
            'social_platform_link_4' => ['nullable', 'string', 'max:256'],
            'social_platform_5' => ['nullable', 'string', 'max:256'],
            'social_platform_link_5' => ['nullable', 'string', 'max:256'],
            'services' => ['required', 'array', 'min_array_size:1'],
            'sat_start' => ['nullable', 'date', 'date_format:H:i A'],
            'sat_end' => ['nullable', 'date', 'after_or_equal:start_date', 'date_format:H:i A'],
            'sun_start' => ['nullable', 'date', 'date_format:H:i A'],
            'sun_end' => ['nullable', 'date', 'after_or_equal:start_date', 'date_format:H:i A'],
            'mon_start' => ['nullable', 'date', 'date_format:H:i A'],
            'mon_end' => ['nullable', 'date', 'after_or_equal:start_date', 'date_format:H:i A'],
            'tue_start' => ['nullable', 'date', 'date_format:H:i A'],
            'tue_end' => ['nullable', 'date', 'after_or_equal:start_date', 'date_format:H:i A'],
            'wed_start' => ['nullable', 'date', 'date_format:H:i A'],
            'wed_end' => ['nullable', 'date', 'after_or_equal:start_date', 'date_format:H:i A'],
            'thur_start' => ['nullable', 'date', 'date_format:H:i A'],
            'thur_end' => ['nullable', 'date', 'after_or_equal:start_date', 'date_format:H:i A'],
            'fri_start' => ['nullable', 'date', 'date_format:H:i A'],
            'fri_end' => ['nullable', 'date', 'after_or_equal:start_date', 'date_format:H:i A'],
        ]);

        Showroom::create($validated);

        return back()->with('status', 'created');
    }

    /**
     * display showroom details
     *
     */
    public function show(Request $request, $id): View
    {
        $showroom = Showroom::findOrFail($id);

        return view('backend.pages.showrooms.show', ['showroom' => $showroom]);
    }

    /**
     * display showroom edit form
     *
     */
    public function edit(Request $request, $id): View
    {
        $showroom = Showroom::findOrFail($id);

        return view('backend.pages.showrooms.edit', ['showroom' => $showroom]);
    }

    /**
     * update showroom details
     *
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'thumbnail' => [
                'required', File::image()->min(12)->max(1024)->dimensions(Rule::dimensions()->maxWidth(1600)->maxHeight(900)->ratio(16 / 9)),
            ],
            'phone' => ['required', 'regex:/(01)[0-9]{9}/'],
            'street_1' => ['required', 'string', 'max:255'],
            'street_2' => ['nullable', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1200'],
            'brand_1_id' => ['required', 'string'],
            'brand_2_id' => ['required', 'string'],
            'brand_3_id' => ['required', 'string'],
            'brand4' => ['required', 'string'],
            'social_platform_1' => ['nullable', 'string', 'max:256'],
            'social_platform_link_1' => ['nullable', 'string', 'max:256'],
            'social_platform_2' => ['nullable', 'string', 'max:256'],
            'social_platform_link_2' => ['nullable', 'string', 'max:256'],
            'social_platform_3' => ['nullable', 'string', 'max:256'],
            'social_platform_link_3' => ['nullable', 'string', 'max:256'],
            'social_platform_4' => ['nullable', 'string', 'max:256'],
            'social_platform_link_4' => ['nullable', 'string', 'max:256'],
            'social_platform_5' => ['nullable', 'string', 'max:256'],
            'social_platform_link_5' => ['nullable', 'string', 'max:256'],
            'services' => ['required', 'array', 'min_array_size:1'],
            'sat_start' => ['nullable', 'date', 'date_format:H:i A'],
            'sat_end' => ['nullable', 'date', 'after_or_equal:start_date', 'date_format:H:i A'],
            'sun_start' => ['nullable', 'date', 'date_format:H:i A'],
            'sun_end' => ['nullable', 'date', 'after_or_equal:start_date', 'date_format:H:i A'],
            'mon_start' => ['nullable', 'date', 'date_format:H:i A'],
            'mon_end' => ['nullable', 'date', 'after_or_equal:start_date', 'date_format:H:i A'],
            'tue_start' => ['nullable', 'date', 'date_format:H:i A'],
            'tue_end' => ['nullable', 'date', 'after_or_equal:start_date', 'date_format:H:i A'],
            'wed_start' => ['nullable', 'date', 'date_format:H:i A'],
            'wed_end' => ['nullable', 'date', 'after_or_equal:start_date', 'date_format:H:i A'],
            'thur_start' => ['nullable', 'date', 'date_format:H:i A'],
            'thur_end' => ['nullable', 'date', 'after_or_equal:start_date', 'date_format:H:i A'],
            'fri_start' => ['nullable', 'date', 'date_format:H:i A'],
            'fri_end' => ['nullable', 'date', 'after_or_equal:start_date', 'date_format:H:i A'],
        ]);

        $showroom = Showroom::findOrFail($id);
        $showroom->update($validated);

        return back()->with('status', 'updated');
    }

    /**
     * delete showroom
     *
     */
    public function destroy(Request $request, $id): RedirectResponse
    {
        $showroom = Showroom::findOrFail($id);

        $showroom->delete();

        return redirect()->route('dashboard.showroom.index')->with('status', 'deleted');
    }
}