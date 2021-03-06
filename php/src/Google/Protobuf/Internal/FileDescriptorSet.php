<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBWire;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\InputStream;

use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The protocol compiler can output a FileDescriptorSet containing the .proto
 * files it parses.
 * </pre>
 *
 * Protobuf type <code>google.protobuf.FileDescriptorSet</code>
 */
class FileDescriptorSet extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .google.protobuf.FileDescriptorProto file = 1;</code>
     */
    private $file;
    private $has_file = false;

    public function __construct() {
        \GPBMetadata\Google\Protobuf\Internal\Descriptor::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .google.protobuf.FileDescriptorProto file = 1;</code>
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * <code>repeated .google.protobuf.FileDescriptorProto file = 1;</code>
     */
    public function setFile(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Internal\FileDescriptorProto::class);
        $this->file = $var;
        $this->has_file = true;
    }

    public function hasFile()
    {
        return $this->has_file;
    }

}

