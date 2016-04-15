<?php

namespace Schuelerbuero\Teasers\Model;

use Pagekit\Database\ORM\ModelTrait;

/**
 * @Entity(tableClass="@teasers_teasers")
 */
class Teaser
{
  use ModelTrait;

  /** @Column(type="integer") @Id */
  public $id;

  /** @BelongsTo(targetEntity="Pagekit\Site\Page", keyFrom="page_id") */
  public $page;

  /** @BelongsTo(targetEntity="Pagekit\User\Model\User", keyFrom="user_id")*/
  public $user;

  /** @Column(type="smallint") */
  public $status;

  /** @Column(type="datetime") */
  public $date;

  /** @Column(type="datetime") */
  public $modified;

  /** @Column(type="text") */
  public $content;


}
