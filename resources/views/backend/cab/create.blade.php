@extends('backend.layouts.app')

@section('meta_title', __('Add Cab'))
@section('page_name', __('Add Cab'))
@section('page_description', __('Add Cab'))

@section('name')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a>
    </li>
    <li class="breadcrumb-item"><a href="#!">{{ __('Add Cab') }}</a></li>
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
                  <form action="{{ route('cab.store') }}" method="POST" enctype="multipart/form-data" id="cabForm">
                    @csrf

                    <div id="step1">
                        <h3 style="text-align: center"> Driver Details</h3>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Driver Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="driver_name" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-8">
                                <input type="text" name="driver_phone" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">License No.</label>
                            <div class="col-sm-8">
                                <input type="text" name="license_number" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Experience (years)</label>
                            <div class="col-sm-8">
                                <input type="number" name="experience" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-8">
                                <input type="text" name="address" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary" id="nextStep">Next</button>
                            </div>
                        </div>


                    </div>

                    <div id="step2" style="display: none;">
                        <h3 style="text-align: center"> Vehicle Details</h3>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Vehicle Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="cab_name" class="form-control" value="{{ old('cab_name') }}">
                                @error('cab_name') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Vehicle Number</label>
                            <div class="col-sm-8">
                                <input type="text" name="cab_number" class="form-control" value="{{ old('cab_number') }}">
                                @error('cab_number') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Vehicle Type</label>
                            <div class="col-sm-8">
                                <select name="cab_type" class="form-control">
                                    <option value="">Select Type</option>
                                    <option value="Sedan">Sedan</option>
                                    <option value="SUV">SUV</option>
                                    <option value="Mini">Mini</option>
                                    <option value="Luxury">Luxury</option>
                                    <option value="Hatchback">Hatchback</option>
                                    <option value="Compact">Compact</option>
                                    <option value="Crossover">Crossover</option>
                                    <option value="Convertible">Convertible</option>
                                    <option value="Coupe">Coupe</option>
                                    <option value="Electric">Electric</option>
                                    <option value="Van">Van</option>
                                    <option value="Pickup">Pickup</option>
                                </select>
                                @error('cab_type') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Seating Capacity</label>
                            <div class="col-sm-8">
                                <input type="number" name="seating_capacity" class="form-control" placeholder="e.g., 4, 6">
                                @error('seating_capacity') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">AC/Non-AC</label>
                            <div class="col-sm-8">
                                <select name="ac" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="1">AC</option>
                                    <option value="0">Non-AC</option>
                                </select>
                                @error('ac') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <div class="d-flex gap-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="radio" name="status" id="available" value="Available" checked>
                                        <label class="form-check-label ms-2" for="available">Available</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="radio" name="status" id="in_service" value="In Service">
                                        <label class="form-check-label ms-2" for="in_service">In Service</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="radio" name="status" id="not_available" value="Not Available">
                                        <label class="form-check-label ms-2" for="not_available">Not Available</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-8">
                                <input type="file" name="image" class="form-control">
                                @error('image') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-secondary" id="prevStep">Back</button>
                            </div>

                            <div class="form-group row">

                            <div style="position: absolute; bottom: 20px; right: 20px;">
                                    <button type="button" class="btn btn-primary" id="nextToStep3" style="float: right;">Next</button>
                                </div>
                            </div>


                           
                        </div>

                    </div> {{-- End Step 2 --}}



                    <div id="step3" style="display: none;">
                        <h4  style="text-align: center"> Bank Details</h4>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Bank Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="bank_name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Account Holder Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="account_holder_name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Account Number</label>
                            <div class="col-sm-8">
                                <input type="text" name="account_number" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">IFSC Code</label>
                            <div class="col-sm-8">
                                <input type="text" name="ifsc_code" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Branch Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="branch_name" class="form-control">
                            </div>
                        </div>



                        <!-- Back and Submit Buttons -->
                        <div class="form-group row mt-3">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-secondary" id="prevToStep2">Back</button>
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




{{-- STEP 3: BANK DETAILS --}}


@endsection

@section('styles')
<style>
    .form-check-input:checked {
        background-color: #198754;
        border-color: #198754;
    }
    .form-check-label {
        font-weight: 500;
    }
    .form-check {
        min-width: 130px;
    }
</style>
@endsection

@section('scripts')
<script>

    // From Step 1 to Step 2
    document.getElementById('nextStep').addEventListener('click', function () {
        document.getElementById('step1').style.display = 'none';
        document.getElementById('step2').style.display = 'block';
    });

    // From Step 2 to Step 3
    document.getElementById('nextToStep3').addEventListener('click', function () {
        document.getElementById('step2').style.display = 'none';
        document.getElementById('step3').style.display = 'block';
    });

    // Back to Step 1
    document.getElementById('prevStep').addEventListener('click', function () {
        document.getElementById('step2').style.display = 'none';
        document.getElementById('step1').style.display = 'block';
    });

    // Back to Step 2
    document.getElementById('prevToStep2').addEventListener('click', function () {
        document.getElementById('step3').style.display = 'none';
        document.getElementById('step2').style.display = 'block';
    });
</script>


@endsection

