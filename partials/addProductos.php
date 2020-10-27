<!--**
 * * @title: EI1036_42 P1 
 * * @author  Robert <al375874@uji.es> Borja <al361929@uji.es>
 * * @copyright 2019 Robert Borja
 * * @license CC-BY-NC-SA
 * * -->
 <main>
    <div class="form-style-10">
	<form action="?action=registrarProducto" method="POST">

        <div class="section"><span>1</span>Registrar producto</div>
        <div class="inner-wrap">
        <label for="name">Nombre del producto</label>
		<br/>
		<input type="text" name="name" class="item_requerid" size="20" maxlength="50" value=""
		 />
		<br/>
		<label for="name">Precio del producto</label>
		<br/>
		<input type="text" name="price" class="item_requerid" size="20" maxlength="50" value=""
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
    </div>
</main>