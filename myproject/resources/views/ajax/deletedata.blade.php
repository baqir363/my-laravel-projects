<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Data</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 60%;
        }
        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        #customers tr:hover {background-color: #ddd;}
        #customers th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body>
    <center>
        <div style="width: 30%" id="showmessage"></div>
        <table id="customers" class="table table-striped w-50">
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach ($posts as $post)
                <tr id="tr_{{ $post->id }}">
                    <td>{{ $post->title}}</td>
                    <td><img src="/filefolder/{{ $post->image}}" width="200px" height="200px"></td>
                    <td><a href="javascript:void(0)" onclick="deletepost({{ $post->id}})" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </center>
    <script type="text/javascript">
        function deletepost(id)
        {
            if(confirm("Are you sure to delete this?"))
            {
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url:'delete_post/'+id,
                    type:'DELETE',

                    success:function(result)
                    {
                        $("#"+result['tr']).slideUp("slow");
                        alertMessage(result.message);
                    }
                });
            }
        }
    </script>


<script type="text/javascript">
    function alertMessage(message)
    {
        $('#showmessage').html(
            '<div class="alert alert-primary" role="alert">'
            +
            message
            +
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'

            +
            '</div>'
        )
    }
</script>
</body>
</html>
