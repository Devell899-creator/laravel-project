<!DOCTYPE html>
<html>
<head>
<title>Edit Stream</title>

<style>
body{
    font-family: Arial;
    background: #f4f6f9;
    margin: 0;
    padding: 20px;
}

.card{
    background: white;
    padding: 25px;
    border-radius: 6px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    max-width: 600px;
    margin: auto;
}

h3{
    margin-bottom: 20px;
}

.row{
    display: flex;
    margin-bottom: 15px;
    align-items: center;
}

.label{
    width: 150px;
    font-weight: bold;
}

.input{
    flex: 1;
}

input[type=text], input[type=date]{
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.radio-group label{
    margin-right: 15px;
}

.btn{
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.update{
    background: #28a745;
    color: white;
}

.back{
    background: #6c757d;
    color: white;
    margin-left: 10px;
}
</style>

</head>

<body>

<div class="card">

<h3>Edit Stream</h3>

<form action="/stream/update/{{$stream->id}}" method="POST">
    @csrf

    <div class="row">
        <div class="label">Name</div>
        <div class="input">
            <input type="text" name="name" value="{{$stream->name}}" required>
        </div>
    </div>

    <div class="card-footer text-end">
      <button class="btn btn-success">Submit</button>
    </div>

</form>

</div>

</body>
</html>