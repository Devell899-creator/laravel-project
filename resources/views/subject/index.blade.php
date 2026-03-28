<!DOCTYPE html>
<html>
<head>
<title>Subject Module</title>
<style>
body{
    font-family:Arial, sans-serif;
    background:#f4f6f9;
    margin:0;
    padding:20px;
}
.card{
    background:white;
    border-radius:6px;
    padding:20px;
    box-shadow:0 2px 6px rgba(0,0,0,0.1);
    margin-bottom:30px;
}
.card h3{
    margin-bottom:20px;
}
.row{
    display:flex;
    margin-bottom:15px;
    align-items:center;
}
.label{
    width:200px;
    font-weight:bold;
}
.input{
    flex:1;
}
input[type=text], input[type=color], input[type=file]{
    width:100%;
    padding:8px;
    border:1px solid #ccc;
    border-radius:4px;
}
.radio-group label{
    margin-right:15px;
}
.btn{
    padding:6px 12px;
    border-radius:4px;
    text-decoration:none;
    font-size:14px;
    cursor:pointer;
    border:none;
}
.submit{
    background:#0d6efd;
    color:white;
}
.reset{
    background:#6c757d;
    color:white;
    margin-right:10px;
}
.upload-btn{
    background:#0d6efd;
    color:white;
    margin-left:10px;
}
table{
    width:100%;
    border-collapse:collapse;
}
table th{
    background:#f1f1f1;
    padding:12px;
    text-align:left;
    border-bottom:2px solid #ddd;
}
table td{
    padding:12px;
    border-bottom:1px solid #ddd;
}
.color-box{
    width:25px;
    height:25px;
    border-radius:3px;
}
img{
    border-radius:4px;
}
.edit-btn{
    background:#ffc107;
    color:black;
}
.delete-btn{
    background:#dc3545;
    color:white;
}
</style>
</head>
<body>

<!-- Create Form -->
<div class="card">
<h3>Add Subject</h3>
<form action="/subject/store" method="POST" enctype="multipart/form-data">
@csrf

<div class="row">
<div class="label">Medium *</div>
<div class="input radio-group">
<label><input type="radio" name="medium" value="Arabic"> Arabic</label>
<label><input type="radio" name="medium" value="Chinese"> Chinese</label>
<label><input type="radio" name="medium" value="English"> English</label>
</div>
</div>

<div class="row">
<div class="label">Name *</div>
<div class="input"><input type="text" name="name" placeholder="Name"></div>
</div>

<div class="row">
<div class="label">Type *</div>
<div class="input radio-group">
<label><input type="radio" name="type" value="Theory"> Theory</label>
<label><input type="radio" name="type" value="Practical"> Practical</label>
</div>
</div>

<div class="row">
<div class="label">Subject Code</div>
<div class="input"><input type="text" name="subject_code" placeholder="Subject Code"></div>
</div>

<div class="row">
<div class="label">Background Color *</div>
<div class="input"><input type="color" name="bg_color"></div>
</div>

<div class="row">
<div class="label">Image *</div>
<div class="input" style="display:flex;">
<input type="file" name="image">
<button type="button" class="btn upload-btn">Upload</button>
</div>
</div>

<div style="text-align:right;margin-top:20px;">
<button type="reset" class="btn reset">Reset</button>
<button type="submit" class="btn submit">Submit</button>
</div>
</form>
</div>

<!-- Subject List -->
<div class="card">
<h3>Subject List</h3>
<table>
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Medium</th>
<th>Type</th>
<th>Subject Code</th>
<th>Color</th>
<th>Image</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($subjects as $sub)
<tr>
<td>{{$sub->id}}</td>
<td>{{$sub->name}}</td>
<td>{{$sub->medium}}</td>
<td>{{$sub->type}}</td>
<td>{{$sub->subject_code}}</td>
<td><div class="color-box" style="background:{{$sub->bg_color}};"></div></td>
<td><img src="/subject/{{$sub->image}}" width="40"></td>
<td>
<a href="/subject/edit/{{$sub->id}}" class="btn edit-btn">Edit</a>
<a href="/subject/delete/{{$sub->id}}" class="btn delete-btn">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>

</body>
</html>