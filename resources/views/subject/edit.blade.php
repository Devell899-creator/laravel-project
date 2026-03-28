<!DOCTYPE html>
<html>
<head>
<title>Edit Subject</title>

<style>

body{
font-family:Arial;
background:#f4f6f9;
margin:0;
padding:20px;
}

.card{
background:white;
padding:25px;
border-radius:6px;
box-shadow:0 2px 6px rgba(0,0,0,0.1);
}

h3{
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

input[type=text]{
width:100%;
padding:8px;
border:1px solid #ccc;
border-radius:4px;
}

.radio-group label{
margin-right:15px;
}

.btn{
padding:8px 16px;
border:none;
border-radius:4px;
cursor:pointer;
}

.update{
background:#28a745;
color:white;
}

.back{
background:#6c757d;
color:white;
margin-left:10px;
}

</style>

</head>

<body>

<div class="card">

<h3>Edit Subject</h3>

<form action="/subject/update/{{$subject->id}}" method="POST" enctype="multipart/form-data">

@csrf


<div class="row">

<div class="label">Medium</div>

<div class="input radio-group">

<label>
<input type="radio" name="medium" value="Arabic" {{$subject->medium=='Arabic'?'checked':''}}> Arabic
</label>

<label>
<input type="radio" name="medium" value="Chinese" {{$subject->medium=='Chinese'?'checked':''}}> Chinese
</label>

<label>
<input type="radio" name="medium" value="English" {{$subject->medium=='English'?'checked':''}}> English
</label>

</div>

</div>


<div class="row">

<div class="label">Name</div>

<div class="input">

<input type="text" name="name" value="{{$subject->name}}">

</div>

</div>


<div class="row">

<div class="label">Type</div>

<div class="input radio-group">

<label>
<input type="radio" name="type" value="Theory" {{$subject->type=='Theory'?'checked':''}}> Theory
</label>

<label>
<input type="radio" name="type" value="Practical" {{$subject->type=='Practical'?'checked':''}}> Practical
</label>

</div>

</div>


<div class="row">

<div class="label">Subject Code</div>

<div class="input">

<input type="text" name="subject_code" value="{{$subject->subject_code}}">

</div>

</div>


<div class="row">

<div class="label">Image</div>

<div class="input">

<input type="file" name="image">

<br><br>

<img src="/subjects/{{$subject->image}}" width="60">

</div>

</div>


<div style="text-align:right;margin-top:20px">

<button type="submit" class="btn update">Update</button>

<a href="/subjects" class="btn back">Back</a>

</div>

</form>

</div>

</body>
</html>