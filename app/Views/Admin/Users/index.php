<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Users<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>Users</h1>
    
    <a href="<?= site_url("/admin/users/new") ?>">New user</a>
    
    <?php if ($users): ?>
    
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Active</th>
                    <th>Administrator</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                
                    <tr>
                        <td>
                            <a href="<?= site_url("/admin/users/show/" . $user->id) ?>">
                                <?= esc($user->name) ?>
                            </a>
                        </td>
                        <td><?= esc($user->email) ?></td>
                        <td><?= esc($user->is_active ? "Yes" : "No") ?></td>
                        <td><?= esc($user->is_admin ? "Yes" : "No") ?></td>
                        <td><?= $user->created_at ?></td>
                    </tr>
                    
                <?php endforeach; ?>
            </tbody>
        </table>

        <?= $pager->links() ?>
        
    <?php else: ?>
        
        <p>No users found.</p>
        
    <?php endif; ?>

<?= $this->endSection() ?>