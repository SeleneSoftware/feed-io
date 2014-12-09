<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31/10/14
 * Time: 12:14
 */

namespace FeedIo\Rule;


use FeedIo\Feed\Item;

class LinkTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var \FeedIo\Rule\Link
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new Link();
    }

    public function testGetNodeName()
    {
        $this->assertEquals('link', $this->object->getNodeName());
    }

    public function testSet()
    {
        $item = new Item();

        $this->object->setProperty($item, new \DOMElement('link', 'http://localhost'));
        $this->assertEquals('http://localhost', $item->getLink());
    }
}
