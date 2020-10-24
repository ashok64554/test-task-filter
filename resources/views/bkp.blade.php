<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        SELECT, INPUT[type="text"] {
            width: 160px;
            box-sizing: border-box;
        }
        SECTION {
            padding: 8px;
            background-color: #f0f0f0;
            overflow: auto;
        }
        SECTION > DIV {
            float: left;
            padding: 4px;
        }
        
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">

        <div class="content">
            <section class="container">
                <div>
                    <div id="success" style="color:green"></div>
                    <div id="error" style="color:red"></div>
                    <form id="add_list_a" method="post">
                        <input id="token" type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="text" id="name_a" name="name_a" /><button type="submit" >Add</button>
                    </form>
                </div>
                <div>
                    <select id="lista" size="5" multiple>
                        @forelse(App\ListA::all() as $lista)
                        <option value="{{$lista->name}}">{{$lista->name}}</option>
                        @empty
                        @endforelse
                    </select>
                </div>
                <div>
                    <input type="button" id="btnLeft" value="&lt;" />
                    <input type="button" id="btnRight" value="&gt;" />
                </div>
                <div>
                    <select id="listb" size="4" multiple>
                        @forelse(App\ListB::all() as $listb)
                        <option value="{{$listb->name}}">{{$listb->name}}</option>
                        @empty
                        @endforelse
                    </select>
                </div>
            </section>
        </div>
    </div>
    <script type="text/javascript">
        $("#btnLeft").click(function () {
            var name_a = $('#listb').val()
            var selectedItem = $("#listb option:selected");
            $("#lista").append(selectedItem);
           
        });

        $("#btnRight").click(function () {
            var name_a = $('#lista').val()
            alert(name_a)
            $.ajax({
                type: "get",
                url: '/add-list-b/'+name_a,
                success: function( response ) {
                    if( response.msg ){
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



        $("#listb").change(function () {
            var selectedItem = $("#listb option:selected");
            $("#txtRight").val(selectedItem.text());
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
</body>
</html>
