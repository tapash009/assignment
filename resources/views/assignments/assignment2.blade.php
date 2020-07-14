@extends('layouts.app')

@section('title', config('app.name') . ' | ' . 'Assignment 2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Array Manipulation</div>

                    <div class="card-body">
                        <div class="content">
                            <div class="box box-primary">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="form-group">
                                            <p type="text" class="form-control">{4, 12, 5, 3, 6, 3}</p>
                                            <p type="text" class="form-control">K = 2</p>
                                            <button type="button" id="array_m_btn" class="btn btn-primary">Click Me, Open Console Log To View Result</button>
                                        </div>
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
