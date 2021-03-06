<?php
namespace YouTrack;

class EnumFieldTest extends \PHPUnit_Framework_TestCase
{

    private $filename = 'test/testdata/enum_bundle.xml';

    public function testGetOwnedFieldBundleElements()
    {
        $xml = simplexml_load_file($this->filename);
        $bundle = new EnumBundle($xml);

        /** @var EnumField[] $bundleElements */
        $bundleElements = $bundle->getValues();

        $this->assertCount(3, $bundleElements);

        $this->assertSame('V1', $bundleElements[0]->getName());
        $this->assertSame('V1', (string)$bundleElements[0]);
    }
}
