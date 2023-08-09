@extends('inc.master')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>User Data</h1>
        </div>

        <div class="export-button">
            <a href="{{ route('admin.exportExcel') }}" class="btn btn-primary">Download Excel</a>
        </div>

        <div class="user-table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->full_name }}</td>
                        <td>{{ $user->phone_number }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
