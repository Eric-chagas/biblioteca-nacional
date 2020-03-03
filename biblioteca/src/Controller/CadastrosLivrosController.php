<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CadastrosLivros Controller
 *
 * @property \App\Model\Table\CadastrosLivrosTable $CadastrosLivros
 *
 * @method \App\Model\Entity\CadastrosLivro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CadastrosLivrosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $cadastrosLivros = $this->paginate($this->CadastrosLivros);

        $this->set(compact('cadastrosLivros'));
    }

    /**
     * View method
     *
     * @param string|null $id Cadastros Livro id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cadastrosLivro = $this->CadastrosLivros->get($id, [
            'contain' => [],
        ]);

        $this->set('cadastrosLivro', $cadastrosLivro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cadastrosLivro = $this->CadastrosLivros->newEntity();
        if ($this->request->is('post')) {
            $cadastrosLivro = $this->CadastrosLivros->patchEntity($cadastrosLivro, $this->request->getData());
            if ($this->CadastrosLivros->save($cadastrosLivro)) {
                $this->Flash->success(__('O livro foi cadastrado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível cadastrar o livro. Tente novamente.'));
        }
        $this->set(compact('cadastrosLivro'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cadastros Livro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cadastrosLivro = $this->CadastrosLivros->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cadastrosLivro = $this->CadastrosLivros->patchEntity($cadastrosLivro, $this->request->getData());
            if ($this->CadastrosLivros->save($cadastrosLivro)) {
                $this->Flash->success(__('Suas alterações foram salvas.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível realizar as alterações. Tente novamente.'));
        }
        $this->set(compact('cadastrosLivro'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cadastros Livro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cadastrosLivro = $this->CadastrosLivros->get($id);
        if ($this->CadastrosLivros->delete($cadastrosLivro)) {
            $this->Flash->success(__('O livro foi removido.'));
        } else {
            $this->Flash->error(__('O livro não pode ser removido. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
