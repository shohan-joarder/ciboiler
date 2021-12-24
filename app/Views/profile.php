<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">Profile</div>
            <div class="panel-body">
                <h3>Hi, <?= $user['name'] ?></h3>
                <hr>
                <p>Email: <?= $user['email'] ?></p>
                <p>Phone No: <?= $user['phone_no'] ?></p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>