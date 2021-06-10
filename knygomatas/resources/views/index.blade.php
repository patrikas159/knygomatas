<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->


    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://allfont.net/allfont.css?fonts=league-spartan" rel="stylesheet" type="text/css">
    <style>
        body{
            background: whitesmoke;
        }
        .data{
            margin:auto;
            width: 75%;
            padding: 10px;
        }
        .center_form{
            margin-left:auto;
            margin-right: auto;
        }
        .center_form h1{
            font-family: 'League Spartan Bold', Arial;
            font-size: 44px;
        }
        .header_logo img{
            display: block;
            margin-left:auto;
            margin-right: auto;
            width: 200px;
            height: 150px;
        }

        .data_form h1{
            font-size: 32px;
            color: whitesmoke;
            margin-top: 20px;
        }
        .data_form a{
            font-weight: 700;
            color: whitesmoke;
        }

        ::placeholder{
            color: #226437;
            opacity: 1;
        }
        .grizti{
            border: 1px solid #226437;
            background: #226437;
            font-size: 16px;
            color:  whitesmoke;
            margin-top: 20px;
            padding: 10px 50px;
            cursor: pointer;
        }
        a {
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px;
        }


        .checkboxes label {
            color: whitesmoke;
            display: block;
            padding-right: 10px;
            padding-left: 10px;
            text-indent: +10px;

        }
        .checkboxes input {


        }
        .checkboxes label span {
            vertical-align: middle;

        }

    </style>
    <script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js">

    </script>
</head>
<body>
<div class="data">
    <table class="center_form">
        <tbody>
        <tr>
            <td colspan="2">
                <div class="header_logo">
                    <img src="https://www.kaunas.mvb.lt/wp-content/uploads/2018/10/logotipas-didelis-png-2.png" alt="logo" width="280px" height="120px">
                    <br>
                    <br>
                </div>
            </td>
        </tr>

        </tbody>
    </table>
</div>

<center>
    <h1>Jūsų užsakymas priimtas!</h1>

        <a href="http://127.0.0.1:8000/" class="grizti">Grįžti</a>

</center>

{{-- JS --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>
