<div class="col s12 m4 xl3">
    <div class="card">
        <div class="card-image">
            <img src="<?= $user['picture']; ?>" alt="">
            <span class="card-title"><?= $user["firstName"] . " " . $user["lastName"]; ?></span>
        </div><!-- .card-image -->
        <div class="card-content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt aliquam dolor laboriosam eveniet, quos fugiat quasi ipsam repellendus eum corrupti!</p>
        </div><!-- .card-content -->
        <div class="card-action">
            <a class="btn-floating amber z-depth-2" href="mailto:<?= $user['email']; ?>"><i class="material-icons">mail_outline</i></a>
        </div><!-- .card-action -->
    </div><!-- .card -->
</div>