<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="<?= h($class) ?>" onclick="this.classList.add('hidden');"><?= $message ?></div> -->
<div id="toast-container" class="toast-top-center">
	<div class="toast toast-info" aria-live="polite" style="" onclick="this.classList.add('hidden');" >
		<div class="toast-message"><i class="icon-info-sign"></i><?= ' '.$message ?></div>
	</div>
</div>