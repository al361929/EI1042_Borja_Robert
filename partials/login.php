<!--**
 * * @title: EI1036_42 P1 
 * * @author  Robert <al375874@uji.es> Borja <al361929@uji.es>
 * * @copyright 2019 Robert Borja
 * * @license CC-BY-NC-SA
 * * -->
 <main>
 	<div class="form-style-10">
	<form action="./portal.php?action=do_login" method="POST">
		<fieldset>
			<div class="section"><span>1</span>Login</div>
			<div class="inner-wrap">
			<label for="nombre">Nombre</label>
			<br/>
			<input type="text" name="name" class="item_requerid" size="20" maxlength="25" required/>
			<br/>
			<label for="client_id">Contraseña</label>
			<br/>
			<input type="password"  name="passwd"  class="item_requerid" size="20" required/>
			<br/>
		</fieldset>
		<p>
		<input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
		</div>
	</form>
	</div>
</main>