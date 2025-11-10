@extends('Layouts.master')

@section('title')
    {{ __($page_title) }} |
@endsection

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>{{ __($page_title) }}</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Investment</li>
                        <li class="breadcrumb-item">Plans</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration Starts-->
            <div class="col-sm-12 col-md-12 col-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-7 col-md-7 col-xl-10 col-7">
                                <h5>{{ __($page_title) }}</h5>
                            </div>

                            @if(session()->has('errors'))
                                <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
                                    <i data-feather="thumbs-down"></i>
                                    <ul><li>{{ session()->get('errors') }}</li></ul>
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if(session()->has('success'))
                                <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                                    <i data-feather="thumbs-up"></i>
                                    <p>{{ session()->get('success') }}</p>
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Min</th>
                                        <th>Max</th>
                                        <th>Duration</th>
                                        <th>ROI</th>
                                        <th>Agent Pay</th>
                                        <th>Image</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($plans as $logs)
                                        <tr>
                                            <td>{{ $logs->name }}</td>
                                            <td>${{ number_format($logs->min, 2) }}</td>
                                            <td>${{ number_format($logs->max, 2) }}</td>
                                            <td>{{ $logs->duration }}</td>
                                            <td>{{ $logs->roi }}%</td>
                                            <td>{{ $logs->agent_pay ?? '0' }}%</td>
                                            <td>
                                                @if($logs->image)
                                                    <img src="{{ asset($logs->image) }}" alt="plan image" width="60" class="rounded">
                                                @else
                                                    <small class="text-muted">No image</small>
                                                @endif
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($logs->created_at)->format('Y-m-d') }}</td>

                                            <td>
                                                <div class="btn-group-pill">
                                                    <a href="#editModalCenter{{ $logs->id }}" class="btn btn-pill btn-primary" data-bs-toggle="modal"><i class="fa fa-edit"></i></a>
                                                    <a href="#deleteModalCenter{{ $logs->id }}" class="btn btn-pill btn-danger" data-bs-toggle="modal"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9">{{ __($empty_message) }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Zero Configuration Ends-->
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Modals Section -->
    @foreach ($plans as $data)
        <!-- Edit Modal -->
        <div class="modal fade" id="editModalCenter{{ $data->id }}" tabindex="-1" aria-labelledby="editModalCenterLabel{{ $data->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit {{ $data->name }}</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="form theme-form" enctype="multipart/form-data" action="{{ url('/admin/plans/update/'.$data->id) }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" name="id" value="{{ $data->id }}">

                            <div class="mb-3">
                                <label class="form-label">Plan Name</label>
                                <input class="form-control" type="text" name="name" value="{{ $data->name }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Min</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" step="0.01" name="min" value="{{ $data->min }}" required>
                                    <span class="input-group-text">USD</span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Max</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" step="0.01" name="max" value="{{ $data->max }}" required>
                                    <span class="input-group-text">USD</span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="duration">Duration</label>
                                <select class="form-control" id="duration" name="duration" required>
                                    <option value="{{ $data->duration }}" selected>{{ $data->duration }}</option>
                                    <option disabled>-- Select Duration --</option>
                                    <option value="1">Daily</option>
                                    <option value="7">Weekly</option>
                                    <option value="30">1 Month</option>
                                    <option value="90">3 Months</option>
                                    <option value="180">6 Months</option>
                                    <option value="360">1 Year</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">ROI</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" step="0.01" name="roi" value="{{ $data->roi }}" required>
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Agent Pay</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" step="0.01" name="agent_pay" value="{{ $data->agent_pay ?? 0 }}">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Plan Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                                @if($data->image)
                                    <img src="{{ asset($data->image) }}" alt="Plan Image" class="mt-2 rounded" width="100">
                                @endif
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Delete Modal -->
        <div class="modal fade" id="deleteModalCenter{{ $data->id }}" tabindex="-1" aria-labelledby="deleteModalCenterLabel{{ $data->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete {{ $data->name }}</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="form theme-form" action="{{ url('/admin/plans/delete/'.$data->id) }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <h6>Are you sure you want to delete <span class="text-warning">{{ $data->name }}</span>?</h6>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
