<?php require ('partials/head.php');?>
<h1>All Users</h1>
<?php foreach ($users as $user): ?>
    <li><?= $user->name; ?></li>
<?php endforeach  ?>

<!--   <h1>My Todo</h1>
    <ul>
      <?php foreach ($tasks as $task) : ?>
        <li>
        <?php if ($task->completed) : ?>
        <strike><?= $task->description; ?></strike>
        <?php else:?>
        <?= $task->description; ?>
          <?php endif;?>
        </li>
    <?php endforeach; ?>
    </ul> -->
<h1>Input Names</h1>
<form method="POST" action="/users">
<input  name="name"></input>
<button type="submit">submit</button>
</form>

<?php require ('partials/footer.php');?>