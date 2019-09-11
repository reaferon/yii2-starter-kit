<?php

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@frontend/views/layouts/_clear.php')
?>
<div class="wrap">
    <?php echo $content ?>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Laurite 2012-<?php echo date('Y') ?></p>
    </div>
</footer>
<?php $this->endContent() ?>