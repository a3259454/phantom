<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: chain.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.TransactionEnvStore</code>
 */
class TransactionEnvStore extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.protocol.TransactionEnv transaction_env = 1;</code>
     */
    private $transaction_env = null;
    /**
     * Generated from protobuf field <code>int32 error_code = 2;</code>
     */
    private $error_code = 0;
    /**
     * Generated from protobuf field <code>string error_desc = 3;</code>
     */
    private $error_desc = '';
    /**
     * Generated from protobuf field <code>int64 ledger_seq = 4;</code>
     */
    private $ledger_seq = 0;
    /**
     * Generated from protobuf field <code>int64 close_time = 5;</code>
     */
    private $close_time = 0;
    /**
     *for notify
     *
     * Generated from protobuf field <code>bytes hash = 6;</code>
     */
    private $hash = '';
    /**
     * Generated from protobuf field <code>int64 actual_fee = 7;</code>
     */
    private $actual_fee = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Protocol\TransactionEnv $transaction_env
     *     @type int $error_code
     *     @type string $error_desc
     *     @type int|string $ledger_seq
     *     @type int|string $close_time
     *     @type string $hash
     *          for notify
     *     @type int|string $actual_fee
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.protocol.TransactionEnv transaction_env = 1;</code>
     * @return \Protocol\TransactionEnv
     */
    public function getTransactionEnv()
    {
        return $this->transaction_env;
    }

    /**
     * Generated from protobuf field <code>.protocol.TransactionEnv transaction_env = 1;</code>
     * @param \Protocol\TransactionEnv $var
     * @return $this
     */
    public function setTransactionEnv($var)
    {
        GPBUtil::checkMessage($var, \Protocol\TransactionEnv::class);
        $this->transaction_env = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 error_code = 2;</code>
     * @return int
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * Generated from protobuf field <code>int32 error_code = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setErrorCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->error_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error_desc = 3;</code>
     * @return string
     */
    public function getErrorDesc()
    {
        return $this->error_desc;
    }

    /**
     * Generated from protobuf field <code>string error_desc = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorDesc($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_desc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 ledger_seq = 4;</code>
     * @return int|string
     */
    public function getLedgerSeq()
    {
        return $this->ledger_seq;
    }

    /**
     * Generated from protobuf field <code>int64 ledger_seq = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLedgerSeq($var)
    {
        GPBUtil::checkInt64($var);
        $this->ledger_seq = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 close_time = 5;</code>
     * @return int|string
     */
    public function getCloseTime()
    {
        return $this->close_time;
    }

    /**
     * Generated from protobuf field <code>int64 close_time = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCloseTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->close_time = $var;

        return $this;
    }

    /**
     *for notify
     *
     * Generated from protobuf field <code>bytes hash = 6;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     *for notify
     *
     * Generated from protobuf field <code>bytes hash = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 actual_fee = 7;</code>
     * @return int|string
     */
    public function getActualFee()
    {
        return $this->actual_fee;
    }

    /**
     * Generated from protobuf field <code>int64 actual_fee = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setActualFee($var)
    {
        GPBUtil::checkInt64($var);
        $this->actual_fee = $var;

        return $this;
    }

}

