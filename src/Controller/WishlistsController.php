<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Wishlists Controller
 *
 * @property \App\Model\Table\WishlistsTable $Wishlists
 *
 * @method \App\Model\Entity\Wishlist[] paginate($object = null, array $settings = [])
 */
class WishlistsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Products']
        ];
        $wishlists = $this->paginate($this->Wishlists);

        $this->set(compact('wishlists'));
        $this->set('_serialize', ['wishlists']);
    }

    /**
     * View method
     *
     * @param string|null $id Wishlist id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wishlist = $this->Wishlists->get($id, [
            'contain' => ['Users', 'Products']
        ]);

        $this->set('wishlist', $wishlist);
        $this->set('_serialize', ['wishlist']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wishlist = $this->Wishlists->newEntity();
        if ($this->request->is('post')) {
            $wishlist = $this->Wishlists->patchEntity($wishlist, $this->request->getData());
            $wishlist->user_id = $this->Auth->user('id');
            if ($this->Wishlists->save($wishlist)) {
                $this->Flash->success(__('The product as been added to your wishlist'));

                return $this->redirect($this->referer());
            }
            $this->Flash->error(__('The wishlist could not be saved. Please, try again.'));
        }
        $users = $this->Wishlists->Users->find('list', ['limit' => 200]);
        $products = $this->Wishlists->Products->find('list', ['limit' => 200]);
        $this->set(compact('wishlist', 'users', 'products'));
        $this->set('_serialize', ['wishlist']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wishlist id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wishlist = $this->Wishlists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wishlist = $this->Wishlists->patchEntity($wishlist, $this->request->getData());
            if ($this->Wishlists->save($wishlist)) {
                $this->Flash->success(__('The wishlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wishlist could not be saved. Please, try again.'));
        }
        $users = $this->Wishlists->Users->find('list', ['limit' => 200]);
        $products = $this->Wishlists->Products->find('list', ['limit' => 200]);
        $this->set(compact('wishlist', 'users', 'products'));
        $this->set('_serialize', ['wishlist']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wishlist id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wishlist = $this->Wishlists->get($id);
        if ($this->Wishlists->delete($wishlist)) {
            $this->Flash->success(__('The wishlist has been deleted.'));
        } else {
            $this->Flash->error(__('The wishlist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function isAuthorized($user)
    {
        // All registered users can add articles
        if ($this->request->getParam('action') === 'add') {
            return true;
        }

        // The owner of an article can edit and delete it
        if (in_array($this->request->getParam('action'), ['edit', 'delete'])) {
            $wishlistId = (int)$this->request->getParam('pass.0');
            if ($this->Wishlists->isOwnedBy($wishlistId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }
}
