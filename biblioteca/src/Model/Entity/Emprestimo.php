<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Emprestimo Entity
 *
 * @property int $id
 * @property int|null $cliente_id
 * @property int|null $cadastros_livro_id
 * @property \Cake\I18n\FrozenDate $data_emprestimo
 * @property int $duracao
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\CadastrosLivro $cadastros_livro
 */
class Emprestimo extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'cliente_id' => true,
        'cadastros_livro_id' => true,
        'data_emprestimo' => true,
        'duracao' => true,
        'cliente' => true,
        'cadastros_livro' => true,
    ];
}
