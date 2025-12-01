<?php include 'header.php'; ?>
<?php include 'article1.php'; ?>
<?php include 'article2.php'; ?>
<?php include 'article3.php'; ?>
<?php include 'article4.php'; ?>
<?php include 'functions.php'; ?>
<?php $date = '01 Dec, 2025'; ?>

<?php include 'globalInfo.php'; ?>

<?php include 'separator.php'; ?>

<?= formatArticle("left",$article2) ?>

<?php include 'separator.php'; ?>

<?= formatArticle("center",$article4) ?>

<?php include 'separator.php'; ?>

<?= formatArticle("right",$article1) ?>

<?php /*include 'separator.php';?>

<?= formatArticle("center",$article3)*/?>

<?php include 'separator.php'; ?>

<?php include 'next_newsletter.php'; ?>
<?php include 'footer.php'; ?>