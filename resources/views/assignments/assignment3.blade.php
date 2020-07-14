@extends('layouts.app')

@section('title', config('app.name') . ' | ' . 'Assignment 3')

@section('content')
    {{--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">The HTML JS Game</div>
                    <div class="card-body">
                        <div class="content">
                            <div class="box box-primary">
                                <div class="box-body">
                                    <div class="row">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}

    <style>
        .btn-xl {
            padding: 10px 20px;
            font-size: 20px;
            border-radius: 10px;
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        The HTML/JS Game
                    </div>
                    <div class="card-body">
                        <div class="content">
                            <div class="box box-primary">
                                <div class="box-body">
                                    <div class="row mb-4">
                                        <div class="form-inline">
                                            <input type="hidden" id="the_game_score" value="0">
                                            <input type="hidden" id="the_game_status" value="s">
                                            <button type="button" class="btn btn-primary" id="game_reset_btn" data-content="s">Start Over</button>
                                            <p class="text-muted mb-0 pl-3 font-weight-bold" id="time_remaining">Start</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-inline">
                                            <button type="button" class="btn btn-primary btn-xl" id="game_score_btn">Click Me</button>
                                            <ul class="list-unstyled mb-0 pl-3">
                                                <li class="text-muted font-weight-bold" id="lucky_number">00</li>
                                                <li class="text-muted font-weight-bold" id="game_score">0</li>
                                            </ul>
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
