<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <style type="text/css">
        body,td,th{
            color: #000000;
        }
        body{
            background-color: #F0F0F0;
        }
        .style1
        {
            font-family: arial, helvetica, sans-serif;
            font-size: 14px;
            padding: 12px;
            line-height: 25px;
            border-radius: 4px;
            text-decoration: none;
        }

        .style2
        {
            font-family: arial, helvetica, sans-serif;
            font-size: 17px;
            padding: 12px;
            line-height: 25px;
            border-radius: 4px;
            text-decoration: none;

        }
    </style>
</head>

<body>

<div>
    <div id="err" style="color: red"> </div>  
    <form name="frm_login" id="frm_login">
    @csrf
        <input type="text"  size="10px" id="username" placeholder="Username" name="username">
        <input type="password" size="10px" id="password" placeholder="password" name="password">
        <button type="button" class="btn btn-primary" onclick="login()">Sign In</button>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script>

    function login()
    {
        if($('#username').val() == "")
        {
            $('#username').addClass('has-error');
            return false;
        }
        else if($('#password').val() == "")
        {
            $('#password').addClass('has-error');
            return false;
        }
        
        var data = $("#frm_login").serialize();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
                type : 'POST',
                url: '{{route('login_page.check')}}',
                data : data,
            success : function(response)
            {
                console.log(response);
                if(response == 1)
                {
                  window.location.replace('{{route('test.index')}}');
                }
                else if(response == 3)
                {
                    $("#err").hide().html("Username or Password  Incorrect. Please Check").fadeIn('slow');
                }
            }
        });
    }

</script>

</body>


</html>