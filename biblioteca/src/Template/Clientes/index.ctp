<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $clientes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Clientes') ?></li>
        <li><?= $this->Html->link(__('Cadastrar cliente'), ['action' => 'add']) ?></li>
        <li class="heading"><?= __('Livros') ?></li>
        <li><a href="cadastros-livros/add">Cadastrar um Livro</a></li>
        <li class="heading"><?= __('Empréstimos') ?></li>
        <li><a href="emprestimos/index">Empréstimos abertos</a></li>
    </ul>
</nav>
<div class="clientes index large-9 medium-8 columns content">
    <h3><?= __('Clientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nascimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereço') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $this->Number->format($cliente->id) ?></td>
                <td><?= h($cliente->nome) ?></td>
                <td><?= h($cliente->telefone) ?></td>
                <td><?= h($cliente->email) ?></td>
                <td><?= h($cliente->cpf) ?></td>
                <td><?= h($cliente->nascimento) ?></td>
                <td><?= h($cliente->endereco) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $cliente->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cliente->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $cliente->id], ['confirm' => __('Tem certeza de que deseja apagar # {0}?', $cliente->id)]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}} <br> Mostrando {{current}} resultados de {{count}} total')]) ?></p>
    </div>
</div>
