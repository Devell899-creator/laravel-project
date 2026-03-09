<!DOCTYPE html>
<html>
<head>

<title>Edit Section</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background: linear-gradient(135deg,#667eea,#764ba2);
height:100vh;
display:flex;
align-items:center;
justify-content:center;
}

.card{
border:none;
border-radius:15px;
}

.card-header{
border-radius:15px 15px 0 0 !important;
font-weight:bold;
}

.form-control{
border-radius:8px;
}

.btn{
border-radius:8px;
padding:8px 25px;
}

</style>

</head>

<body>

<div class="container">

<div class="row justify-content-center">

<div class="col-md-5">

<div class="card shadow-lg">

<div class="card-header bg-warning text-white text-center">
<h4>Edit Section</h4>
</div>

<form action="/section/update/{{$section->id}}" method="POST">
@csrf

<div class="card-body">

<div class="mb-3">

<label class="form-label">Section Name</label>

<input type="text"
name="name"
value="{{$section->name}}"
class="form-control"
placeholder="Enter Section Name">

</div>

</div>

<div class="card-footer text-center">

<button class="btn btn-success">
Update Section
</button>

</div>

</form>

</div>

</div>

</div>

</div>

</body>
</html>