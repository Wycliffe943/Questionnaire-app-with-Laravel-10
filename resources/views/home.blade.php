@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/questionnaires/create" class="btn btn-dark">Create New Questionnaire</a>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">My Questionnaires</div>

                <div class="card-body">
                <ul class="list-group">
                    @foreach($questionnaires as $questionnaire)
                    <li class="list-group-item">
                            <a href="/questionnaires/{{ $questionnaire->id }}">{{$questionnaire->title}}</a>
                            <div class="mt-2">
                                <small><strong>Share URL</strong></small>
                                 <p>
                                    <a href="/surveys/{{ $questionnaire->id }}-{{ Str::slug($questionnaire->title) }}">{{ $questionnaire->id }}-{{ Str::slug($questionnaire->title) }}</a>
                                 </p>
                            </div>
                    </li>
                    @endforeach
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
