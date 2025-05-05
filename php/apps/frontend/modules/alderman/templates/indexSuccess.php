<!-- /modules/home/templates/listAldermansSuccess -->
<h1>Lista de Vereadores</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Partido</th>
            <th>Número de Votos</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($vereadores as $vereador): ?>
            <tr>
                <td><?php echo $vereador->getNome() ?></td>
                <td><?php echo $vereador->getTelefone() ?></td>
                <td><?php echo $vereador->getEmail() ?></td>
                <td><?php echo $vereador->getPartido() ?></td>
                <td><?php echo $vereador->getNumeroVotos() ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<br>

<a href="<?php echo url_for('@new_alderman') ?>">Novo Vereador</a>