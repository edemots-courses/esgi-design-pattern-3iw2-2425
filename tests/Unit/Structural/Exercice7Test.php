<?php

use EdemotsCourses\EsgiDesignPattern\Exercice7\Entity;
use EdemotsCourses\EsgiDesignPattern\Exercice7\FormatterInterface;
use EdemotsCourses\EsgiDesignPattern\Exercice7\JsonFormatter;
use EdemotsCourses\EsgiDesignPattern\Exercice7\Product;
use EdemotsCourses\EsgiDesignPattern\Exercice7\ProductDataRenderer;
use EdemotsCourses\EsgiDesignPattern\Exercice7\User;
use EdemotsCourses\EsgiDesignPattern\Exercice7\UserDataRenderer;
use EdemotsCourses\EsgiDesignPattern\Exercice7\XmlFormatter;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class Exercice7Test extends TestCase
{
    #[Test]
    #[DataProvider('userDataProvider')]
    public function itRenderUserWithFormatter(...$data)
    {
        $formatter = $this->createMock(FormatterInterface::class);
        $formatter->expects($this->once())
            ->method('format')
            ->with($data);

        $entityMock = $this->createMock(Entity::class);
        $entityMock->method('toArray')
            ->willReturn($data);

        $userRenderer = new UserDataRenderer($formatter);
        $userRenderer->render($entityMock);
    }

    #[Test]
    #[DataProvider('userDataProvider')]
    public function itFormatUserInJson(...$data)
    {
        $userRenderer = new UserDataRenderer(new JsonFormatter());
        $result = $userRenderer->render(new User(...$data));

        $this->assertEquals(json_encode($data, JSON_PRETTY_PRINT), $result);
    }

    #[Test]
    #[DataProvider('userDataProvider')]
    public function itFormatUserInXml(...$data)
    {
        $userRenderer = new UserDataRenderer(new XmlFormatter());
        $result = $userRenderer->render(new User(...$data));

        $this->assertEquals(<<<EOL
<?xml version="1.0"?>
<root><id>1</id><name>Toto</name><email>toto@example.com</email></root>

EOL, $result);
    }

    public static function userDataProvider()
    {
        return [
            ['id' => 1, 'name' => 'Toto', 'email' => 'toto@example.com'],
        ];
    }

    #[Test]
    #[DataProvider('productDataProvider')]
    public function itRenderProductWithFormatter(...$data)
    {
        $formatter = $this->createMock(FormatterInterface::class);
        $formatter->expects($this->once())
            ->method('format')
            ->with($data);

        $productMock = $this->createMock(Entity::class);
        $productMock->method('toArray')
            ->willReturn($data);

        $userRenderer = new ProductDataRenderer($formatter);
        $userRenderer->render($productMock);
    }


    #[Test]
    #[DataProvider('productDataProvider')]
    public function itFormatProductInJson(...$data)
    {
        $productRenderer = new ProductDataRenderer(new JsonFormatter());
        $result = $productRenderer->render(new Product(...$data));

        $this->assertEquals(json_encode($data, JSON_PRETTY_PRINT), $result);
    }

    #[Test]
    #[DataProvider('productDataProvider')]
    public function itFormatProductInXml(...$data)
    {
        $productRenderer = new ProductDataRenderer(new XmlFormatter());
        $result = $productRenderer->render(new Product(...$data));

        $this->assertEquals(<<<EOL
<?xml version="1.0"?>
<root><id>1</id><name>Super produit</name><price>3.33</price></root>

EOL, $result);
    }

    public static function productDataProvider()
    {
        return [
            ['id' => 1, 'name' => 'Super produit', 'price' => 3.33],
        ];
    }
}
