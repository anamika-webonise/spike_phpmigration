<?php
class Migrationbake extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
            'create_table' => array(
                'users' => array(
                    'id' => array(
                        'type'    =>'integer',
                        'null'    => false,
                        'key'     => 'primary'),
                    'username' => array(
                        'type'    =>'string',
                        'null'    => false,
                        'default' => NULL),
                    'address' => array(
                        'type'    =>'string',
                        'null'    => false,
                        'default' => NULL),
                    'indexes' => array(
                        'PRIMARY' => array(
                            'column' => 'id',
                            'unique' => 1)
                    )
                ),
            ),

            'create_table' => array(
                'profiles' => array(
                    'id' => array(
                        'type'    =>'integer',
                        'null'    => false,
                        'key'     => 'primary'),
                    'emailid' => array(
                        'type'    =>'string',
                        'null'    => false,
                        'default' => NULL),
                    'profile_type' => array(
                        'type'    =>'string',
                        'null'    => false,
                        'default' => NULL),
                    'indexes' => array(
                        'PRIMARY' => array(
                            'column' => 'id',
                            'unique' => 1)
                    )
                ),
		),
		'down' => array(
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
