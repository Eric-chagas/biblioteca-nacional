<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emprestimo[]|\Cake\Collection\CollectionInterface $emprestimos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Empréstimos') ?></li>
        <li><?= $this->Html->link(__('Abrir pedido de empréstimo'), ['action' => 'add']) ?></li>
        <li class="heading"><?= __('Clientes') ?></li>
        <li><?= $this->Html->link(__('Clientes cadastrados'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Cadastrar cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li class="heading"><?= __('Livros') ?></li>
        <li><?= $this->Html->link(__('Livros cadastrados'), ['controller' => 'CadastrosLivros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Cadastrar um novo Livro'), ['controller' => 'CadastrosLivros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="emprestimos index large-9 medium-8 columns content">
    <h3><?= __('Empréstimos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Id do Cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Id do Livro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data do empréstimo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duração (dias)') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emprestimos as $emprestimo): ?>
            <tr>
                <td><?= $this->Number->format($emprestimo->id) ?></td>
                <td><?= $emprestimo->has('cliente') ? $this->Html->link($emprestimo->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $emprestimo->cliente->id]) : '' ?></td>
                <td><?= $emprestimo->has('cadastros_livro') ? $this->Html->link($emprestimo->cadastros_livro->id, ['controller' => 'CadastrosLivros', 'action' => 'view', $emprestimo->cadastros_livro->id]) : '' ?></td>
                <td><?= h($emprestimo->data_emprestimo) ?></td>
                <td><?= $this->Number->format($emprestimo->duracao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $emprestimo->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $emprestimo->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $emprestimo->id], ['confirm' => __('Tem certeza de que deseja encerrar o empréstimo # {0}?', $emprestimo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
            <?= $this->Paginator->last(__('Última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}} <br> Mostrando {{current}} resultados de {{count}} total')]) ?></p>
    </div>
</div>
