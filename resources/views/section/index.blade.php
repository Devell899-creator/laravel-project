@extends('backend.layouts.app')

@section('section')

<div class="container mt-4">

<div class="row">

<!-- CREATE SECTION -->
<div class="col-md-4">

<div class="card shadow-lg border-0">

<div class="card-header bg-primary text-white">
<h4 class="mb-0">Create Section</h4>
</div>

<form action="{{ url('/section/store') }}" method="POST">
@csrf

<div class="card-body">

<div class="form-group mb-3">
<label>Name <span class="text-danger">*</span></label>

<input type="text"
name="name"
class="form-control"
placeholder="Enter Section Name"
required>

</div>

</div>

<div class="card-footer text-end">
<button class="btn btn-success">Submit</button>
</div>

</form>

</div>

</div>

<!-- LIST SECTION -->

<div class="col-md-8">

<div class="card shadow-lg border-0">

<div class="card-header bg-dark text-white d-flex justify-content-between">
<h4 class="mb-0">List Section</h4>
</div>

<div class="card-body">

<table class="table table-hover table-bordered">

<thead class="table-dark">

<tr>
<th>No</th>
<th>Name</th>
<th width="150">Action</th>
</tr>

</thead>

<tbody>

@foreach($sections as $key => $section)

<tr>

<td>{{ $key+1 }}</td>

<td>{{ $section->name }}</td>

<td>

<a href="/section/edit/{{$section->id}}" class="btn btn-primary btn-sm">
Edit
</a>

<a href="/section/delete/{{$section->id}}" 
class="btn btn-danger btn-sm"
onclick="return confirm('Are you sure?')">
Delete
</a>

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