<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Marathon du Web 2020- IUT de Lens</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <!-- http://usewing.ml -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
</head>

<body>
    <div class="container">
        @if(!empty($data))
            <div class="row">
                @foreach($data as $s)
                    <div class="col-lg-3 col-md-4 col-sm-12 mx-auto my-3">
                        <div class="card shadow-sm">
                            @if(!empty($s->url_media))
                            <img src={{$s->url_media}} alt="" class="card-img-top">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title text-center">{{$s->nom}}</h5>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item">{{$s->theme->nom}}</li>
                                    @if(!empty($s->duree))
                                        <li class="list-group-item">{{$s->duree}} minutes</li>
                                    @endif
                                    @if(!empty($s->nombre_joueurs))
                                        <li class="list-group-item">{{$s->nombre_joueurs}} joueurs</li>
                                    @endif
                                    <li class="list-group-item"><a href="#" class="btn btn-outline-primary">Voir le jeu</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
