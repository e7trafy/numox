<?php

/**
 * keys : success, fail, needActive, exit, blocked , failDeleted ,needAdminActivation
 */
function successReturnData($data = [], $msg = '')
{
    return ['key' => 'success', 'data' => $data, 'msg' => $msg, 'code' => 200];
}

function failReturnAuth($msg = '')
{
    return ['key' => 'not_auth', 'msg' => $msg, 'code' => 401];
}

function returnSuccessMsg($msg = '')
{
    return ['key' => 'success', 'msg' => $msg, 'code' => 200];
}

function needAdminActivation($msg = '')
{
    return ['key' => 'needAdminActivation', 'msg' => $msg, 'code' => 200];
}

function failReturnMsg($msg = '')
{
    return ['key' => 'fail', 'msg' => $msg, 'code' => 400];
}

function packageReturn($msg = '')
{
    return ['key' => 'chargePackage', 'msg' => $msg, 'code' => 200];
}

function failReturnData($data = [])
{
    return ['key' => 'fail', 'data' => $data, 'code' => 400];
}
// ===== User Not Active
function failActivationData($data = [])
{
    return ['key' => 'needActive', 'data' => $data, 'code' => 200];
}
// ===== User Not Active
function failActivationMsg($msg = [])
{
    return ['key' => 'needActive', 'msg' => $msg, 'code' => 200];
}
// ===== User Not CompleteRegistration
function needCompleteRegistration($data = [], $msg = '')
{
    return ['key' => 'needCompleteRegistration', 'data' => $data, 'msg' => $msg, 'code' => 200];
}

// ===== User Is Blocked
function failBlockedMsg($meg = '')
{
    return ['key' => 'blocked', 'msg' => $meg, 'code' => 200];
}

// ===== User Is Deleted
function failDeletedMsg($meg = '')
{
    return ['key' => 'failDeleted', 'msg' => $meg, 'code' => 200];
}

// ===== fooz App
function auctionInprogressData($data = [])
{
    return ['key' => 'auctionInprogress', 'data' => $data, 'code' => 200];
}

// ===== fooz App
function auctionSoldData($data = [])
{
    return ['key' => 'auctionSold', 'data' => $data, 'code' => 200];
}
