@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Doctor</div>

                <div class="card-body">
                    <div class="content">

                        @if(!empty($errors))
                          @if($errors->any())
                              <ul class="alert alert-danger" style="list-style-type: none">
                                  @foreach($errors->all() as $error)
                                      <li>{!! $error !!}</li>
                                  @endforeach
                              </ul>
                          @endif
                        @endif
                        <div class="box box-primary">
                            <div class="box-body">
                                <div class="row">
                                    {!! Form::open(['route' => 'assignment4.store', 'class' => 'form-horizontal col-md-12']) !!}

                                        @include('doctors.fields')

                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
