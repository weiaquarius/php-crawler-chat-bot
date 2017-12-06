<?php
namespace Tests\Feature\Services;

use App\Services\LineBotService;
use Tests\TestCase;

class LineBotServiceTest extends TestCase
{
    /** @var  LineBotService */
    private $lineBotService;

    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->lineBotService = app(LineBotService::class);
    }

    public function tearDown()
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }

    public function testPushMessage()
    {
        $response = $this->lineBotService->pushMessage('Test from laravel.');

        $this->assertEquals(200, $response->getHTTPStatus());
    }

    public function testPushMessageWithObject()
    {
        $target = $this->lineBotService->getImageCarouselColumnTemplateBuilder(
            'https://i.imgur.com/BlBH2HE.jpg',
            'https://github.com/Tai-ch0802/php-crawler-chat-bot',
            '自己玩的linebot'
        );
        $response = $this->lineBotService->pushMessage($target);

        $this->assertEquals(200, $response->getHTTPStatus());
    }
}
