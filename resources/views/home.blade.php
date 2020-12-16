<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Entreprise map location</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 1rem 2rem;
            }
            .gauche {
                display: inline-block;
            }

            .droite {
                display: inline-block;
                margin-left: 20px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h2>Liste Entreprise avec ses employés</h2>
                <div class="map" id="app">
                    <!-- map with entreprises goes here -->
                    <gmap-map
                        :center="mapCenter"
                        :zoom="10"
                        style="width: 100%; height: 440px;"
                        @click="handleMapClick"
                    >
                        <gmap-info-window
                            :options="infoWindowOptions"
                            :position="infoWindowPosition"
                            :opened="infoWindowOpened"
                            @closeclick="handleInfoWindowClose"
                        >
                        <div class="info-window">
                            <h3 v-text="activeentreprise.nom"></h3>

                            <ul v-for="(e, index) in employes">
                                <li v-text="e.nom"></li>
                            </ul>

                        </div>
                        </gmap-info-window>
                        <gmap-marker
                            v-for="(r, index) in entreprises"
                            :key="r.id"
                            :position="getPosition(r)"
                            :clickable="true"
                            :draggable="false"
                            @click="handleMarkerClicked(r)"
                        ></gmap-marker>
                    </gmap-map>
                </div>
            </div>
            <div class="content">
                <br>
                <h1>Partie administrateur</h1>
                <div class="gauche">
                    <a href="http://127.0.0.1:8000/entreprises" class="btn btn-primary">Gerer entreprises</a>
                </div>
                <div class="droite">
                    <a href="http://127.0.0.1:8000/employes" class="btn btn-danger">Gerer employés</a>
                </div>
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
