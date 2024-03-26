<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
       
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/consultation') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="conteneurnav">
        <!-- <button class="newdemande">Nouvelle demande</button> -->
        <a href="#" class="profil" id="modif-p">
            <img src="images/US.png" alt="">
            <p class="nomuser">User</p>
        </a>
    </div>
    <div class="Conteneurg">
        <form method="POST" class="conteneurdemande" action="{{ route('AjoutReservation') }}">
        @method('POST')
          @csrf 
        <div class="selectchek">
              <div class="radio1">
                  <input type="radio" id="nat" name="destination" value="National"  />
                  <label for="nat" class="btnr">National</label>
              </div>
                <div>
                  <input type="radio" id="huey" name="destination" value="International" />
                  <label for="huey" class="btnr">International</label>
                </div>
            </div>
            <div class="combopays">
              <label for="">Pays</label>
              <select name="pays" id="contr" class="combopayschild">
                <option value="">... Seletionner un pays ...</option>           
            </select>
            </div>
            <div class="inputinfo">
              <div class="depart">
                  <div class="dvpasss">
                      <label for="">Départ</label>
                      <input type="text" name="VilleDep" id="" placeholder="Ville de départ">
                  </div>
                  <div class="dvpasss">
                      <label for="">Départ</label>
                      <input type="date" name="DateDep" id="">
                  </div>
              </div>
              <div class="depart">
                  <div class="dvpasss">
                      <label for="">Retour</label>
                      <input type="text" name="VilleRetour" id="" placeholder="Ville de retour">
                  </div>
                  <div class="dvpasss">
                      <label for="" >Retour</label>
                      <input type="date" name="DateRetour" id="">
                  </div>
              </div>
            </div>
            <div class="inputautres">
              <div class="mission">
                  <label for="">Obs.</label>
                  <textarea name="Observation" id="" ></textarea>
              </div>
              <button class="newdemande">Envoyer</button>
            </div>
</form>
      <div class="profilinfo">
        <div class="contentinfoprofil">
          @if(isset($coord))
            <label for="" class="Dir">Direction : {{ $coord->direction}}</label>
            <label for="" class="Dir">Nom : </label>
            <label for="" class="Dir">Prénom :</label>
            <label for="" class="Dir">N° Passport :{{ $coord->num_pass}}</label>
            <div class="validp">
                <label for="" class="Dir">Valide du :{{ $coord->date_sortie}}</label>
                <label for="" class="Dir">Au :{{ $coord->date_expire}}</label>
            </div>
            <label for="">N° Tel :{{ $coord->num_tel}}</label>
           @else
           erreur
           @endif 
        </div>
        <div class="nbrdemande">
             <h1 class="nbrenv" id="nb1" value="2">{{ $nbRes }}</h1>
             <h1>Envois/An</h1>
             <p>E-MAIL: com.admin@anesrif.dz <br>Chargé de la réservation :0660-66-66-66 <br> Plus d'information contactez : 0566-66-66-66 </p>
        </div>
      </div>
    </div>
    <div class="conteneurtable">
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
            <tbody>
              @foreach($Reservation as $rv)
                <tr>
                <td >{{$rv->destination}}</td>
                <td >{{$rv->villeDeprt}}</td>
                <td >{{$rv->date_Depart}}</td>
                <td >{{$rv->villeRetour}}</td>
                <td >{{$rv->date_Date}}</td>
                <td >{{$rv->observation}}</td>
              </tr>
             @endforeach
            </tbody>
        </table> 
        </div>
        <form method="POST" class="modif-user" id="pop-up" action="{{ route('AjoutCoord') }}">
          @method('POST')
          @csrf
          <div class="close" id="closepop"><img src="images/close.png" alt=""></div>
          <div class="conteneurlogin">
            <div class="dvpasss1">
              <label for="">Direction :</label>
              <select name="Direction" id="">
              <option value="01">.dir1 </option>
                <option value="02"> dir2</option>
              </select>
            </div>
            <div class="dvpasss1">
                <label for="">N° Passeport :</label>
                <input type="text" name="NPasseport" id="" placeholder="N° Passeport">
            </div>
            <div class="validite-pass">
              <div class="dvpasss12">
                <label for="">Valide du :</label>
                  <input type="date" name="ValideDu" id="" placeholder="">
              </div>
              <div class="dvpasss12">
                <label for="">Au :</label>
                  <input type="date" name="ValideAu" id="" placeholder="">
              </div>
            </div>
            <div class="dvpasss1">
              <label for="">Télephone :</label>
                <input type="text" name="Telephone" id="" placeholder="N° Telephone">
            </div>
          </div>
          <button type="submit" class="enregistrer">Enregistrer</button>
          </form>
        <div class="overl" id="overly"></div>
    </div>
        <script src="resources/js/main.js"></script>
    </body>
</html>
