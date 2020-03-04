<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emprestimo $emprestimo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Empréstimos') ?></li>
        <li><?= $this->Form->postLink(
                __('Encerrar empréstimo'),
                ['action' => 'delete', $emprestimo->id],
                ['confirm' => __('Tem certeza de que deseja encerrar o empréstimo # {0}?', $emprestimo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Empréstimos abertos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="emprestimos form large-9 medium-8 columns content">
    <?= $this->Form->create($emprestimo) ?>
    <fieldset>
        <legend><?= __('Editar dados do empréstimo') ?></legend>
        <?php
            echo $this->Form->control('Id do Cliente', ['options' => $clientes, 'empty' => true]);
            echo $this->Form->control('Id do Livro', ['options' => $cadastrosLivros, 'empty' => true]);
            echo $this->Form->control('data_emprestimo');
            echo $this->Form->control('duraçao (dias)');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Confirmar')) ?>
    <?= $this->Form->end() ?>
</div>
