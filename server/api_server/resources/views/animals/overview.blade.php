<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Dieren</title>
        <meta http-equiv="Refresh" content="2">
    </head>
    <body>
        <div class="container">
            <h1>Dieren</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Naam</th>
                    <th>Type</th>
                    <th>Dierentuin</th>
                </tr>
                </thead>
                <tbody>
                @foreach($objects as $object)
                    <tr>
                        <td>{{$object->name}} ({{$object->id}})</td>
                        <td>{{$object->animalType->name}} ({{$object->animalType->id}})</td>
                        <td>{{$object->zoo->name}} ({{$object->zoo->id}})</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>

