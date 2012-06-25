<?php
App::uses('AppController', 'Controller');
/**
 * SchemaMigrations Controller
 *
 * @property SchemaMigration $SchemaMigration
 */
class SchemaMigrationsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SchemaMigration->recursive = 0;
		$this->set('schemaMigrations', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SchemaMigration->id = $id;
		if (!$this->SchemaMigration->exists()) {
			throw new NotFoundException(__('Invalid schema migration'));
		}
		$this->set('schemaMigration', $this->SchemaMigration->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SchemaMigration->create();
			if ($this->SchemaMigration->save($this->request->data)) {
				$this->Session->setFlash(__('The schema migration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The schema migration could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SchemaMigration->id = $id;
		if (!$this->SchemaMigration->exists()) {
			throw new NotFoundException(__('Invalid schema migration'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SchemaMigration->save($this->request->data)) {
				$this->Session->setFlash(__('The schema migration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The schema migration could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SchemaMigration->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->SchemaMigration->id = $id;
		if (!$this->SchemaMigration->exists()) {
			throw new NotFoundException(__('Invalid schema migration'));
		}
		if ($this->SchemaMigration->delete()) {
			$this->Session->setFlash(__('Schema migration deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Schema migration was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
