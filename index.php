<!doctype html>
<html lang="pt-br">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

        <form>
        <input id=fornamn type=text><br>
        <input id=efternamn type=text><br>
        <input id=passnr type=text><br>
        <input id=nat type=text><br>
        <input type=button id=skicka value=Complete>
        </form>

        <script>
                //Enquanto todos os campos tipo TEXT não forem preenchidos, botão ficará desabilitado
                let d = document, [inputs, knapp] = [
                        d.querySelectorAll('[type="text"]'),
                        d.querySelector('#skicka')]
                    knapp.disabled = true

                    for (i = 0; i < inputs.length; i++) {
                    inputs[i].addEventListener('input',() => {
                        let values = []
                        inputs.forEach(v => values.push(v.value))
                        knapp.disabled = values.includes('')
                    })
                }
        </script>

    </body>
</html>