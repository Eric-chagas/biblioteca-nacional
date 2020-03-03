<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CadastrosLivro Entity
 *
 * @property int $id
 * @property string $autor
 * @property string $editora
 * @property string $titulo_obra
 * @property \Cake\I18n\FrozenTime|null $data_cadastro
 * @property float|null $valor
 */
class CadastrosLivro extends Entity
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
        'autor' => true,
        'editora' => true,
        'titulo_obra' => true,
        'data_cadastro' => true,
        'valor' => true,
    ];
}
