@extends('layouts.app')

@section('title', config('app.name') . ' | ' . 'Assignment 1')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Reverse order of the words</div>

                    <div class="card-body">
                        <div class="content">
                            <div class="box box-primary">
                                <div class="box-body">
                                    <div class="row">
                                        <p class="form-control" id="reverse_words_text">hi how are you</p>
                                        <button type="button" id="reverse_words_btn" class="btn btn-primary">Reverse</button>
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
