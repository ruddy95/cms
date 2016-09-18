<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SlPosts Controller
 *
 * @property \App\Model\Table\SlPostsTable $SlPosts
 */
class SlPostsController extends AppController
{
    public function isAuthorized($user)
    {
      // All registered users can add articles
      if ($this->request->action === 'add') {
          return true;
      }

      // The owner of an article can edit and delete it
      if (in_array($this->request->action, ['edit', 'delete'])) {
          $postId = (int)$this->request->params['pass'][0];
          if ($this->SlPosts->isOwnedBy($postId, $user['id'])) {
              return true;
          }
      }

      return parent::isAuthorized($user);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $slPosts = $this->paginate($this->SlPosts);

        $this->set(compact('slPosts'));
        $this->set('_serialize', ['slPosts']);
    }

    /**
     * View method
     *
     * @param string|null $id Sl Post id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $slPost = $this->SlPosts->get($id, [
            'contain' => []
        ]);

        $this->set('slPost', $slPost);
        $this->set('_serialize', ['slPost']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $slPost = $this->SlPosts->newEntity();
        if ($this->request->is('post')) {
            $slPost = $this->SlPosts->patchEntity($slPost, $this->request->data);
            $slPosts ->post_author = $this->Auth->user('id');
            if ($this->SlPosts->save($slPost)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The post could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('slPost'));
        $this->set('_serialize', ['slPost']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sl Post id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $slPost = $this->SlPosts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $slPost = $this->SlPosts->patchEntity($slPost, $this->request->data);
            if ($this->SlPosts->save($slPost)) {
                $this->Flash->success(__('The sl post has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sl post could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('slPost'));
        $this->set('_serialize', ['slPost']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sl Post id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $slPost = $this->SlPosts->get($id);
        if ($this->SlPosts->delete($slPost)) {
            $this->Flash->success(__('The sl post has been deleted.'));
        } else {
            $this->Flash->error(__('The sl post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
