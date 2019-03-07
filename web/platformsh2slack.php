<?php

// Optional settings
$settings = [
  'channel' => '#platformish',
  'region' => 'us',
];

$platformsh2slack = new Hanoii\Platformsh2Slack\Platformsh2Slack(
  'https://hooks.slack.com/services/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',
  $settings
);

// Optionally protect the request with a token that has to be present in the Platform.sh webhook
$platformsh2slack->validateToken('80122');

// Send the information to slack
$platformsh2slack->send();
