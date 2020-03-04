<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CadastrosLivros Model
 *
 * @method \App\Model\Entity\CadastrosLivro get($primaryKey, $options = [])
 * @method \App\Model\Entity\CadastrosLivro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CadastrosLivro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CadastrosLivro|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadastrosLivro saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadastrosLivro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CadastrosLivro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CadastrosLivro findOrCreate($search, callable $callback = null, $options = [])
 */
class CadastrosLivrosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('cadastros_livros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('autor')
            ->maxLength('autor', 255)
            ->requirePresence('autor', 'create')
            ->notEmptyString('autor');

        $validator
            ->scalar('editora')
            ->maxLength('editora', 255)
            ->requirePresence('editora', 'create')
            ->notEmptyString('editora');

        $validator
            ->scalar('titulo_obra')
            ->maxLength('titulo_obra', 255)
            ->requirePresence('titulo_obra', 'create')
            ->notEmptyString('titulo_obra');

        $validator
            ->dateTime('data_cadastro')
            ->allowEmptyDateTime('data_cadastro');

        $validator
            ->numeric('valor')
            ->allowEmptyString('valor');

        return $validator;
    }
}
