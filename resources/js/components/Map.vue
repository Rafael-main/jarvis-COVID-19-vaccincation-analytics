<template>
    <div class="container">
        <div id="map"></div>
    </div>
</template>

<script>
    import mapboxgl from 'mapbox-gl';
    import "mapbox-gl/dist/mapbox-gl.css";
    import {onMounted} from 'vue';

    export default {
        name: "Map",
        setup() {
            onMounted (() => {
                mapboxgl.accessToken = process.env.MIX_MAPBOX_APIKEY;
                const map = new mapboxgl.Map({
                    container: "map",
                    style: "mapbox://styles/mapbox/dark-v10"
                });
                map.on('load', () => {
                    
                });
                return {};  
            })
        }
    }
</script>

<style scoped>
#map{
    width: 100%;
    height: 500px;
}
</style>