<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Pantalla de Test de eventos</h1>

    <script src="js/app.js"></script>
    <script>

        window.onload = function() {

            Echo.channel('test_channel')
            .listen('PrintOrder', () => {
                window.print()
            });
        }


    </script>
</body>
</html>
