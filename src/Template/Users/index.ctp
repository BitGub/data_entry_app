<div class="top row">
  <h1 class="six columns">User Listings</h1>
  <div class='six columns'>
    <?= $this->Html->link('Sign Up!', ['action' => 'add']) ?>
  </div>
</div>
<table class="u-full-width">
  <thead>
    <tr>
      <th>Name</th>
      <th>Gender</th>
      <th>Email</th>
      <th>Telephone No</th>
      <th>D.O.B</th>
      <th>Comments</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($users as $user): ?>
    <tr>
      <td> <?= $this->User->full_name($user) ?> </td>
      <td> <?= $user->gender ?> </td>
      <td> <?= $user->email ?> </td>
      <td> <?= $this->Number->format($user->telephone) ?> </td>
      <td> <?= $this->Time->format($user->dob,'dd MM Y') ?> </td>
      <td> <?= $this->Text->autoParagraph(h($user->comments));  ?> </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
