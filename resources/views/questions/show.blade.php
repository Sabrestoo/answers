@extends('template');

@section('content');
    <div class="container">
    <h1>{{ $question->title }}</h1>
        <p class="lead">
            {{ $question->description }}
        </p>
        <h6>
            Submitted by: {{ $question->user->name }}, {{ $question->created_at->diffForHumans() }}
        </h6>
        <hr>

        <!--display all answers to this question -->

        @if ($question->answers->count() > 0)
            @foreach ($question->answers as $answer)
                <div class="card mb-3">
                    <div class="card-body">
                        <p>
                            {{ $answer->content}}
                        </p>
                    </div>
                <div class="card-body">Answered by: {{ $answer->user->name }}, {{ $answer->created_at->diffForHumans() }}
                @if ($answer->user->id == Auth::id())
                <a href="{{ route('answers.edit', $answer->question_id) }}" class="btn btn-primary btn-sm pull-right ml-3" role="button">Edit</a></div>

                 @endif
                </div>

        @endforeach
        @else
        <p>
            There are no answers for this question yet.
        </p>

        @endif

    <form action="{{ route('answers.store') }}" method="POST">
    {{ csrf_field() }}

    <h4>Submit Your Own Answer:</h4>

    <textarea name="content" class="form-control" rows="4"></textarea>
    <input type="hidden" value="{{ $question->id }}" name="question_id">
    <button class="btn btn-primary mt-3">Submit Answer</button>
    </form>

    </div>
@endsection
