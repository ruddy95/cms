<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SlPost Entity
 *
 * @property int $ID
 * @property int $post_author
 * @property \Cake\I18n\Time $submit_date
 * @property \Cake\I18n\Time $post_date
 * @property string $post_content
 * @property string $post_title
 * @property string $post_description
 * @property string $post_thumbnail
 * @property string $post_status
 * @property string $post_type
 * @property string $post_mime_type
 * @property string $post_keyword
 * @property int $post_pv
 */
class SlPost extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'ID' => false
    ];
}
