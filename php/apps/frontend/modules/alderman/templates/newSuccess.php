<!-- /modules/home/templates/newAldermanSuccess.php -->


<h1>Criar Novo Vereador</h1>

<?php echo form_tag('/vereador') ?>
    <?php echo $form->renderHiddenFields() ?>
    <?php echo $form->renderGlobalErrors() ?>
    
    <div class="form-group">
        <?php echo $form['nome']->renderLabel() ?>
        <?php echo $form['nome']->render(array('class' => 'form-control', 'placeholder' => 'Nome do Vereador')) ?>
        <?php echo $form['nome']->renderError() ?>
    </div>
    
    <div class="form-group">
        <?php echo $form['telefone']->renderLabel() ?>
        <?php echo $form['telefone']->render(array('class' => 'form-control', 'placeholder' => 'Telefone')) ?>
        <?php echo $form['telefone']->renderError() ?>
    </div>
    
    <div class="form-group">
        <?php echo $form['email']->renderLabel() ?>
        <?php echo $form['email']->render(array('class' => 'form-control', 'placeholder' => 'Email')) ?>
        <?php echo $form['email']->renderError() ?>
    </div>
    
    <div class="form-group">
        <?php echo $form['id_partido']->renderLabel() ?>
        <?php echo $form['id_partido']->render(array('class' => 'form-control')) ?>
        <?php echo $form['id_partido']->renderError() ?>
    </div>
    
    <div class="form-group">
        <?php echo $form['numero_votos']->renderLabel() ?>
        <?php echo $form['numero_votos']->render(array('class' => 'form-control', 'placeholder' => 'Número de Votos')) ?>
        <?php echo $form['numero_votos']->renderError() ?>
    </div>
    
    <div class="form-group">
        <input type="submit" value="Salvar" class="btn btn-primary"/>
    </div> 
    
</form>

<style>
    .form-group {
        margin-bottom: 15px;
    }

    .form-control {
        width: 100%;
        padding: 8px;
        border-radius: 4px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    input[type="submit"].btn {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"].btn:hover {
        background-color: #0056b3;
    }

    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"], input[type="email"], select {
        width: 100%;
        margin: 5px 0 10px;
    }
</style>
