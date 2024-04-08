@extends('layouts.app')

@section('title', 'Table')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Trash</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('dashboard') }}">Payment</a></div>
                    <div class="breadcrumb-item"> Trash Table</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Trash Table</h2>
                <p class="section-lead">Whenever You See The Data Trash.</p>
                <div class="row">
                    <div class="col-lg-13 col-md-12 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Category ( Data Trash )</h4>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table-striped table"
                                                    id="sortable-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">
                                                                No.
                                                            </th>
                                                            <th>Category</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($categories as $category)
                                                        <tr>
                                                            <td>
                                                                <div class="text-center">
                                                                   {{ $loop->iteration}}
                                                                </div>
                                                            </td>
                                                            <td>{{ $category->name }}</td>
                                                            <td>
                                                            <a class="btn btn-primary btn-action mr-2 mb-2" data-toggle="tooltip" title="Edit" href="{{ route('category.restore', $category->id) }}"><i class="bi bi-recycle"></i></a>
                                                            <form action="{{ route('category.delete', $category->id) }}" method="POST" class="delete-form" id="delete-form-{{ $category->id }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" type="submit" onclick="return confirmDelete()"><i class="fas fa-trash"></i></button>
                                                            </form>
                                                              </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/components-table.js') }}"></script>
    <script>
        document.querySelectorAll('.delete-form').forEach(function(form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                });
            });
        });

        </script>
@endpush
