@extends('voyager::master')

@section('page_title', __('pages'))

@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Edit Pns Item</h1>

                <form action="{{ route('allocation.update', $allocation->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="allocation">Allocation</label>
                        <input type="text" name="allocation" id="allocation" class="form-control"
                            value="{{ $allocation->allocation }}">
                    </div>

                    <div class="form-group">
                        <label for="perentage">Percentage</label>
                        <input type="number" name="perentage" id="perentage" class="form-control"
                            value="{{ $allocation->perentage }}">
                    </div>

                    <div class="form-group">
                        <label for="token_amount">Token Amount</label>
                        <input type="number" name="token_amount" id="token_amount" class="form-control"
                            value="{{ $allocation->token_amount }}">
                    </div>

                    <div class="form-group">
                        <label for="vesting_period">Vasting Period</label>
                        <input type="text" name="vesting_period" id="vesting_period" class="form-control"
                            value="{{ $allocation->vesting_period }}">
                    </div>

                    <div class="form-group">
                        <label for="vesting_period">Vasting Period</label>
                        <div style="height: 10px; width: 10px; background-color: {{$allocation?->color}}; color: white;">.</div>
                        <select name="color" id="colorSelect">
                                <option value="{{$allocation?->color}}" style="background-color: {{$allocation?->color}}; color: white;">{{$allocation?->color}}</option>
                               
                                <option value="#0652EA" style="background-color: #0652EA; color: white;">#0652EA</option>
                                <option value="#6426EA" style="background-color: #6426EA; color: white;">#6426EA</option>
                                <option value="#D91FE9" style="background-color: #D91FE9; color: white;">#D91FE9</option>
                                <option value="#2C3C8D" style="background-color: #2C3C8D; color: white;">#2C3C8D</option>
                                <option value="#03A9EB" style="background-color: #03A9EB; color: white;">#03A9EB</option>
                                <!-- Additional Colors -->
                                <option value="#FF5733" style="background-color: #FF5733; color: white;">#FF5733</option>
                                <option value="#33FF57" style="background-color: #33FF57; color: black;">#33FF57</option>
                                <option value="#FF33A6" style="background-color: #FF33A6; color: white;">#FF33A6</option>
                                <option value="#338AFF" style="background-color: #338AFF; color: white;">#338AFF</option>
                                <option value="#FFD700" style="background-color: #FFD700; color: black;">#FFD700</option>
                            </select>
                    </div>




                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>
    </div>


@endsection

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
