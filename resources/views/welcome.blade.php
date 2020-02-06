<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script type='text/javascript'>
        function display_c(){
            var refresh=1000; // Refresh rate in milli seconds
            mytime=setTimeout('display_ct()',refresh)
            }

            function display_ct() {
            var x = new Date()
            document.getElementById('ct').innerHTML = x;
            display_c();
            }
    </script>
</head>

<body onload=display_ct();>
<span id='ct' ></span>
    <!-- Styles -->
    <style>
    .button {
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .clockIn {
        background-color: #008CBA;
    }

    .start {
        background-color: #4CAF50;
    }

    .end {
        background-color: #f44336;
    }

    .break {
        background-color: #e7e7e7;
        color: black;
    }

    .clockOut {
        background-color: #555555;
    }
    </style>
</head>

<body>
    <div>
        <select>
        @foreach ($name as $names)
            <option>{{ $names-> name }}</option>
        @endforeach
        </select>
    <div>
        <button class="button clockIn">CLOCK IN</button><input>
        
        <br><br>
        <button class="button start">START</button>
        <br>
        <button class="button end">END</button>
        <br><br>
        <button class="button break">TAKE ANOTHER BREAK</button>
        <br>
        <button class="button clockOut">CLOCK OUT</button>
    </div>
    <div>
        <p> TOTAL TIME WORKED:</p>
        <p> HOURS LEFT BEFORE:</p>
        <p> TOTAL BREAKS USED:</p>
    </div>
</body>

</html>