@extends('backend.layouts.app')

@section('title', __('Update Existing Brand'))

@section('content')
    <div id="top" class="sa-app__body px-2 px-lg-4">
        <div class="container pb-6">
            <div class="py-5">
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <nav class="mb-2" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-sa-simple">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add user</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">{{ __('Update brand') }}</h1>
                    </div>
                    <div class="col-auto d-flex">
                        <a href="{{ route('dashboard.brand.index') }}" class="btn btn-primary">{{ __('Brand list') }}</a>
                    </div>
                </div>
            </div>
            {{-- Profile Toasts --}}
            @include('partials.status-messages')
            {{-- Profile Toasts --}}
            <div class="row g-5">
                <div class="col-md-8 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('dashboard.brand.update', ['id' => $brand->id]) }}"
                                class="needs-validation" novalidate="" enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class="mb-5">
                                    {{-- Brand Name --}}
                                    <label for="name" class="form-label">{{ __('Brand name') }}</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control @error('name') is-invalid @enderror" autofocus required
                                        value="{{ old('name', $brand->name) }}" />
                                    @error('name')
                                        <div class="invalid-feedback">{{ __($message) }}</div>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    {{-- Logo --}}
                                    <label for="logo" class="form-label">{{ __('Logo') }}</label>
                                    <input type="file" name="logo" id="logo"
                                        class="form-control @error('logo') is-invalid @enderror"
                                        value="{{ old('logo', $brand->logo) }}" />
                                    @error('logo')
                                        <div class="invalid-feedback">{{ __($message) }}</div>
                                    @enderror

                                    <div class="mt-5">
                                        <img src="{{ asset('uploads/backend/brands') . '/' . $brand->logo }}"
                                            id="logoToShow" width="100" height="100" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="mb-5">
                                    {{-- Description --}}
                                    <label for="description" class="form-label">{{ __('Description') }}</label>
                                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                        rows="5">{{ old('description', $brand->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ __($message) }}</div>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <div class="text-end">
                                        <a href="{{ url()->previous() }}" role="button"
                                            class="btn btn-secondary me-3">{{ __('Cancel') }}</a>
                                        <button type="submit" class="btn btn-primary">{{ __('Add Brand') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- File Upload Script Start --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const logoInput = document.getElementById('logo');
            const logoImg = document.getElementById('logoToShow');

            logoInput.addEventListener('change', (inputEvent) => {
                const fileReader = new FileReader();

                fileReader.addEventListener('load', (fileReaderEvent) => {
                    logoImg.setAttribute('src', fileReaderEvent.target.result);
                })

                fileReader.readAsDataURL(inputEvent.target.files['0']);
            })
        })
    </script>
    {{-- File Upload Script Start --}}
@endsection
