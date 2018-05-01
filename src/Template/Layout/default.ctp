<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<!--
    <header>
        <div class="header-title">
            <span><?= $this->fetch('title') ?></span>
        </div>
        <div class="header-help">
            <span><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></span>
            <span><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></span>
        </div>
    </header>
    -->
   <nav>
      <ul class="topmenu">
        <li><a href="/cakephpinst/Contacts/index" >Home</a>

        </li>
        <li><a >File</a>
            <ul class="submenu">
                <li><a >Import Phone Book</a></li>
                <li><a >Export Phone Book</a></li>
            </ul>
        </li>
        <li><a >Edit</a>
            <ul class="submenu">
                <li><a href="add">Add</a></li>
                <li><a >Edit</a></li>
                <li><a >Delete</a></li>
            </ul>
        </li>
        <li><a >Search</a>
            <ul class="submenu">
                    <li><a >By name/surname</a></li>
                    <li><a >By telephone</a></li>
                    <li><a >By Email</a></li>
            </ul>
        </li>
      </ul>
          <div id="menu">
                    	<ul>
                    		<li><a href="/cakephpinst/Contacts/index">Contacts</a></li>
                    		<li><a href="/cakephpinst/Telephones/index">Telephones</a></li>
                    		<li><a href="/cakephpinst/Emails/index">Emails</a></li>
                    		<li><a href="/cakephpinst/Links/index">Categories</a></li>
                    	</ul>
                    </div>
    </nav>

    <div id="container">

        <div id="content">
            <?= $this->Flash->render() ?>

            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <footer>
        </footer>
    </div>
</body>
</html>