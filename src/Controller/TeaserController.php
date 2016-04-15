<?php

namespace Schuelerbuero\Teasers\Controller;

use Schuelerbuero\Teasers\Model\Teaser;

/**
 * @Access(admin=true)
 */
class TeaserController
{
    public function indexAction()
    {
      $teasers = Teaser::findAll();
      
      return [
        '$view' => [
            'title' => 'Teaser',
            'name' => 'teasers:views/admin/index.php'
        ],
        'teasers' => $teasers
    ];
    }
}
