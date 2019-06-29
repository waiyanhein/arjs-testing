<html>
<script src="https://aframe.io/releases/0.6.1/aframe.min.js"></script>
<script src="https://rawgit.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.5.0/aframe/build/aframe-ar.js"> </script>
<script src="https://rawgit.com/rdub80/aframe-gui/master/dist/aframe-gui.min.js"></script>
<body style='margin : 0px; overflow: hidden;'>
<a-scene stats embedded arjs='trackingMethod: best;'>
    <a-marker preset="hiro">
<!--        <a-box position='0 1 0' material='color: blue;' rotation="45 90 180">-->
<!--        </a-box>-->
        <a-gui-button
                width="2.5" height="0.75"
                onclick="alert('I am here')" key-code="32"
                value="test button"
                font-family="Arial"
                margin="0 0 0.05 0"
                rotation="280 0 0"
        >
        </a-gui-button>
    </a-marker>
    <a-entity camera></a-entity>
</a-scene>
</body>
</html>