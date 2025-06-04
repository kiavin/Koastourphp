<?php 
$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/'; 

?>
<?= $this->render('@components/site/header', compact('basePath')); ?>