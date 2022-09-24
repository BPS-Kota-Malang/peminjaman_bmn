@extends('master.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pengembalian</h2>
            </div>
            <div class="pull-right">
                @can('pengembalian-create')
                <a class="btn btn-success" href="{{ route('pengembalian.create') }}"> Create New Pengembalian</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($peminjamen as $pengembalian)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $pengembalian->name }}</td>
	        <td>{{ $pengembalian->detail }}</td>
	        <td>
                <form action="{{ route('pengembalian.destroy',$pengembalian->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('pengembalian.show',$pengembalian->id) }}">Show</a>
                    @can('pengembalian-edit')
                    <a class="btn btn-primary" href="{{ route('pengembalian.edit',$pengembalian->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('pengembalian-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
@endforeach
    </table>





<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection
