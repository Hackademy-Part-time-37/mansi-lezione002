<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Primo Progetto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Aulab</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link " aria-current="page" href="{{ route('homepage') }}">Home</a>
                    <a class="nav-link" href="{{ route('chisono') }}">Chi sono</a>
                    <a class="nav-link" href="{{ route('servizi') }}">Servizi</a>
                </div>
            </div>
        </div>
    </nav>

    <h1>I miei servizi</h1>
    {{-- $servizi = ['marketing', 'web', 'ecommerce'];
    foreach($servizi as $servizio){
    echo $servizio;
    } --}}

    <div class="album py-5 bg-body-tertiary">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($servizi as $servizio)
                    <div class="col">
                        <div class="card shadow-sm">

                            <img class="bd-placeholder-img card-img-top" src="{{ $servizio['img'] }}" />
                            <div class="card-body">
                                <h2>{{ $servizio['name'] }}</h2>
                                <p class="card-text">Tempo: {{ $servizio['tempo_di_realizzazione'] }}</p>
                                <p class="card-text">Costo: {{ $servizio['costo'] }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('servizio', ['service' => $servizio['uri']]) }}"
                                            type="button" class="btn btn-sm btn-outline-secondary">Vedi
                                            Servizio</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
