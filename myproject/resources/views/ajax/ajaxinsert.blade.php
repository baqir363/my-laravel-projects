<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>
<body>

    <center>
        <div style="width: 30%" id="showmessage"></div>
    <form action="{{ url('ajaxinsert')}}" method="POST" id="addpost">
        @csrf
        <br><br>
        <div>
            <label for="">Title</label>
            <input type="text" name="title">
        </div>
        <br><br>
        <div>
            <label for="">Description</label>
            <input type="text" name="description">
        </div>
        <br><br>
        <div>
            <input type="submit" value="Add">
        </div>
    </form>
</center>

<script type="text/javascript">
    $(document).ready(function()
        {
            $('#addpost').on('submit', function(event)
                {
                    event.preventDefault();

                    jQuery.ajax({
                        url:"{{ url('ajaxinsert')}}",
                        data:jQuery('#addpost').serialize(),
                        type:'post',

                        success:function(result)
                        {
                            jQuery('#addpost')[0].reset();

                            alertMessage(result.message);
                        }
                    })
                });
        });
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
