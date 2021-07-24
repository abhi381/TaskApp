  
<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Task<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">Task</h1>

<a href="<?= site_url("/tasks") ?>">&laquo; back to index</a>

<div class="content">

    <dl>
        <dt class="has-text-weight-bold">ID</dt>
        <dd><?= $tasks->id ?></dd>
        
        <dt class="has-text-weight-bold">Description</dt>
        <dd><?= esc($tasks->description) ?></dd>
        
        <dt class="has-text-weight-bold">Created at</dt>
        <dd><?= $tasks->created_at->humanize() ?></dd>
        
        <dt class="has-text-weight-bold">Updated at</dt>
        <dd><?= $tasks->updated_at->humanize() ?></dd>
    </dl>
</div>

<a href="<?= site_url('/tasks/edit/' . $tasks->id) ?>">Edit</a>
<a href="<?= site_url('/tasks/delete/' . $tasks->id) ?>">Delete</a>

<?= $this->endSection() ?>