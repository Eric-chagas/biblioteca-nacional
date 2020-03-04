<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emprestimo $emprestimo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Empréstimos') ?></li>
        <li><?= $this->Html->link(__('Editar dados do empréstimo'), ['action' => 'edit', $emprestimo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Encerrar empréstimo'), ['action' => 'delete', $emprestimo->id], ['confirm' => __('Tem certeza de que deseja encerrar o empréstimo # {0}?', $emprestimo->id)]) ?> </li>
        <li><?= $this->Html->link(__('Empréstimos abertos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Abrir pedido de empréstimo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="emprestimos view large-9 medium-8 columns content">
    <h3><?= h($emprestimo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id do Cliente') ?></th>
            <td><?= $emprestimo->has('cliente') ? $this->Html->link($emprestimo->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $emprestimo->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id do Livro') ?></th>
            <td><?= $emprestimo->has('cadastros_livro') ? $this->Html->link($emprestimo->cadastros_livro->id, ['controller' => 'CadastrosLivros', 'action' => 'view', $emprestimo->cadastros_livro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id do Empréstimo') ?></th>
            <td><?= $this->Number->format($emprestimo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duração (dias)') ?></th>
            <td><?= $this->Number->format($emprestimo->duracao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data do empréstimo') ?></th>
            <td><?= h($emprestimo->data_emprestimo) ?></td>
        </tr>
    </table>
</div>
