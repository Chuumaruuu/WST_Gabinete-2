<!DOCTYPE html>
<html lang="en">

  <?= $this->include('components/head') ?>

  <body class="index-page">

    <?= $this->include('components/header') ?>

    <main class="main">

    <?= $this->include('components/main/hero') ?>
    <?= $this->include('components/main/about') ?>
    <?= $this->include('components/main/stats') ?>
    <?= $this->include('components/main/skills') ?>
    <?= $this->include('components/main/resume') ?>
    <?= $this->include('components/main/portfolio') ?>
    <?= $this->include('components/main/service') ?>
    <?= $this->include('components/main/testimonials') ?>
    <?= $this->include('components/main/contacts') ?>

    </main>

    <?= $this->include('components/footer') ?>
    <?= $this->include('components/scripts') ?>

  </body>

</html>