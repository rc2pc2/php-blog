<?php
    include_once __DIR__ . '/classes/Category.php';
    include_once __DIR__ . '/classes/User.php';
    include_once __DIR__ . '/classes/Post.php';
    include_once __DIR__ . '/db/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">

    <title>PHP Blog</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12">
                <h1>
                    PHP Blog
                </h1>
            </div>
            <div class="col-12">
                <h2>
                    Posts:
                </h2>
            </div>
            <?php foreach ($posts as $post) { ?>
                <div class="card col-3 p-0 m-3" >
                    <div class="card-header">
                        <?php echo $post->category->name; ?>
                    </div>
                    <img src="<?php echo $post->image ?>"  class="card-img-top rounded-0" alt="<?php echo $post->title; ?>">
                    <div class="card-body p-3">
                        <h5 class="card-title">
                            <?php echo $post->title; ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <?php echo $post->author->username; ?>
                            <br>
                            <?php echo $post->dateTime->format('Y-m-d H:i:s'); ?>
                        </h6>
                        <p class="card-text">
                            <?php echo $post->getSynopsis(88); ?>
                        </p>
                        <a href="#" class="btn btn-primary">
                            Read more...
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>