@extends('backend.layouts.app')

@section('meta_title', __('Edit Cab'))
@section('page_name', __('Edit Cab'))
@section('page_description', __('Edit Cab'))

@section('name')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a>
    </li>
    <li class="breadcrumb-item"><a href="#!">{{ __('Edit Cab') }}</a></li>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                @if(session('success'))
                    <h5 class="text-success">{{ session('success') }}</h5>
                @else
                    <h5>@yield('page_name')</h5>
                @endif
            </div>
            <div class="card-block">
                <form action="{{ route('cabs.update', encrypt($cab->id)) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- Driver Details --}}
                    <h3 class="text-center">Driver Details</h3>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Driver Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="driver_name" class="form-control" value="{{ old('driver_name', $cab->driver_name) }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-8">
                            <input type="text" name="driver_phone" class="form-control" value="{{ old('driver_phone', $cab->driver_phone) }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">License No.</label>
                        <div class="col-sm-8">
                            <input type="text" name="license_number" class="form-control" value="{{ old('license_number', $cab->license_number) }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Experience (years)</label>
                        <div class="col-sm-8">
                            <input type="number" name="experience" class="form-control" value="{{ old('experience', $cab->experience) }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-8">
                            <input type="text" name="address" class="form-control" value="{{ old('address', $cab->address) }}" required>
                        </div>
                    </div>

                    {{-- Vehicle Details --}}
                    <h3 class="text-center mt-4">Vehicle Details</h3>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Vehicle Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="cab_name" class="form-control" value="{{ old('cab_name', $cab->cab_name) }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Vehicle Number</label>
                        <div class="col-sm-8">
                            <input type="text" name="cab_number" class="form-control" value="{{ old('cab_number', $cab->cab_number) }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Vehicle Type</label>
                        <div class="col-sm-8">
                            <select name="cab_type" class="form-control">
                                <option value="">Select Type</option>
                                @foreach(['Sedan','SUV','Mini','Luxury','Hatchback','Compact','Crossover','Convertible','Coupe','Electric','Van','Pickup'] as $type)
                                    <option value="{{ $type }}" {{ old('cab_type', $cab->cab_type) == $type ? 'selected' : '' }}>{{ $type }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Seating Capacity</label>
                        <div class="col-sm-8">
                            <input type="number" name="seating_capacity" class="form-control" value="{{ old('seating_capacity', $cab->seating_capacity) }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">AC/Non-AC</label>
                        <div class="col-sm-8">
                            <select name="ac" class="form-control">
                                <option value="1" {{ old('ac', $cab->ac) == '1' ? 'selected' : '' }}>AC</option>
                                <option value="0" {{ old('ac', $cab->ac) == '0' ? 'selected' : '' }}>Non-AC</option>
                            </select>
                        </div>
                    </div>

                    {{-- Status --}}
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10 d-flex gap-4">
                            @foreach(['Available', 'In Service', 'Not Available'] as $status)
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="radio" name="status" id="{{ $status }}" value="{{ $status }}" {{ old('status', $cab->status) == $status ? 'checked' : '' }}>
                                    <label class="form-check-label ms-2" for="{{ $status }}">{{ $status }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Image --}}
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-8">
                            <input type="file" name="image" class="form-control">
                            @if($cab->image)
                                <img src="{{ asset('uploads/cabs/' . $cab->image) }}" alt="Current Image" height="80" class="mt-2">
                            @endif
                        </div>
                    </div>

                    {{-- Bank Details --}}
                    <h3 class="text-center mt-4">Bank Details</h3>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Bank Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="bank_name" class="form-control" value="{{ old('bank_name', $cab->bank_name) }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Account Holder Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="account_holder_name" class="form-control" value="{{ old('account_holder_name', $cab->account_holder_name) }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Account Number</label>
                        <div class="col-sm-8">
                            <input type="text" name="account_number" class="form-control" value="{{ old('account_number', $cab->account_number) }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">IFSC Code</label>
                        <div class="col-sm-8">
                            <input type="text" name="ifsc_code" class="form-control" value="{{ old('ifsc_code', $cab->ifsc_code) }}">
                        </div>
                    </div>

                    {{-- Submit --}}
                    <div class="form-group row mt-4">
                        <div class="col-sm-12 text-end">
                            <button type="submit" class="btn btn-primary">{{ __('Update Cab') }}</button>
                        </div>
                    </div>
                </form>
            </div> <!-- /.card-block -->
        </div> <!-- /.card -->
    </div> <!-- /.col-sm-12 -->
</div> <!-- /.row -->
@endsection
