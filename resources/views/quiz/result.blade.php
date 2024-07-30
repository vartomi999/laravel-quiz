@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Result</h2>

    @if ($isCorrect)
        <div class="alert alert-success">
            Correct! The answer is correct.
        </div>
    @else
        <div class="alert alert-danger">
            Incorrect! The answer is not correct.
        </div>
    @endif

    <form action="{{ route('quiz.next') }}" method="GET">
        <button type="submit" class="btn btn-primary">Next Question</button>
    </form>
</div>
@endsection
