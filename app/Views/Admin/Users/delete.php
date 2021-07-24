<?= $this->extend("/layouts/default")?>

<?= $this->section("title")?>
    Delete User
<?= $this->endSection()?>
 <h1>Delete User</h1>
 <p>Are You Sure?</p>

 <?= form_open('/admin/users/delete/'.$user->id)?>
 <button>Yes</button>
 <a href="<?= site_url('/admin/users/show/'.$user->id)?>">No</a>
 </form>
<?= $this->section("content")?>