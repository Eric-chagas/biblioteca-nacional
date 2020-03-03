<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Clientes') ?></li>
        <li><?= $this->Form->postLink(
                __('Apagar'),
                ['action' => 'delete', $cliente->id],
                ['confirm' => __('Tem certeza de que deseja apagar # {0}?', $cliente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Clientes cadastrados'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="clientes form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= __('Editar') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('telefone');
            echo $this->Form->control('email');
            echo $this->Form->control('CPF');
            echo $this->Form->control('nascimento', ['empty' => true]);
            echo $this->Form->control('endereço');
            echo $this->Form->control('obs');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Confirmar')) ?>
    <?= $this->Form->end() ?>
</div>
