require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

import * as VueGoogleMaps from 'vue2-google-maps';

Vue.use(VueGoogleMaps, {
    load: {
        key: 'AIzaSyDsHDiYqFJ-uPwf542nHzvOyhqHyCdX544'
    }
});
var idEnt = 2;
const app = new Vue({
    el: '#app',
    data() {
        return {
            entreprises: [],
            employes: [],
            infoWindowOptions: {
                pixelOffset: {
                    width: 0,
                    height: -35
                }
            },
            activeentreprise: {},
            infoWindowOpened: false
        }
    },
    created() {
        axios.get('/api/entreprises')
            .then((response) => {
                this.entreprises = response.data;
            })
            .catch((error) => console.error(error));
    },
    methods: {
        getPosition(r) {
            return {
                lat: parseFloat(r.lat),
                lng: parseFloat(r.lon)
            }
        },
        handleMarkerClicked(r) {
            this.activeentreprise = r;
            idEnt = r.id;
            this.infoWindowOpened = true;
            axios.get('/api/employes/'+idEnt)
            .then((response) => {
                if(this.employes!=null){
                    this.employes = response.data;
                }
            })
            .catch((error) => console.error(error));
        },
        handleInfoWindowClose() {
            this.activeentreprise = {};
            this.infoWindowOpened = false;
        },
        handleMapClick(e) {
            this.entreprises.push({
                nom: "Placeholder",
                adresse: "00:00am-00:00pm",
                tel: "08080808",
                latitude: e.latLng.lat(),
                longitude: e.latLng.lng()
            });
        }
    },
    computed: {
        mapCenter() {
            if (!this.entreprises.length) {
                return {
                    lat: 50,
                    lng: 13
                };
            }

            return {
                lat: parseFloat(this.entreprises[0].lat),
                lng: parseFloat(this.entreprises[0].lon)
            };
        },
        infoWindowPosition() {
            return {
                lat: parseFloat(this.activeentreprise.lat),
                lng: parseFloat(this.activeentreprise.lon)
            };
        },
    }
});
