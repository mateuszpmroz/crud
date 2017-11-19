@extends('master')
@section('content')
<div id="show-blocks">
<div class="col-lg-offset-3 col-lg-6">
    <div class="panel panel-primary">
        <div class="panel-heading">Search box </div>
        <div class="panel-body">
    <input type="text" class="form-control" v-model="search" placeholder="Type what you're searching for.." />
        </div>
    </div>
</div>
                @foreach($cars as $car)
                    <div class="col-lg-8 col-lg-offset-2 col-sm-12">
                    <div class="block">
                        <div class="block__header">Object nr: {{ $car->id }}</div>
                        <div class="block__content">
                    <table class="block__table">
                        <tr>
                            <td>id:</td>
                            <td>{{ $car->id }}</td>
                            <td>model:</td>
                            <td>{{ $car->model }}</td>
                        </tr>
                        <tr>
                            <td>brand:</td>
                            <td>{{ $car->brand }}</td>
                            <td>production year:</td>
                            <td>{{ $car->production_year }}</td>
                        </tr>
                    <tr>
                        <tr>

                        <td><a href="{{ route('edit', $car->id) }}" class="btn btn-info">Edit</a></td>
                        <td>
                            <form action="{{ route('delete', $car->id)  }}" method="get">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    </table>
                        </div>
                    </div>
                    </div>
                @endforeach
</div>
               <div class="col-lg-8 col-lg-offset-2"> {{ $cars->links() }}</div>
    @if(session('success'))
        {{ session('success') }}
    @endif

@endsection