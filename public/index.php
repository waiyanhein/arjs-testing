<html>
<script src="https://aframe.io/releases/0.6.1/aframe.min.js"></script>
<script src="https://rawgit.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.5.0/aframe/build/aframe-ar.js"> </script>
<body style='margin : 0px; overflow: hidden;'>
<a-scene stats embedded arjs='trackingMethod: best;'>
    <a-marker preset="hiro">
        <a-box position='0 1 0' material='color: blue;'>
        </a-box>
    </a-marker>
    <a-entity camera></a-entity>
</a-scene>
</body>
</html>