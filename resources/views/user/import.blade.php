@extends('inc.master')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Import Excel</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="download-template">
            <a href="{{ route('admin.downloadExample') }}" class="btn btn-primary">Download Empty Excel File</a>
        </div>

        <div class="import-form">
            <form action="{{ route('admin.importExcel') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="excel_file">Choose Excel File to Import:</label>
                    <input type="file" class="form-control-file" id="excel_file" name="excel_file">
                </div>
                <button type="submit" class="btn btn-success">Import</button>
            </form>
        </div>
    </div>
@endsection
