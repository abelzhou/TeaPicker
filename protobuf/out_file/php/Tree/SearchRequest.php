<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Tree.Service.proto

namespace Tree;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tree.SearchRequest</code>
 */
class SearchRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string index = 1;</code>
     */
    private $index = '';
    /**
     * Generated from protobuf field <code>string context = 2;</code>
     */
    private $context = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $index
     *     @type string $context
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\TreeService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string index = 1;</code>
     * @return string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>string index = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkString($var, True);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string context = 2;</code>
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Generated from protobuf field <code>string context = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkString($var, True);
        $this->context = $var;

        return $this;
    }

}

