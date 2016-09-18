<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SlPostsFixture
 *
 */
class SlPostsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ID' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '投稿ID', 'autoIncrement' => true, 'precision' => null],
        'post_author' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '投稿者のユーザID', 'precision' => null, 'autoIncrement' => null],
        'submit_date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '提出日', 'precision' => null],
        'post_date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '公開日', 'precision' => null],
        'post_content' => ['type' => 'text', 'length' => 4294967295, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '本文', 'precision' => null],
        'post_title' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'タイトル', 'precision' => null],
        'post_description' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '説明文', 'precision' => null],
        'post_thumbnail' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'サムネイルのURI', 'precision' => null, 'fixed' => null],
        'post_status' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => 'publish', 'collate' => 'utf8_general_ci', 'comment' => '記事の状態
\'draft’：下書き
\'pending’：承認待ち
\'TBR’：要修正
\'pubish’：公開中', 'precision' => null, 'fixed' => null],
        'post_type' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => 'post', 'collate' => 'utf8_general_ci', 'comment' => '投稿種別
\'post’：投稿
\'attachment’：添付ファイル', 'precision' => null, 'fixed' => null],
        'post_mime_type' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '添付ファイルの時のMIMEタイプ', 'precision' => null, 'fixed' => null],
        'post_keyword' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'キーワード
‘キーワード１’, ‘キーワード２’, ‘キーワード３’', 'precision' => null],
        'post_pv' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => 'PV数', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'post_author' => ['type' => 'index', 'columns' => ['post_author'], 'length' => []],
            'type_status_date' => ['type' => 'index', 'columns' => ['post_type', 'post_status', 'post_date', 'ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'ID' => 1,
            'post_author' => 1,
            'submit_date' => '2016-09-07 15:02:24',
            'post_date' => '2016-09-07 15:02:24',
            'post_content' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'post_title' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'post_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'post_thumbnail' => 'Lorem ipsum dolor sit amet',
            'post_status' => 'Lorem ipsum dolor ',
            'post_type' => 'Lorem ipsum dolor ',
            'post_mime_type' => 'Lorem ipsum dolor sit amet',
            'post_keyword' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'post_pv' => 1
        ],
    ];
}
