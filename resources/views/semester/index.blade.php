@extends('backend.layouts.app')
@section('section')
<div class="container mt-4">

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">

        <!-- Add Semester Form -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Add New Semester</div>
                <div class="card-body">
                    <form action="{{ url('/semester/store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-2">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Start Date</label>
                            <input type="date" name="start_date" class="form-control" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>End Date</label>
                            <input type="date" name="end_date" class="form-control" required>
                        </div>
                        <div class="form-check mb-2">
                            <input type="checkbox" name="is_current" class="form-check-input">
                            <label class="form-check-label">Current Semester</label>
                        </div>
                        <button type="reset" class="btn reset">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Semester List -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Semester List</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Current</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($semesters as $semester)
                            <tr>
                                <td>{{ $semester->name }}</td>
                                <td>{{ $semester->start_date }}</td>
                                <td>{{ $semester->end_date }}</td>
                                <td>
                                    @if($semester->is_current)
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-secondary">No</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('/semester/edit/'.$semester->id) }}" class="btn btn-sm btn-info">Edit</a>

                                    <a href="{{ url('/semester/delete/'.$semester->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Delete this semester?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            @if($semesters->isEmpty())
                                <tr><td colspan="5" class="text-center">No semesters found.</td></tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection