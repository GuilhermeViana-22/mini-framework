<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{BASE}}vendor/bootstrap/bootstrap.min.css" />
    <title>
    {% block title%} Meu mini-framework {%endblock%}
    </title>
</head>
<body>
    {% include 'partials/header.twig.php' %}
    
    {% block body %}  {%  endblock %}
</body>
</html>         