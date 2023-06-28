<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <table border="5" cellpading="3">
            <tr>
                <td><a href="{{route('usuario')}}">USUARIOS</a></td>
                <td><a href="{{route('odontologo')}}">ODONTOLOGO</a></td>
                <td><a href="{{route('paciente')}}">PACIENTE</a></td>
                <td><a href="{{route('horario')}}">HORARIO ATENCION</a></td>
                <td><a href="{{route('cita')}}">CITA</a></td>
            </tr>
        </table>
    </nav>
</body>
</html>