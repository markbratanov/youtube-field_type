<?php namespace Markbratanov\YoutubeFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

/**
 * Class YoutubeFieldTypePresenter
 *
 * @link          gitlink
 * @author        Mark Bratanov <markbratanov@gmail.com>
 * @package       Markbratanov\YoutubeFieldType
 */
class YoutubeFieldTypePresenter extends FieldTypePresenter
{


    /**
     * The decorated object.
     * This is for IDE support.
     *
     * @var TagsFieldType
     */
    protected $object;


    /**
     * Return the youtube URL or video ID into an embed.
     *
     * @param string $class
     * @return string
     */
    public function size($dimensions = array('height' => '560', 'width' => '315'))
    {

        if(!is_null($dimensions)) {
            return '<iframe width="{$dimensions['width']}" height="315" src="" frameborder="0" allowfullscreen></iframe>'

        }

        return null;
    }
}