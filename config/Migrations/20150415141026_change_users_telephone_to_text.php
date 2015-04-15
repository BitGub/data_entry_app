<?php
use Phinx\Migration\AbstractMigration;

class ChangeUsersTelephoneToText extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->removeColumn('telephone');
        
        $table->addColumn('telephone', 'string', [
            'default' => null,
            'limit' => 555,
            'null' => false,
        ]);
    }
}
