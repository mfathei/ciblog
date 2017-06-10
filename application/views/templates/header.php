<html>
<head>
    <title>ciBlog</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                ciBlog
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">

                <li class="dropdown"><a href="/">Home</a></li>
                <li class="dropdown"><a href="/posts">Blog</a></li>
                <li class="dropdown"><a href="/categories">Categories</a></li>
                <li class="dropdown"><a href="/about">About</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="/users/register">Register</a></li>
                <li class="dropdown"><a href="/posts/create">Create Post</a></li>
                <li class="dropdown"><a href="/categories/create">Create Category</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <?php if ($this->session->flashdata('user_registered')) : ?>
        <p class="alert alert-success">
            <?= $this->session->flashdata('user_registered') ?>
        </p>
    <?php endif; ?>

    <?php if ($this->session->flashdata('category_created')) : ?>
        <p class="alert alert-success">
            <?= $this->session->flashdata('category_created') ?>
        </p>
    <?php endif; ?>

    <?php if ($this->session->flashdata('comment_created')) : ?>
        <p class="alert alert-success">
            <?= $this->session->flashdata('comment_created') ?>
        </p>
    <?php endif; ?>

    <?php if ($this->session->flashdata('post_created')) : ?>
        <p class="alert alert-success">
            <?= $this->session->flashdata('post_created') ?>
        </p>
    <?php endif; ?>

    <?php if ($this->session->flashdata('post_deleted')) : ?>
        <p class="alert alert-success">
            <?= $this->session->flashdata('post_deleted') ?>
        </p>
    <?php endif; ?>


    <?php if ($this->session->flashdata('post_updated')) : ?>
    <p class="alert alert-success">
        <?= $this->session->flashdata('post_updated') ?>
    </p>
<?php endif; ?>