<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadastrosLivro[]|\Cake\Collection\CollectionInterface $cadastrosLivros
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Livros') ?></li>
        <li><?= $this->Html->link(__('Cadastrar um Livro'), ['action' => 'add']) ?></li>
        <li class="heading"><?= __('Clientes') ?></li>
        <li><a href="clientes/add">Cadastrar cliente</a></li>
        <li class="heading"><?= __('Empréstimos') ?></li>
        <li><a href="emprestimos/index">Empréstimos abertos</a></li>
    </ul>
</nav>
<div class="cadastrosLivros index large-9 medium-8 columns content">
    <h3><?= __('Livros Cadastrados') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Autor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Editora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Título da obra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Data de cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Valor(R$)') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cadastrosLivros as $cadastrosLivro): ?>
            <tr>
                <td><?= $this->Number->format($cadastrosLivro->id) ?></td>
                <td><?= h($cadastrosLivro->autor) ?></td>
                <td><?= h($cadastrosLivro->editora) ?></td>
                <td><?= h($cadastrosLivro->titulo_obra) ?></td>
                <td><?= h($cadastrosLivro->data_cadastro) ?></td>
                <td><?= $this->Number->format($cadastrosLivro->valor) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $cadastrosLivro->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cadastrosLivro->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $cadastrosLivro->id], ['confirm' => __('Tem certeza de que deseja apagar # {0}?', $cadastrosLivro->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}} <br> mostrando {{current}} resultados de {{count}} total')]) ?></p>
    </div>
</div>
