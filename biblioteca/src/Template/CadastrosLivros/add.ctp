<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadastrosLivro $cadastrosLivro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Livros') ?></li>
        <li><?= $this->Html->link(__('Livros cadastrados'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cadastrosLivros form large-9 medium-8 columns content">
    <?= $this->Form->create($cadastrosLivro) ?>
    <fieldset>
        <legend><?= __('Cadastrar um novo livro') ?></legend>
        <?php
            echo $this->Form->control('Autor');
            echo $this->Form->control('Editora');
            echo $this->Form->control('Título da obra');
            echo $this->Form->control('data_cadastro', ['empty' => true]);
            echo $this->Form->control('Valor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
    <?= $this->Form->end() ?>
</div>
