<div id="ventanaCarrito" class="float">
    <div class="float-content">
        <span class="closeCarrito">&times;</span>
        
        <section class="lista">
            <ul id="list">
            </ul>
        </section>
        <form action="?action=comprar" method="POST">
            <input type="text" name="productes" id="inputArticulos" hidden>
            <input type="submit" value="Comprar" onclick="realizaCompra()">
        </form>
        
    </div>
</div>