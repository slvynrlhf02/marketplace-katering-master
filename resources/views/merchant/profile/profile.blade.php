@extends('merchant.partials.app')

@section('title')
    Merchant Profile
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Profile</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Data Merchant</h5>
                    </div>
                    <div class="card-body">

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama
                                Perusahaan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" name="company_name"
                                    id="company_name" value="{{ $profile->company_name }}" readonly required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="address">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="address" name="address" id="address"
                                    value="{{ $profile->address }}" readonly required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="contact">Kontak</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="contact" name="contact" id="contact"
                                    value="{{ $profile->contact }}" readonly required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="description">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="description" class="form-control" readonly required>{{ $profile->description }}</textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <a href="{{ route('merchant.edit-profile') }}" class="btn btn-primary">Edit
                                    Profil</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- / Content -->
@endsection
