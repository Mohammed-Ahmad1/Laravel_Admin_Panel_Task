@extends('layout.master')

@section('title', 'New Page')

@section('css')
    {{-- Page-specific CSS (if needed) --}}
@endsection

@section('content')
    <div class="page-header">
        <h1>New Page</h1>
        <p>Use this template as a starter page for any new content.</p>
    </div>

    <div class="card">
        <div class="card-header">
            <h5>Card Title</h5>
        </div>
        <div class="card-body">
            <p>This is a starter template. Copy and customize this content as needed.</p>
        </div>
    </div>
@endsection

@section('script')
    {{-- Page-specific JavaScript (if needed) --}}
@endsection
