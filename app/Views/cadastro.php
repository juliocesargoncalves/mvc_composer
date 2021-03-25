<div class="row container">
    <div class="col s12">
        <h3 class="light">Pagina de Cadastro</h3>
     </div>
    
     <div class="col s12">
        <form action="?router=Site/add/" method="post">
            <div class="input-field col s12 m4">
                <input type="text" name="nome" id="nome" required>
                <label for="nome">Digite seu nome :</label>
            </div>

            <div class="input-field col s12 m4">
                <input type="email" name="email" id="email" required>
                <label for="email">Digite seu email :</label>
            </div>

            <div class="input-field col s12 m4">
                <input type="tel" name="telefone" id="telefone" required>
                <label for="telefone">Digite seu telefone :</label>
            </div>
            
            <div class="input-filed col s12">
                <input type="submit" value="Enviar" class="btn-small blue">
                <input type="reset" value="Limpar" class="btn-small red">
            </div>
        </form>
     </div>


</div>

