@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/codemirror/lib/codemirror.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/codemirror/theme/duotone-dark.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Editor</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('dashboard/activity/table') }}">Table</a></div>
                    <div class="breadcrumb-item">Form</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Update Data</h2>
                {{-- <p class="section-lead">WYSIWYG editor and code editor.</p> --}}

            <form action="{{ route('activity.update', $activities->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Post Activity</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Activity</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text"
                                            class="form-control" id="name" value="{{ old('name', $activities->name) }}" name="name" placeholder="Your Activity.. ">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text"
                                            class="form-control" value="{{ old('slug', $activities->slug) }}" name="slug" id="slug" readonly>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="category_id" class="form-control selectric">
                                            @foreach($categories as $id => $categoryName)
                                                <option {{ $id === $activities->category_id ? 'selected' : null }} value="{{ $id }}">{{ $categoryName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Publisher</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="publisher_id" class="form-control selectric">
                                            @foreach($publishers as $id => $publisherName)
                                            <option {{ $id === $activities->publisher_id ? 'selected' : null }} value="{{ $id }}">{{ $publisherName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Payment</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="payment_m_s_id" class="form-control selectric">
                                            @foreach($payments as $id => $paymentMName)
                                            <option {{ $id === $activities->payment_m_s_id ? 'selected' : null }} value="{{ $id }}">{{ $paymentMName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="tags[]" class="form-control selectric select2" multiple="">
                                            @foreach($tags as $id => $tagName)
                                            <option {{ in_array($id, $selectedTags) ? 'selected' : '' }} value="{{ $id }}">{{ $tagName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="desc" class="summernote-simple">{{ old('desc', strip_tags($activities->desc)) }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" class="form-control" name="image[]" multiple>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Publish</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
<!-- JS Libraies -->
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>
    <script src="{{ asset('library/codemirror/lib/codemirror.js') }}"></script>
    <script src="{{ asset('library/codemirror/mode/javascript/javascript.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#name').on('input', function() {
                var title = $(this).val();
                var slug = title.toLowerCase().replace(/\s+/g, '-').replace(/[^\w-]+/g, '');
                $('#slug').val(slug);
            });
        });
    </script>

    <!-- Page Specific JS File -->
@endpush
