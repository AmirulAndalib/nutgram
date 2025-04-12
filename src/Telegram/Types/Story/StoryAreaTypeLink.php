<?php

namespace SergiX44\Nutgram\Telegram\Types\Story;

use SergiX44\Hydrator\Resolver\EnumOrScalar;
use SergiX44\Nutgram\Telegram\Properties\StoryAreaTypeType;
use SergiX44\Nutgram\Telegram\Types\BaseType;

/**
 * Describes a story area pointing to an HTTP or tg:// link. Currently, a story can have up to 3 link areas.
 * @see https://core.telegram.org/bots/api#storyareatypelink
 */
class StoryAreaTypeLink extends BaseType
{
    /**
     * Type of the area, always “link”
     */
    #[EnumOrScalar]
    public StoryAreaTypeType|string $type = StoryAreaTypeType::LINK;

    /**
     * HTTP or tg:// URL to be opened when the area is clicked
     */
    public string $url;
}
