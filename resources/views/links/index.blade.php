@extends('links.layout')


@section('content')
	<br/>
	<br/>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
              <center>  <h2>BookMark Saving System</h2> </center>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('links.create') }}"> Add New BookMark</a>
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
            <th>Title</th>
            <th>URL</th>
			<th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($links as $link)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $link->title }}</td>
            <td>{{ $link->url }}</td>
			 <td>{{ $link->description }}</td>
            <td>
                <form action="{{ route('links.destroy',$link->id) }}" method="POST">


                    <a class="btn btn-info" href="{{ route('links.show',$link->id) }}">Show</a>

 
                    <a class="btn btn-primary" href="{{ route('links.edit',$link->id) }}">Edit</a>


                    @csrf
                    @method('DELETE')

   
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


    {!! $links->links() !!}


@endsection