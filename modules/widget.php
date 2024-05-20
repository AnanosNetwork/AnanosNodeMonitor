<?php if ($nanoNodeAccount): ?>
<?php if ($widgetType == 'qr'): ?>

<img src="https://quickchart.io/qr?text=<?php echo $currency; ?>:<?php echo $nanoNodeAccount; ?>&ecLevel=L" style="max-width:250px; display:block; margin: 0 0 0 auto;" />

<?php elseif($widgetType == 'natricon'): ?>

<img src="https://natricon.com/api/v1/nano?address=<?php echo $nanoNodeAccount; ?>" style="max-width:250px; display:block; margin: 0 0 0 auto;" />

<?php elseif($widgetType == 'monkey'): ?>

<img src="https://monkey.banano.cc/api/v1/monkey/<?php echo $nanoNodeAccount; ?>" style="max-width:250px; display:block; margin: 0 0 0 auto;" />

<?php elseif($widgetType == 'paw'): ?>

<img src="https://pawnimal.paw.digital/api/v1/nano?address=<?php echo $nanoNodeAccount; ?>" style="max-width:250px; display:block; margin: 0 0 0 auto;" />

<?php endif; ?>
<?php endif; ?>
