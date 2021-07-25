@extends('layout.app')  
    @section('content')  
    <form method="post" action="{{ route('users.store') }}">  
       @csrf     
              <div class="form-group">      
                  <label for="first_name">Name:</label><br/><br/>  
                  <input type="text" class="form-control" name="name"/><br/><br/>  
              </div>  
    <div class="form-group">      
    <label for="first_name">Site Name:</label><br/><br/>  
                  <input type="text" class="form-control" name="site_name"/><br/><br/>  
              </div> 
              <div class="form-group">      
    <label for="first_name">Email:</label><br/><br/>  
                  <input type="email" class="form-control" name="email"/><br/><br/>  
              </div>  
              <div class="form-group">      
    <label for="first_name">Password:</label><br/><br/>  
                  <input type="password" class="form-control" name="password"/><br/><br/>  
              </div>  
    <br/>  
    <button type="submit" class="btn-btn" >Insert</button>  
    </form>  
    @endsection  