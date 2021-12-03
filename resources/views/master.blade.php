<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerce BD</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
{{View::make('header')}}
@yield('content')
{{View::make('footer')}}
</body>
<style>
    .img.slider-img
    {
        height:200px !important;
    }

    .custom-login{
        height:512px;
        padding-top: 100px;

    }

    .custom-product{
        height:600px;
    }

    .slider-text{
        background-color:rgb(116, 184, 180) !important;
    }

    .trending-img{
        height:100px;
    }

    .trending-item{
        float: left;
        width:20%;
    }
    .trending-wrapper{
        margin: 20px;
    }
    .image_detail{

        height: 65%;
        width: 65%
    }
    .search_box{
        width:500px !important;
    }

    .cart-list-devider{
        border-bottom: 1px skyblue;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }


</style>


{{-- <script>
    $(document).ready(function(){
        $("button").click(function(){
            alert("all set")
        })

    })
</script> --}}
</html>
