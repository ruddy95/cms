<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SlPosts Model
 *
 * @method \App\Model\Entity\SlPost get($primaryKey, $options = [])
 * @method \App\Model\Entity\SlPost newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SlPost[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SlPost|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SlPost patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SlPost[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SlPost findOrCreate($search, callable $callback = null)
 */
class SlPostsTable extends Table
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

        $this->table('sl_posts');
        $this->displayField('ID');
        $this->primaryKey('ID');
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
            ->allowEmpty('ID', 'create');

        $validator
            ->requirePresence('post_author', 'create')
            ->notEmpty('post_author');

        $validator
            ->dateTime('submit_date')
            ->requirePresence('submit_date', 'create')
            ->notEmpty('submit_date');

        $validator
            ->dateTime('post_date')
            ->requirePresence('post_date', 'create')
            ->notEmpty('post_date');

        $validator
            ->requirePresence('post_content', 'create')
            ->notEmpty('post_content');

        $validator
            ->requirePresence('post_title', 'create')
            ->notEmpty('post_title');

        $validator
            ->requirePresence('post_description', 'create')
            ->notEmpty('post_description');

        $validator
            ->requirePresence('post_thumbnail', 'create')
            ->notEmpty('post_thumbnail');

        $validator
            ->requirePresence('post_status', 'create')
            ->notEmpty('post_status');

        $validator
            ->requirePresence('post_type', 'create')
            ->notEmpty('post_type');

        $validator
            ->requirePresence('post_mime_type', 'create')
            ->notEmpty('post_mime_type');

        $validator
            ->requirePresence('post_keyword', 'create')
            ->notEmpty('post_keyword');

        $validator
            ->requirePresence('post_pv', 'create')
            ->notEmpty('post_pv');

        return $validator;
    }

    public function isOwnedBy($postId, $userId)
    {
        return $this->exists(['id' => $postId, 'post_author' => $userId]);
    }
}
