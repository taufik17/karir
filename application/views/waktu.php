<!DOCTYPE html>
<html>
<body>

<?php
echo "The time is " . date("h:i:sa");
?>

<?php
echo 'Default Timezone: ' . date('d-m-Y H:i:s') . '</br>';
date_default_timezone_set('Asia/Jakarta');
echo 'Indonesian Timezone: ' . date('d-m-Y H:i:s');
?>
</body>
</html>
