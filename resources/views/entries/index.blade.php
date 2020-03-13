@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dairy Entries
                    <div class="float-right">
                        <a href="?view=tableview">Table</a> | <a href="?view=gridview">Grid</a> | <a href="?view=timeline">Timeline</a> 
                    </div>
                </div>

                <div class="card-body">

                    <section class="content-header">
                        <h1 class="pull-right">
                           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('entries.create') }}">Add New</a>
                        </h1>
                    </section>
                    <div class="content">
                        <div class="clearfix"></div>

                        @include('flash::message')

                        <div class="clearfix"></div>
                        <div class="box box-primary">
                            <div class="box-body">
                                @if(session('view') && session('view')=='tableview')
                                    @include('entries.table')
                                @endif

                                @if(session('view') && session('view')=='gridview')
                                    @include('entries.grid')
                                @endif
                                    
                                @if(session('view') && session('view')=='timeline')
                                    @include('entries.timeline')
                                @endif
                            </div>
                        </div>
                        <div class="text-center">
                        
                        {{ $entries->links() }}

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

