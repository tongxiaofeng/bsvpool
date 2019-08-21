<?php
# A demo for `users.list_id_api_url` in `sserver.cfg` with static user list.

header('Content-Type: application/json');

$last_id = (int) $_GET['last_id'];

$users = [
    'hu60' => 7,
    'DdDdDdDdD' => 42,
];

$requestedUsers = [];
foreach ($users as $name=>$id) {
    if ($id > $last_id) {
        $requestedUsers [$name] = $id;
    }
}

echo json_encode(
    [
        'err_no' => 0,
        'err_msg' => null,
        'data' => (object) $requestedUsers,
    ]
);
