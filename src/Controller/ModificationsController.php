<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Modifications Controller
 *
 * @property \App\Model\Table\ModificationsTable $Modifications
 */
class ModificationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Comments']
        ];
        $modifications = $this->paginate($this->Modifications);

        $this->set(compact('modifications'));
        $this->set('_serialize', ['modifications']);
    }

    /**
     * View method
     *
     * @param string|null $id Modification id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modification = $this->Modifications->get($id, [
            'contain' => ['Comments']
        ]);

        $this->set('modification', $modification);
        $this->set('_serialize', ['modification']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modification = $this->Modifications->newEntity();
        if ($this->request->is('post')) {
            $modification = $this->Modifications->patchEntity($modification, $this->request->data);
            if ($this->Modifications->save($modification)) {
                $this->Flash->success(__('The modification has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The modification could not be saved. Please, try again.'));
            }
        }
        $comments = $this->Modifications->Comments->find('list', ['limit' => 200]);
        $this->set(compact('modification', 'comments'));
        $this->set('_serialize', ['modification']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Modification id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modification = $this->Modifications->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modification = $this->Modifications->patchEntity($modification, $this->request->data);
            if ($this->Modifications->save($modification)) {
                $this->Flash->success(__('The modification has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The modification could not be saved. Please, try again.'));
            }
        }
        $comments = $this->Modifications->Comments->find('list', ['limit' => 200]);
        $this->set(compact('modification', 'comments'));
        $this->set('_serialize', ['modification']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Modification id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modification = $this->Modifications->get($id);
        if ($this->Modifications->delete($modification)) {
            $this->Flash->success(__('The modification has been deleted.'));
        } else {
            $this->Flash->error(__('The modification could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
