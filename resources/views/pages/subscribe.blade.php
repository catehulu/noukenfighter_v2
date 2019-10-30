@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Subscribe') }}</div>

                <div class="card-body">
                    <form method="GET" action="#">
                            <div class="form-group">
                                    <label for="Package">Package:</label>
                                    <select class="custom-select" id="Package">
                                            <option selected>Choose...</option>
                                            <option value="1">3 months</option>
                                            <option value="2">6 months</option>
                                            <option value="3">1 year</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="Metode_Pembayaran">Metode Pembayaran:</label>
                                <select class="custom-select" id="Metode_Pembayaran">
                                        <option selected>Choose...</option>
                                        <option value="1">Bank BCA</option>
                                        <option value="2">Bank Mandiri</option>
                                </select>
                            </div>
                            <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Subscribe') }}
                                        </button>
                                    </div>
                            </div>     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
