<h1>Conference members</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Report subject</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($users as $user): ?>
    <tr>
      <td><img src="<?= $user->photo ?>" alt="Photo" width="50"></td>
      <td><?= $user->first_name ?> <?= $user->last_name ?></td>
      <td><?= $user->report_subject ?></td>
      <td><a href="mailto:<?= $user->email ?>"><?= $user->email ?></a></td>
    </tr>

  <?php endforeach ?>
  </tbody>
</table>
