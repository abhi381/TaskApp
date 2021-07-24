<?= $this->extend("/layouts/default")?>

<?= $this->section("title")?>
    Delete
<?= $this->endSection()?>
 <h1>Delete Task</h1>
 <p>Are You Sure?</p>

 <?= form_open('/tasks/delete/'.$task->id)?>
 <button>Yes</button>
 <a href="<?= site_url('/tasks/show/'.$task->id)?>">No</a>
 </form>
<?= $this->section("content")?>