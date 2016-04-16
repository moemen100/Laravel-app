@extends('Layout.master')
@section('title')
Welcome

@endsection
@section('content')

<div class="row">
    <div class="col-md-5" >
<h3>Sign in </h3>
        <form action ="#" method="post">
        <div class="form-group">
        <label for="email"> Your email </label>
        	<input class="form-control" type="email" name="email" id="email" >
        	</div>
        	<div class="form-group">
        <label for="pass"> Your password </label>
        	<input class="form-control" type="password" name="pass" id="pass" >
        	</div>
        	<button type="submit" class="btn btn-primary">Sign in</button>
        	</form>
        </div>
    <div class="col-md-6">
      <h3>Sign up </h3>
        <form action ="#" method="post">
        <div class="form-group">
        <label for="email"> Your email</label>
        	<input class="form-control" type="email" name="email" id="email" >
        	</div>
        	<div class="form-group">
        <label for="first_name"> Your first name </label>
        	<input class="form-control" type="text" name="first_name" id="first_name" >
        	</div>
        	<div class="form-group">
        <label for="pass" >Your password </label>
        	<input class="form-control" type="password" name="pass" id="pass" >
        	</div>
        	<button type="submit" class="btn btn-primary">Sign up</button>
        	</form>
        </div>
        </div>

@endsection
