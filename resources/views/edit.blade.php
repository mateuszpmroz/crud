@extends('master')
@section('content')
    <div class="col-lg-offset-2 col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">CRUD Form</div>
            <div class="panel-body">
                <form method="post" action="{{route('update', $car->id) }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="brand">Brand:</label>
                        <input type="text" class="form-control" value="{{ $car->brand }}" id="brand" name="brand">
                    </div>
                    <div class="form-group">
                        <label for="model">Model:</label>
                        <input type="text" class="form-control" value="{{ $car->model }}" id="model" name="model">
                    </div>
                    <div class="form-group">
                        <label for="production_year">Production year:</label>
                        <input type="number" min="1900" max="2017" class="form-control"
                               value="{{ $car->production_year }}" id="production_year" name="production_year">
                    </div>

                    <input type="submit" value="Update" class="btn btn-default">
                </form>
            </div>
        </div>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
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
@endsection