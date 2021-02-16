<?php require APPROOT . '/views/inc/header.php'; ?>
<?php flash('post_message'); ?>
<div class="row">
    <div class="col-md-6">
        <h1>Posts</h1>
    </div>
    <div class="col-md-6">
        <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary pull-right">
            <i class="fa fa-pencil"></i> Add post
        </a>
    </div>
    <?php foreach ($data['posts'] as $post) : ?>
    <div class="card card-body mb-3">
        <h4 class="card-title">
            <?php echo $post->title; ?>
        </h4>
        <p class="card-text"><?php echo $post->body; ?></p>
        <div class="card card-body mb-3">
            Written by <?php echo $post->name; ?> on <?php echo $post->postCreated; ?>
        </div>
        <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>" class="btn btn-dark">More</a>
    </div>
    <?php endforeach; ?>
    <?php require APPROOT . '/views/inc/footer.php'; ?>