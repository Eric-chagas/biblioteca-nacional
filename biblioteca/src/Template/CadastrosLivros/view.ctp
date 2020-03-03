<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadastrosLivro $cadastrosLivro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $cadastrosLivro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $cadastrosLivro->id], ['confirm' => __('Tem certeza de que deseja apagar # {0}?', $cadastrosLivro->id)]) ?> </li>
        <li><?= $this->Html->link(__('Livros cadastrados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Cadastrar um Livro'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cadastrosLivros view large-9 medium-8 columns content">
    <h3><?= h($cadastrosLivro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Autor') ?></th>
            <td><?= h($cadastrosLivro->autor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Editora') ?></th>
            <td><?= h($cadastrosLivro->editora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo Obra') ?></th>
            <td><?= h($cadastrosLivro->titulo_obra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cadastrosLivro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= $this->Number->format($cadastrosLivro->valor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Cadastro') ?></th>
            <td><?= h($cadastrosLivro->data_cadastro) ?></td>
        </tr>
    </table>
</div>
