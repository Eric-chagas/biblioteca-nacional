<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadastrosLivro $cadastrosLivro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cadastrosLivro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cadastrosLivro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cadastros Livros'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cadastrosLivros form large-9 medium-8 columns content">
    <?= $this->Form->create($cadastrosLivro) ?>
    <fieldset>
        <legend><?= __('Edit Cadastros Livro') ?></legend>
        <?php
            echo $this->Form->control('autor');
            echo $this->Form->control('editora');
            echo $this->Form->control('titulo_obra');
            echo $this->Form->control('data_cadastro', ['empty' => true]);
            echo $this->Form->control('valor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
