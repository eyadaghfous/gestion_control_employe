@extends('home')
 
@section('content')
    
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-server bg-blue"></i>
                        <div class="d-inline">
                            <h5>Taskboard</h5>
                            <span>Tasks Management</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-right">
                    <a class="btn btn-success" href="{{ route('taches.create') }}"> <i class="ik ik-plus"></i> Add </a>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="card task-board">
                    <div class="card-header">
                        <h3>Todos</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body todo-task">
                        <div class="dd" data-plugin="nestable">
                            <ol class="dd-list">
                                @foreach ($todo as $t)
                                
                                <li class="dd-item" data-id="{{ $t->id }}">
                                    <div class="dd-handle">
                                        <h6>{{ $t->sommaire }}</h6>
                                        <form action="{{ route('taches.destroy',$t->id) }}" method="POST">
       
                                            <a class="btn btn-primary" href="{{ route('taches.edit',$t->id) }}"><i class="ik ik-edit-1"></i></a>
                           
                                            @csrf
                                            @method('DELETE')
                              
                                            <button type="submit" class="btn btn-danger"><i class="ik ik-trash"></i></button>
                                        </form>
                                        <p> {{ $t->description }} </p>
                                    </div>
                                </li>
                                @endforeach

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>In Progress</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body progress-task">
                        <div class="dd" data-plugin="nestable">
                            <ol class="dd-list">
                                @foreach ($progress as $t)
                                <li class="dd-item" data-id="{{ $t->id }}">
                                    
                                    <div class="dd-handle">
                                        <h6>{{ $t->sommaire }}</h6>
                                        <form action="{{ route('taches.destroy',$t->id) }}" method="POST">
       
                                            <a class="btn btn-primary" href="{{ route('taches.edit',$t->id) }}"><i class="ik ik-edit-1"></i></a>
                           
                                            @csrf
                                            @method('DELETE')
                              
                                            <button type="submit" class="btn btn-danger"><i class="ik ik-trash"></i></button>
                                        </form>
                                        <p> {{ $t->description }} </p>
                                    </div>
                                   
                                </li>
                                @endforeach
                               
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Completed</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body completed-task">
                        <div class="dd" data-plugin="nestable">
                            <ol class="dd-list">    
                                @foreach ($completed as $t)
                               
                                <li class="dd-item" data-id="{{ $t->id }}">
                                    <div class="dd-handle">     
                                        <h6>{{ $t->sommaire }}</h6>
                                        <form action="{{ route('taches.destroy',$t->id) }}" method="POST">
       
                                            <a class="btn btn-primary" href="{{ route('taches.edit',$t->id) }}"><i class="ik ik-edit-1"></i></a>
                           
                                            @csrf
                                            @method('DELETE')
                              
                                            <button type="submit" class="btn btn-danger"><i class="ik ik-trash"></i></button>
                                        </form>
                                        <p> {{ $t->description }} </p>                                   
                                    </div>
                                </li>

                                @endforeach
                                
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {!! $taches->links() !!}
      
@endsection