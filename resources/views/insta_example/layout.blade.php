<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InstaCopy</title>

    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" type="relsheet" />
</head>
<body >

    <div class="container">
    
        <!-- Navbar starts-->
        <div style="background-color:#828282;">
            <div class="" style="max-width: 1000px;margin: 0 auto; padding:0.5em 10em; align-items:center; display:flex; justify-content : space-between;">
                    <img height=35 src="https://img.freepik.com/free-vector/broken-frosted-glass-realistic-icon_1284-12125.jpg?size=338&ext=jpg&ga=GA1.2.1815208661.1598374895" height=100>
                    <div style="display: flex; flex-direction:row; justify-content:space-around; align-items:center; width:120px;"> 
                        <p>{{Auth::user()->username}}</p>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <button style="font-size:14px; color:#fff; border-style:none; background-color: #383838;border-radius:.5em;  height:35px;margin : auto 0; cursor: pointer;">
                                    Logout
                            </button>
                        </a> 
                    </div>
                       
            </div>
        </div>       

        <!-- Navbar ends-->

      
        @yield('content')
    
    </div>

</body>
</html>