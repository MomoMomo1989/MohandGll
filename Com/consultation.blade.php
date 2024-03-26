<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="consultation.css">
   <title>Consultation</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="content-info">
        <div class="tb-recept">
            <table>
                <thead>
                    <tr>
                        <th>Demandeur</th>
                        <th>Direction</th>
                        <th>Date réception</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($demande as $dm)
                    <tr>
                    <td >{{$dm->user_id}}</td>
                    <td >{{$dm->villeDeprt}}</td>
                    <td >{{$dm->created_at}}</td>
                    </tr>
                    @endforeach
                     
                </tbody>
            </table>
        </div>
        <div class="recpt">
            <div class="nbr-rec" id="11"><h1>{{ $nbrAnnee }}</h1></div>
            <div class="titre-ann"><p>Réception annuelle</p></div>
            <div class="tous"><p>Les biellets reçu par toutes le directions</p></div>
        </div>
        <div class="recpt">
            <div class="nbr-rec" id="nb21"><h1>{{ $nbrAnnee }}</h1></div>
            <div class="titre-ann"><p>Réception monsuelle</p></div>
            <div class="tous"><p>Les biellets reçu par toutes le directions</p></div>
        </div>
        <div class="recpt">
            <div class="nbr-rec" id="nb31"><h1>1</h1></div>
            <div class="titre-ann"><p>Réception journaliere</p></div>
            <div class="tous"><p>Les biellets reçu par toutes le directions</p></div>
        </div>
    </div>
    <div class="tbl-plus-info">
        <table class="tbhistoriqueb">
            <thead>
                <tr>
                    <th>Déstination</th>
                    <th>Départ de.</th>
                    <th>Date de départ</th>
                    <th>Retour de.</th>
                    <th>Date de retour</th>
                    <th>Observation</th>
                  </tr>
            </thead>
            <tbody class="tbl2">
            </tbody>
        </table>
    </div>
    <script src="resources/js/main.js"></script>
</body>
</html>