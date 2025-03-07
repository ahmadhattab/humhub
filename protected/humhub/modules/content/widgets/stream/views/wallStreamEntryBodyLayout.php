<?php

use humhub\modules\content\components\ContentActiveRecord;
use humhub\modules\topic\models\Topic;
use humhub\modules\topic\widgets\TopicLabel;
use humhub\modules\ui\view\components\View;

/* @var $this View */
/* @var $model ContentActiveRecord */
/* @var $header string */
/* @var $content string */
/* @var $footer string */
/* @var $topics Topic[] */

?>

<div class="panel panel-default wall_<?= $model->getUniqueId() ?>">
    <div class="panel-body">
        <div class="media wall-entry-header">
            <?= $header ?>
        </div>

        <div class="wall-entry-body">
            <div class="topic-label-list">
                <?php foreach ($topics as $topic) : ?>
                    <?= TopicLabel::forTopic($topic, $model->content->contentContainer->getPolymorphicRelation()) ?>
                <?php endforeach; ?>
            </div>

            <div class="wall-entry-content content" id="wall_content_<?= $model->getUniqueId() ?>">
                <?= $content ?>
            </div>

            <div class="wall-entry-footer">
                <?= $footer ?>
            </div>
        </div>
    </div>
</div>
