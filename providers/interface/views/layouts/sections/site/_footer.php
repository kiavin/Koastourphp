<?php 
$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/'; 

?>
<?= $this->render('@components/site/footer', compact('basePath')); ?>