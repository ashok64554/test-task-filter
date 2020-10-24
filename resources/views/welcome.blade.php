<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Logo') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>

    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <nav class="navbar navbar-default navbar-static-top">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                Logo
                            </a>
                        </div>

                        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                            <!-- Left Side Of Navbar -->
                            <ul class="nav navbar-nav">
                                &nbsp;
                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="nav navbar-nav navbar-right">
                                <!-- Authentication Links -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}">{{ __('About Us') }}</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="panel-body">
                        <div class="col-md-10 col-md-offset-1">
                            <h2 style="font-weight: bold;">Items Management Page</h2>
                            
                            <div class="text-center">
                                <div id="success" style="color:green;font-size: 20px;font-weight: bold;"></div>
                                <div id="error" style="color:red;font-size: 20px;font-weight: bold;"></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-5">
                                    <form id="add_list_a" method="post">
                                        <input id="token" type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="name_a" name="name_a" />
                                            </div>
                                            <div class="col-sm-2" style="margin-left: -20px;margin-top:3px; ">
                                                <button type="submit" >Add</button>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <select class="form-control" id="lista" size="8" multiple>
                                        @forelse(App\ListA::all() as $lista)
                                        <option value="{{$lista->name}}">{{$lista->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-sm-1">
                                    <br><br><br><br>
                                    <input type="button" id="btnLeft" value="&lt;" />
                                    <input type="button" id="btnRight" value="&gt;" />
                                </div>
                                <div class="col-sm-5">
                                    <p style="font-weight: bold;font-size: 25px;">Selected Items</p>
                                    <select class="form-control" id="listb" size="8" multiple>
                                        @forelse(App\ListB::all() as $listb)
                                        <option value="{{$listb->name}}">{{$listb->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        $("#btnLeft").click(function () {
            $('#error').html('')
            $('#success').html('')
            $('#add_list_a')[0].reset();
            var name_b = $('#listb').val()
            $.ajax({
                type: "get",
                url: '/add-list-a/'+name_b,
                success: function( response ) {
                    if( response.msg ){
                        var selectedItem = $("#listb option:selected");
                        $("#lista").append(selectedItem);
                        $('#success').text(response.msg);
                    }
                    if( response.msg1 ){
                        $('#error').text(response.msg1);
                    }
                },
                error: function(data)
                {
                    console.log(data)
                }
            });
        });

        $("#btnRight").click(function () {
            $('#error').html('')
            $('#success').html('')
            $('#add_list_a')[0].reset();
            var name_a = $('#lista').val()
            $.ajax({
                type: "get",
                url: '/add-list-b/'+name_a,
                success: function( response ) {
                    if( response.msg ){
                        var selectedItem = $("#lista option:selected");
                        $("#listb").append(selectedItem);
                        $('#success').text(response.msg);
                    }
                    if( response.msg1 ){
                        $('#error').text(response.msg1);
                    }
                },
                error: function(data)
                {
                    console.log(data)
                }
            });
        });


        $('#add_list_a').on('submit', function(e) {
            e.preventDefault();
            $('#error').html('')
            $('#success').html('')
            var name_a = $('#name_a').val();
            var token = $('#token').val();
            $.ajax({
                type: "POST",
                url: '/add-list-a/',
                data: $('#add_list_a').serialize(),
                success: function( response ) {
                    if( response.msg ){
                        $('#add_list_a')[0].reset(); 
                        $('#lista').append('<option value="'+response.name+'">'+response.name+'</option>');
                        $('#success').text(response.msg);
                    }
                    if( response.msg1 ){
                        $('#error').text(response.msg1);
                    }
                },
                error: function(data)
                {
                    console.log(data)
                }
            });
        });
    </script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
