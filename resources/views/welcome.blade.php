@extends('layouts.app')

@section('title', 'Welcome Page')

@section('content')

    <div class="card">
        <h2>Student Information</h2>

        @php
            $subjects = ['math', 'physics', 'geography', 'history'];
            $student = "Kanat Kozhakhmet";
        @endphp

        @isset($student)
            <p><strong>Student:</strong> {{ $student }}</p>
        @endisset

        @if(count($subjects) > 0)
            <h3>Favorite Subjects:</h3>
            <ul>
                @foreach($subjects as $subject)
                    <li>{{ $subject }}</li>
                @endforeach
            </ul>
        @else
            <p>No subjects available.</p>
        @endif

    </div>

@endsection
