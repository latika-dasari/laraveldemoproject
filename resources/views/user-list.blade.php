@extends('layouts.app')
@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>List Users</h3>
            <a class="btn btn-mini btn-success" style="float:right;margin-top:-22px;" href="{{url('register')}}">Add User</a>
        </div>
        <div class="module-body">                                    
            <table id="users_listing" class='table table-striped'>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Site Name</th>
                    <th>Email Id/User Name</th>                         
                    <th>Action</th>
                </tr>  
                 @foreach ($users as $user)
                <tr>                        
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->site_name }}</td>
                    <td>{{ $user->email }}</td>                                                                                         
                    <td><a class="btn btn-mini btn-success" href="{{url('editUser/'.$user->id)}}">Edit</a>
                    <a class="btn btn-mini btn-danger" href="{{url('deleteUser/'.$user->id)}}"> Delete</a></td>
                </tr>                  
                @endforeach 
            </table>                                    		                                                                  
        </div>
    </div>
</div><!--/.content-->
@endsection
@section('custom_js')
<script src="{{ asset('https://code.jquery.com/jquery-2.2.4.min.js') }}"integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>

@endsection

