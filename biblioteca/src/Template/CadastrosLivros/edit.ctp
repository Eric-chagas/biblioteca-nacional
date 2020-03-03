<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadastrosLivro $cadastrosLivro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Form->postLink(
                __('Apagar'),
                ['action' => 'delete', $cadastrosLivro->id],
                ['confirm' => __('Tem certeza de que deseja apagar # {0}?', $cadastrosLivro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Livros cadastrados'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cadastrosLivros form large-9 medium-8 columns content">
    <?= $this->Form->create($cadastrosLivro) ?>
    <fieldset>
        <legend><?= __('Editar') ?></legend>
        <?php
            echo $this->Form->control('autor');
            echo $this->Form->control('editora');
            echo $this->Form->control('titulo_obra');
            echo $this->Form->control('data_cadastro', ['empty' => true]);
            echo $this->Form->control('valor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Confirmar')) ?>
    <?= $this->Form->end() ?>
</div>
