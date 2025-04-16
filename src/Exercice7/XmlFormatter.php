<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice7;

use SimpleXMLElement;

class XmlFormatter implements FormatterInterface
{
    /**
     * [
     *      'name' => 'John Doe',
     *      'age' => 30,
     *      'posts' => [
     *          0 => [
     *             'title' => 'Hello World',
     *             'content' => 'This is my first post',
     *          ],
     *          1 => [
     *             'title' => 'Hello World',
     *             'content' => 'This is my first post',
     *          ]
     *      ],
     * ]
     *
     * <?xml version="1.0"?>
     * <root>
     *   <name>John Doe</name>
     *   <age>30</age>
     *   <posts>
     *     <item1>
     *        <title>Hello World</title>
     *       <content>This is my first post</content>
     *     </item1>
     *     <item2>
     *        <title>Hello World</title>
     *      <content>This is my first post</content>
     *     </item2>
     *   </posts>
     * </root>
     */
    public function format(array $data): string
    {
        $xml = new SimpleXMLElement('<root/>');
        $this->arrayToXml($data, $xml);
        return $xml->asXML();
    }

    protected function arrayToXml(array $data, SimpleXMLElement &$xml): void
    {
        foreach ($data as $key => $value) {
            if (is_numeric($key)) {
                // $key = 'item' . ($key + 1);
                $key = "item{($key + 1)}";
            }
            if (is_array($value)) {
                $xml = $xml->addChild($key);
                $this->arrayToXml($value, $xml);
            } else {
                $xml->addChild($key, htmlspecialchars($value));
            }
        }
    }
}
