<!--**
 * * @title: EI1036_42 P1 
 * * @author  Robert <al375874@uji.es> Borja <al361929@uji.es>
 * * @copyright 2019 Robert Borja
 * * @license CC-BY-NC-SA
 * * -->
 <main>
    <div class="form-style-10">
	<form action="?action=registrar" method="POST">
        <div class="section">Registro</div>
        	<div class="inner-wrap">
				<label for="name">Nombre</label>
				<br/>
				<input type="text" name="name" class="item_requerid" size="20" maxlength="50" value="" required
				/>
				<br/><label for="name">Email</label>
				<br/>
				<input type="text" name="email" class="item_requerid" size="20" maxlength="50" value="" required
				/>
				<br/>
				<label for="password">Contraseña</label>
				<br/>
				<input type="password" name="passwd" class="item_requerid" size="20" maxlength="50" value="" required
				/>
				<br/>
				<p><input type="submit" value="Enviar">
				<input type="reset" value="Deshacer">
			</div>
        </div>
	</form>
    </div>
</main>