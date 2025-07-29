@extends('layouts.app')

@section('title', 'Management - Cat AI')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Management Panel</h1>
    <p>This is a placeholder for the management panel. In a real application, this page would contain tools for managing users, viewing statistics, etc.</p>
    <a href="{{ route('chat') }}" class="btn btn-primary">Back to Chat</a>
</div>
@endsection