<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/create.css')}}">

        <!-- Fonts -->


        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="https://allfont.net/allfont.css?fonts=league-spartan" rel="stylesheet" type="text/css">


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
            <tr>
                <td style="vertical-align: top;">
                    <div class="info_area">
                        <h1>KNYGOMATAS</h1>
                        <p>

                                        Prieš užsakant knygas, prašome susipažinti
                            <br>

                                        su knygomatų naudojimosi instrukcija.
                            <br>
                            <br>
                                        Iš knygomatų galite pasiimti leidinius,
                            <br>
                                        užsakytus tik iš Kauno Miesto bibliotekos
                            <br>
                        </p>
                    </div>
                </td>
                <td>
                    <div class="register_form">
                        <table class="data_form">
                            <tbody>
                            <tr>
                                <td>
                                    <form action="{{route('knygomatas.store')}}" method="POST" class="signupForm" name="signupForm">
                                        @csrf
                                        <h1>Pildyti prašymą</h1>
                                        <ul class="noBullet">
                                            <li>
                                                <label for="reader_id"></label>
                                                <input type="text" class="inputFields" id="reader_id" name="reader_id"
                                                placeholder="Skaitytojo bilietas" value size="60px" oninput="return userNameValidation(this.value)" required>
                                            </li>
                                            <li>
                                            <label for="reader_phone"></label>
                                            <input type="text" class="inputFields" id="reader_phone_header"
                                                   name="reader_phone_header" placeholder="+370" value="+370"
                                                   width="4px" size="4px" required>
                                            <input type="text" class="inputFields" id="reader_phone" name="reader_phone" placeholder="Telefono numeris"
                                                   value size="48px"  required>
                                            </li>
                                            <div class="checkboxes">
                                            <li>
                                                <input type="checkbox" id="order_validation" name="order_validation"
                                                       value="order_validation" required>
                                                <label for="order_validation">
                                                    Patvirtinu, kad šį užsakymą pateikiu jau užsisakęs leidinius internetu.
                                                </label>

                                            </li>
                                                <br>

                                            <li>
                                                <input type="checkbox" id="rules_validation" name="rules_validation"
                                                value="rules_validation" required>
                                                <label for="rules_validation">
                                                    Susipažinau su naudojimosi biblioteka taisyklėmis,
                                                    <br>
                                                    pateikiau tikslius ir teisingus asmens duomenis,
                                                    <br>
                                                    esu informuotas apie jų tvarkymo tikslus bei sąlygas.
                                                    <a href="https://www.kaunas.mvb.lt/" target="_blank">Taisyklės</a>
                                                </label>
                                            </li>
                                            </div>
                                            <li id="center_btn">
                                                <input type="submit" id="join_btn" name="join" alt="Pateikti" value="Pateikti">
                                            </li>
                                        </ul>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </body>
</html>
