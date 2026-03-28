@extends('backend.layouts.app')

@section('section')

<div class="container mt-4">

<div class="row">

<!-- Create Shift -->
<div class="col-md-4">
<div class="card">
<div class="card-header">
<h4>Create Shift</h4>
</div>

<div class="card-body">
<form action="/shift/store" method="POST">
@csrf

<div class="form-group mb-3">
<label>Shift Name</label>
<input type="text" name="name" class="form-control" placeholder="Enter Shift Name">
</div>

<div class="form-group mb-3">
<label>Start Time</label>
<input type="time" name="start_time" class="form-control">
</div>

<div class="form-group mb-3">
<label>End Time</label>
<input type="time" name="end_time" class="form-control">
</div>

<button type="submit" class="btn btn-primary">Save Shift</button>

</form>
</div>
</div>
</div>

<!-- Shift List -->
<div class="col-md-8">
<div class="card">

<div class="card-header">
<h4>Shift List</h4>
</div>

<div class="card-body">

<table class="table table-bordered">
<thead>
<tr>
<th>ID</th>
<th>Shift Name</th>
<th>Start Time</th>
<th>End Time</th>
<th>Action</th>
</tr>
</thead>

<tbody>

@foreach($shifts as $shift)

<tr>
<td>{{ $shift->id }}</td>
<td>{{ $shift->name }}</td>
<td>{{ $shift->start_time }}</td>
<td>{{ $shift->end_time }}</td>

<td>

<a href="/shift/edit/{{ $shift->id }}" class="btn btn-sm btn-info">Edit</a>

<a href="/shift/delete/{{ $shift->id }}" class="btn btn-sm btn-danger">Delete</a>

</td>
</tr>

@endforeach

</tbody>
</table>

</div>
</div>
</div>

</div>
</div>

@endsection