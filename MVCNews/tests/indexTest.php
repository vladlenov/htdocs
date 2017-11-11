<?php

namespace tests;
use app\controllers\NewsController;
use app\repositories\NewsRepository;

class indexTest extends \PHPUnit_Framework_TestCase
{
    public function testIndex()
    {
        $controllerMock = $this->getMockBuilder(NewsController::class)
            ->disableOriginalConstructor()
            ->setMethods(['getNewsRepository', 'sendWebResponse'])->getMock();

        $newsRepositoryMock = $this->getMockBuilder(NewsRepository::class)
            ->setMethods(['getNews'])->getMock();
        $newsRepositoryMock->expects($this->once())->method('getNews')->willReturn([]);

        $controllerMock->setNewsRepository($newsRepositoryMock);
        $controllerMock->expects($this->once())->method('getNewsRepository')->willReturn($newsRepositoryMock);
        $controllerMock->expects($this->once())->method('sendWebResponse');

        $controllerMock->actionShow();
    }
}