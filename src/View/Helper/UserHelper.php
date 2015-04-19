<?
namespace App\View\Helper;

use Cake\View\Helper;

class UserHelper extends Helper
{
  public $helpers = ['Html'];
  
  public function full_name($user)
  {
    $f_name = $this->Html->link($user->first_name." ".$user->last_name, ['action' => 'view', $user->id]);
    
    return $f_name;
  }
}
?>