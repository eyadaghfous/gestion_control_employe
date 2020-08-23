@extends('home')
 
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2>Users Management</h2>
      </div>
      <div class="float-right m-3">
          <a class="btn btn-success" href="{{ route('users.create') }}"><i class="ik ik-plus"></i> Add </a> 
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
 <th>Roles</th>
 <th width="150px">Action</th>
</tr>
@foreach ($data as $key => $user)
<tr>
  <td>{{ ++$i }}</td>
  <td>{{ $user->name }}</td>
  <td>
    @if(!empty($user->getRoleNames()))
      @foreach($user->getRoleNames() as $v)
         <label class="badge badge-success">{{ $v }}</label>
      @endforeach
    @endif
  </td>
  <td>
     <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}"><i class="ik ik-edit-1"></i></a>
      {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
      <button type="submit" class="btn btn-danger"><i class="ik ik-trash"></i></button>
      {!! Form::close() !!}
  </td>
</tr>
@endforeach
</table>


{!! $data->render() !!}


<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection