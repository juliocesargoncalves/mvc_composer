<div class="row container">
    <div class="col s12">
        <h3 class="light">Pagina de Consulta</h3>
        <div class="col s12">



      <table>
        <thead>
          <tr>
              <th>Name</th>
              <th>E-mail</th>
              <th>Telefone</th>
          </tr>
        </thead>

        <tbody>
        <?php foreach($consulta as $valor) :?>
            <tr>
                <td><?= $valor['name'];?></td>
                <td><?= $valor['email'];?></td>
                <td><?= $valor['telefone'];?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
      </table>
            


        </div>
    </div>
</div>
