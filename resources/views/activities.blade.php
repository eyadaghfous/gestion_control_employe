@extends('home')

@section('content')
        <div class="container-fluid">
              <div class="row">
                <div class="col-md-4">
                    <div class="card task-board">
                        <div class="card-header">
                            <h3>A faire</h3>
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
                                    <li class="dd-item" data-id="1">
                                        <div class="dd-handle">

                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="2">
                                        <div class="dd-handle">
                                            
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="3">
                                        <div class="dd-handle">
                                            
                                        </div>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>En cours</h3>
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
                                    <li class="dd-item" data-id="1">
                                        <div class="dd-handle">
                                            
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="2">
                                        <div class="dd-handle">
                                            
                                        </div>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Fait</h3>
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
                                    <li class="dd-item" data-id="1">
                                        <div class="dd-handle">                                        
                                            
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="2">
                                        <div class="dd-handle">
                                            
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection