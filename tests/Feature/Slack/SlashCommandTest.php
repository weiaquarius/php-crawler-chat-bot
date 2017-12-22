<?php
namespace Tests\Feature\Slack;

use Tests\TestCase;

class SlashCommandTest extends TestCase
{

    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function tearDown()
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }

    public function testReturn401WhenReplySlashCommandTwitch()
    {
        $data = [];

        $response = $this->post('/api/slack/slash-commands/twitch', $data);

        $response->assertStatus(401);
    }

    /**
     * @testdox 回傳指令清單
     */
    public function testReturn200WhenReplySlashCommandTwitch()
    {
        $token = config('services.slack.slash.twitch');
        if (empty($token)) {
            $this->markTestSkipped('none token');
        }
        $data = [
            'token' => $token,
            'team_id'=> '',
            'team_domain'=> '',
            'channel_id'=> '',
            'channel_name'=> '',
            'user_id'=> '',
            'user_name'=> '',
            'command'=> '',
            'text'=> '',
            'response_url'=> '',
        ];

        $response = $this->post('/api/slack/slash-commands/twitch', $data);

        $response->assertStatus(200);
    }
}
