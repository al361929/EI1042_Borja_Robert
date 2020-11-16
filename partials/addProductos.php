<!--**
 * * @title: EI1036_42 P1 
 * * @author  Robert <al375874@uji.es> Borja <al361929@uji.es>
 * * @copyright 2019 Robert Borja
 * * @license CC-BY-NC-SA
 * * -->
 <main>
    <div class="form-style-10">
	<form action="?action=registrarProducto" method="POST">
        <div class="section">Registrar producto</div>
        <div class="inner-wrap">
        <label for="name">Nombre del producto</label>
		<br/>
		<input id="nombre" type="text" name="name" class="item_requerid" size="20" maxlength="50" value=""
		 />
		<br/>
		<label for="name">Precio del producto</label>
		<br/>
		<input id="precio" type="text" name="price" class="item_requerid" size="20" maxlength="50" value=""
		 />
		<br/>
		<label for="Imagen">URL imagen</label>
		<br/>
		<input type="text" name="foto_url" class="item_requerid" size="20" maxlength="50" value=""
		 />
		
		<br/>
		<p><input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
		</div>
	</form>
	<button id="myBtn" type="upload" class="upload">Subir Foto</button>
	<input type="button" value="Carga datos" name="carga datos" class="subir" onclick="cargaDatos()">

	</div>
	<div id="ventanaFlotante" class="float">
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
</main>