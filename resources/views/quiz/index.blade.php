@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Quiz</h2>

    <form action="{{ route('quiz.check') }}" method="POST">
        @csrf

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $question->question }}</h5>
                @foreach ($question->answers as $answer)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_id" id="answer{{ $answer->id }}" value="{{ $answer->id }}" required>
                        <label class="form-check-label" for="answer{{ $answer->id }}">
                            {{ $answer->answer }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <input type="hidden" name="question_id" value="{{ $question->id }}">
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endsection
