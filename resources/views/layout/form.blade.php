@extends('layout.master')

@section('title', 'Form Page')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/form-styles.css') }}">
@endsection

@section('content')
    <div class="page-header">
        <h1>Form Page</h1>
        <p>Use this page to create or edit records.</p>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('form.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" required>
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" id="role" class="form-select" required>
                        <option value="">Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        console.log('Form page loaded');
    </script>
@endsection
