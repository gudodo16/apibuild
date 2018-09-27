<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div> -->
<div id="toast-container" class="toast-top-center">
	<div class="toast toast-success" aria-live="polite" style="" onclick="this.classList.add('hidden');" >
		<div class="toast-message"><i class="icon-ok-sign"></i><?= ' '.$message ?></div>
	</div>
</div>