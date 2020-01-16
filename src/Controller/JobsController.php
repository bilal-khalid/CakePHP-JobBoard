<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jobs Controller
 *
 * @property \App\Model\Table\JobsTable $Jobs
 *
 * @method \App\Model\Entity\Job[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JobsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'order' => ['Jobs.created' => 'DESC', 'Jobs.id' => 'DESC'],
            'contain' => ['Categories', 'Users', 'Types']
        ];
        $jobs = $this->paginate($this->Jobs);

        $categories = $this->Jobs->Categories->find('list', ['limit' => 200]);

        $this->set(compact('jobs', 'categories'));
    }

    /**
     * Browse method
     *
     * @return \Cake\Http\Response|null
     */
    public function browse($category = null)
    {
        $jobs = $this->Jobs->find('all');

        if ($this->request->is('post')) {
            if (!empty($this->request->getData('keywords'))) {
                $jobs = $jobs->where([
                    'OR' => [
                        'Jobs.title LIKE' => "%" . $this->request->getData('keywords') . "%",
					    'Jobs.description LIKE' => "%" . $this->request->getData('keywords') . "%"
                    ],
                ]);
            }
            
            if (!empty($this->request->getData('state'))) {
                $jobs = $jobs->where(['Jobs.state LIKE' => "%" . $this->request->getData('state') . "%"]);
            }

            if (!empty($this->request->getData('category'))) {
                $jobs = $jobs->where(['Jobs.category_id' => $this->request->getData('category')]);
            }
        }
        
        if (!is_null($category)) {
            $jobs = $jobs->where(['Jobs.category_id' => $category]);
        }

        $this->paginate = [
            'order' => ['Jobs.created' => 'DESC', 'Jobs.id' => 'DESC'],
            'contain' => ['Types']
        ];
        $jobs = $this->paginate($jobs);

        $categories = $this->Jobs->Categories->find('list', ['limit' => 200]);

        $this->set(compact('jobs', 'categories'));
    }

    /**
     * View method
     *
     * @param string|null $id Job id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $job = $this->Jobs->get($id, [
            'contain' => ['Categories', 'Users', 'Types']
        ]);

        $categories = $this->Jobs->Categories->find('list', ['limit' => 200]);

        $this->set(compact('job', 'categories'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $job = $this->Jobs->newEntity();
        if ($this->request->is('post')) {
            $job = $this->Jobs->patchEntity($job, $this->request->getData());
            $job->user_id = $this->Auth->user('id');
            if ($this->Jobs->save($job)) {
                $this->Flash->success(__('The job has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The job could not be saved. Please, try again.'));
        }
        $categories = $this->Jobs->Categories->find('list', ['limit' => 200]);
        $users = $this->Jobs->Users->find('list', ['limit' => 200]);
        $types = $this->Jobs->Types->find('list', ['limit' => 200]);
        $this->set(compact('job', 'categories', 'users', 'types'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Job id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $job = $this->Jobs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $job = $this->Jobs->patchEntity($job, $this->request->getData());
            if ($this->Jobs->save($job)) {
                $this->Flash->success(__('The job has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The job could not be saved. Please, try again.'));
        }
        $categories = $this->Jobs->Categories->find('list', ['limit' => 200]);
        $users = $this->Jobs->Users->find('list', ['limit' => 200]);
        $types = $this->Jobs->Types->find('list', ['limit' => 200]);
        $this->set(compact('job', 'categories', 'users', 'types'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Job id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $job = $this->Jobs->get($id);
        if ($this->Jobs->delete($job)) {
            $this->Flash->success(__('The job has been deleted.'));
        } else {
            $this->Flash->error(__('The job could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
