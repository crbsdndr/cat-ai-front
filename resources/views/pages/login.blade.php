@extends('layouts.app')

@section('title', 'Login - Cat AI')

@section('content')
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-sm" style="width: 100%; max-width: 400px;">
        <div class="card-body p-5">
            <div class="text-center mb-4">
                <div class="cat-avatar mx-auto mb-3" style="width: 60px; height: 60px; background-color: #0d6efd; color: white; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                    <i data-lucide="cat" style="width: 30px; height: 30px;"></i>
                </div>
                <h5 class="card-title">Login to Cat AI</h5>
            </div>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection