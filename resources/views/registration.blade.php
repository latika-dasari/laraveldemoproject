@extends('layouts.app')
@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Add User</h3>
            <a class="btn btn-mini btn-danger" style="float:right;margin-top:-22px;" href="{{url('user_list')}}">Cancel</a>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid" action="{{ url('addUser') }}" method="POST" enctype="multipart/form-data">
                @csrf    
                <div class="control-group">
                    <label class="control-label" for="basicinput">Name</label>
                    <div class="controls">                                                
                        <input class="span8 @error('name') is-invalid @enderror" type="text" name="name" id="basicinput" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="basicinput">Site Name</label>
                    <div class="controls">                                                
                        <input class="span8 @error('site_name') is-invalid @enderror" type="text" name="site_name" id="basicinput" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('site_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="basicinput">Email ID/Username</label>
                    <div class="controls">                                                
                        <input class="span8 @error('email') is-invalid @enderror" type="email" name="email" id="basicinput" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="basicinput">Password</label>
                    <div class="controls">
                        <input class="span8 @error('password') is-invalid @enderror" type="password" name="password" id="basicinput" required autocomplete="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                                    
                <div class="control-group">
                    <div class="controls">
                        <button type='submit' class='btn btn-primary pull-right' name='register' value='Register'>Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!--/.content-->
@endsection

@section('custom_js')
<script type="text/javascript">
    $(document).ready(function () {
        $("#country").on("change", function ()
        {    
            var cid = $(this).val();
            if (cid)
            {
                $.ajax({
                    url:'{{ url('/getStates') }}/' + cid,
                    async: false
                })
                .done(function (data) {
                    $("select#state").html(data);
                });
            }
        });

        $("#state").on("change", function ()
        {   
            var sid = $(this).val();
            if (sid)
            {
                $.ajax({
                    url: '{{ url('/getCities') }}/' + sid,
                    async: false
                })
                .done(function (data) {
                    $("select#city").html(data);
                });
            }
        });

        $(".add-row").on("click", function ()
        {
            var markup = `<tr><td><input type='text' name='institute_name[]' value="" style='width: 100px;'></td>
                              <td><input type='text' name='year[]' value="" style='width: 100px;'></td>
                              <td><input type='text' name='percentage[]' value="" style='width: 100px;'></td>
                              <td><a class='btn btn-mini btn-danger delete-row' href='javascript:;'>Delete</a></td></tr>`;
            $("table#academic tbody").append(markup);
        });

        $(document).on("click", ".delete-row", function ()
        {
            $(this).parent().parent().remove();
        });
    });
</script>
@endsection
