@extends('layout.master')

@section('title', 'Table Page')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/table-styles.css') }}">
@endsection

@section('content')
    <div class="page-header">
        <h1>Table Page</h1>
        <p>View all your data in a clean table format.</p>
    </div>

    <div class="card">
        <div class="card-header">
            <h5>Recent Users</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Avatar</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="avatar" class="rounded-full" style="width:40px"></td>
                            <td>Isabella Christensen</td>
                            <td>isabella@example.com</td>
                            <td>Admin</td>
                            <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="avatar" class="rounded-full" style="width:40px"></td>
                            <td>Mathilde Andersen</td>
                            <td>mathilde@example.com</td>
                            <td>User</td>
                            <td><span class="badge bg-danger">Inactive</span></td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('assets/images/user/avatar-3.jpg') }}" alt="avatar" class="rounded-full" style="width:40px"></td>
                            <td>Karla Sorensen</td>
                            <td>karla@example.com</td>
                            <td>User</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        console.log('Table page loaded');
    </script>
@endsection
