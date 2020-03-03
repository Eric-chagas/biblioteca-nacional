<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadastrosLivro[]|\Cake\Collection\CollectionInterface $cadastrosLivros
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Cadastro'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cadastrosLivros index large-9 medium-8 columns content">
    <h3><?= __('Cadastros Livros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('autor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('editora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo_obra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
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
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cadastrosLivro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cadastrosLivro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cadastrosLivro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadastrosLivro->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
