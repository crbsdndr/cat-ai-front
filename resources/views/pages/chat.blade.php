@extends('layouts.app')

@section('title', 'Cat AI - Chat')

@section('content')
<div class="container vh-100 d-flex flex-column py-3">
    <header class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex align-items-center">
            <div class="cat-avatar me-2">
                <i data-lucide="cat"></i>
            </div>
            <h5 class="mb-0">Cat AI</h5>
        </div>
        <div class="d-flex align-items-center">
            <div class="cat-avatar me-2" style="width: 24px; height: 24px;">
                <i data-lucide="cat" style="width: 12px; height: 12px;"></i>
            </div>
            {{-- In a real app, you'd get this from auth()->user()->name --}}
            <span class="small">anonymous cat</span>
        </div>
    </header>

    <main class="flex-grow-1 d-flex flex-column bg-white rounded shadow-sm p-4">
        <div class="flex-grow-1 overflow-auto mb-3" id="chat-history">
            <div class="text-center">
                <div class="cat-avatar mx-auto mb-3" style="width: 60px; height: 60px;">
                    <i data-lucide="cat" style="width: 30px; height: 30px;"></i>
                </div>
                {{-- In a real app, you'd get this from auth()->user()->name --}}
                <h1 class="mb-3">welcome back, anonymous cat!</h1>
                <p class="text-muted">you can ask me anything, or pick one of the examples below.</p>
            </div>
        </div>
        <div class="chat-input-container">
            <div class="d-flex">
                <input type="text" id="chat-input" class="form-control form-control-lg" placeholder="What do you want to ask the cat?">
                <button id="send-button" class="btn btn-primary ms-2">
                    <i data-lucide="send"></i>
                </button>
            </div>
            <div class="small text-muted text-center mt-2">Cat AI can make mistakes. Consider checking important information.</div>
        </div>
    </main>
</div>
@endsection