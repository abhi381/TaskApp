<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Edit profile<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>Edit profile</h1>

<p>Enter Your Password to Update.</p>
<?= form_open("/profile/processauthenticate") ?>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>

    <button>Send</button>
    <a href="<?= site_url("/profile/show") ?>">Cancel</a>

</form>

<?= $this->endSection() ?>