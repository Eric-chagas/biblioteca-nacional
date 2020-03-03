<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emprestimo $emprestimo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Empréstimos') ?></li>
        <li><?= $this->Html->link(__('Empréstimos abertos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Clientes cadastrados'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Livros cadastrados'), ['controller' => 'CadastrosLivros', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="emprestimos form large-9 medium-8 columns content">
    <?= $this->Form->create($emprestimo) ?>
    <fieldset>
        <legend><?= __('Abrir pedido de empréstimo') ?></legend>
        <?php
            echo $this->Form->control('Id do Cliente', ['options' => $clientes, 'empty' => true]);
            echo $this->Form->control('Id do Livro', ['options' => $cadastrosLivros, 'empty' => true]);
            echo $this->Form->control('data_emprestimo');
            echo $this->Form->control('duracao (dias)');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
