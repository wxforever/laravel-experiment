<?php

namespace App\Observers;

use App\Models\Topic;

use App\Handlers\SlugTranslateHandler;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class TopicObserver
{
    public function creating(Topic $topic)
    {
        //
    }

    public function updating(Topic $topic)
    {
        //
    }
    public function saving(Topic $topic)
    {
        $topic->body=clean($topic->body,'user_topic_body');
        //生成话题摘录
    	$topic->excerpt=make_excerpt($topic->body);
        //如slu字段无内容，用拼音进行翻译
        if(!$topic->slug){
            $topic->slug=app(SlugTranslateHandler::class)->translate($topic->title);
                        
        }
    }
}