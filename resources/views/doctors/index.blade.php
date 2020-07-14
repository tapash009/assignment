@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Doctors List
                </div>

                <div class="card-body">

                    <section class="content-header">
                        <h1 class="pull-right">
                           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('assignment4.create') }}">Add New</a>
                           <a class="btn btn-primary float-right" href="{{ route('assignment4.appointment-list') }}">All Appointments List</a>
                        </h1>
                    </section>
                    <div class="content">
                        <div class="clearfix"></div>

                        @include('flash::message')

                        <div class="clearfix"></div>
                        <div class="box box-primary">
                            <div class="box-body">
                                @include('doctors.table')
                            </div>
                        </div>
                        <div class="text-center">
                        
                        {{ $doctors->links() }}

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

