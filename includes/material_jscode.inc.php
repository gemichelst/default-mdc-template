<?php

$material_jscode["dashboard"] = "
<script>
var determinates = document.querySelectorAll('.mdc-linear-progress');
for (var i = 0, determinate; determinate = determinates[i]; i++) {
        var linearProgress = mdc.linearProgress.MDCLinearProgress.attachTo(determinate);
        linearProgress.progress = 0.5;
        if (determinate.dataset.buffer) {
          linearProgress.buffer = 0.75;
        }
      }
</script>";


?>