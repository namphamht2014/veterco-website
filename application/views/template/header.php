<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->lang->line('sitename').' '.$title?></title>

    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">

    <? if(isset($headers)): ?>
      <? foreach($headers as $key => $value): ?>
      <link rel="stylesheet" href="<?= $value?>">
      <? endforeach; ?>
    <? endif; ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php if ($this->session->userdata('loggedIn')): ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= base_url()?>"><?= $this->lang->line('sitename')?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?= base_url()?>"><?= $this->lang->line('menu_home')?></a></li>
            <?php if ($this->session->userdata['loggedIn']->vaitro == 0): ?>
            <li id="customers"><a href="<?= site_url('Customers')?>"><?= $this->lang->line('menu_customer')?></a></li>
            <li id="users"><a href="<?= site_url('Users')?>"><?= $this->lang->line('menu_user')?></a></li>
            <?php endif; ?>
            <li id="products"><a href="<?= site_url('Products')?>"><?= $this->lang->line('menu_product')?></a></li>
            <li><a href="<?= site_url('Backend/logout')?>"><?= $this->lang->line('menu_logout')?></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <?php endif; ?>
