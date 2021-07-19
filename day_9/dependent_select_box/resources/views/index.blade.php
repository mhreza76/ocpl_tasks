<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ajax dropdown</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
<div class="container">
    <section>
        <div class="card mt-3 ">
            <div class="card-header card_main font-weight-bold">Ajax dependent dropdown</div>
            <div class="card-body">
                <div class="offset-3 mt-4">
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <label for="title">Select Country:</label>
                        </div>

                        <div class="col-md-4">
                            <select class="custom-select" id="country" name="category_id" >
                                <option value="" selected disabled>Select</option>
                                @foreach($countries as $key => $country)
                                    <option value="{{$key}}"> {{$country}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-3">
                            <label for="title">Select State:</label>
                        </div>
                        <div class="col-md-4">
                            <select class="custom-select" name="state" id="state">
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-3">
                            <label for="title">Select City:</label>
                        </div>
                        <div class="col-md-4">
                            <select class="custom-select" name="city" id="city">
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<script type=text/javascript>
    $('#country').change(function () {
        var countryID = $(this).val();
        // console.log(countryID);
        if (countryID) {
            $.ajax({
                type: "GET",
                url: "{{url('get-state-list')}}?country_id=" + countryID,
                success: function (res) {
                    if (res) {
                        $("#state").empty();
                        $("#state").append('<option>Select</option>');
                        $.each(res, function (key, value) {
                            $("#state").append('<option value="' + key + '">' + value + '</option>');
                        });

                    } else {
                        $("#state").empty();
                    }
                }
            });
        } else {
            $("#state").empty();
            $("#city").empty();
        }
    });
    $('#state').on('change', function () {
        var stateID = $(this).val();
        if (stateID) {
            $.ajax({
                type: "GET",
                url: "{{url('get-city-list')}}?state_id=" + stateID,
                success: function (res) {
                    if (res) {
                        $("#city").empty();
                        $.each(res, function (key, value) {
                            $("#city").append('<option value="' + key + '">' + value + '</option>');
                        });

                    } else {
                        $("#city").empty();
                    }
                }
            });
        } else {
            $("#city").empty();
        }

    });
</script>
</body>
</html>
