<?php namespace Markbratanov\YoutubeFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

class YoutubeFieldType extends FieldType
{

    /**
     * The field type config.
     *
     * @var array
     */
    protected $config = [
        'height' => 560,
        'width' => 315,
        'autoplay'   => false,
        'fullscreen' => true
    ];

	/**
     * The input view.
     *
     * @var string
     */
    protected $inputView = 'markbratanov.field_type.youtube::input';
    /**
     * The filter view.
     *
     * @var string
     */
    protected $filterView = 'markbratanov.field_type.youtube::filter';


     /**
     * Ge the placeholder.
     *
     * @return string
     */
    public function getPlaceholder()
    {
        return $this->placeholder ?: 'Youtube URL here... ';
    }
    
}
