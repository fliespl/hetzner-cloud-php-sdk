<?php
/**
 * Created by PhpStorm.
 * User: lukaskammerling
 * Date: 11.07.18
 * Time: 18:31
 */

namespace Tests\tests;

use LKDev\HetznerCloud\Models\Datacenters\Datacenters;
use Tests\TestCase;

/**
 *
 */
class DatacentersTest extends TestCase
{
    /**
     * @var Datacenters
     */
    protected $datacenters;

    /**
     *
     */
    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->datacenters = new Datacenters();
    }

    /**
     *
     */
    public function testGet()
    {
        $datacenter = $this->datacenters->get(12345);
        $this->assertEquals($datacenter->id, 12345);
        $this->assertEquals($datacenter->name, 'fsn1-dc8');
    }

    /**
     *
     */
    public function testAll()
    {
        $datacenters = $this->datacenters->all();

        $this->assertEquals(count($datacenters), 3);
        $this->assertEquals($datacenters[0]->id, 1);
        $this->assertEquals($datacenters[0]->name, 'fsn1-dc8');
        $this->assertEquals($datacenters[1]->id, 2);
        $this->assertEquals($datacenters[1]->name, 'nbg1-dc3');
        $this->assertEquals($datacenters[2]->id, 3);
        $this->assertEquals($datacenters[2]->name, 'hel1-dc2');
    }
}
