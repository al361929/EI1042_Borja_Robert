<div id="ventanaCarrito" class="float">
    <div class="float-content">
        <span class="close">&times;</span>
        <form class="form-foto" action="?action=upload" method="post" enctype="multipart/form-data">
            Selecciona	una	imagen:
            <input type="file" accept="image/*" name="file" id="file" onchange="handleFiles(event)">
            <br/><br/>
            <canvas id="canvas" class="canvas"></canvas>
            <br/><br/>
            <input type="submit" value="SUBIR" name="submit" class="subir" onclick="guardaDatos()">
        </form>
    </div>
</div>