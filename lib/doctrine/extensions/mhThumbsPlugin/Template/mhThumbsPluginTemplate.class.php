<?php
/*
 * This file is part of the mhThumbsPlugin package.
 */

/**
 * Cache class that stores cached content in APC.
 *
 * @package    mhThumbsPlugin
 * @subpackage
 * @author     Marshall Happ <marshallhapp@gmail.com>
 * @version    0.1
 */

// mhThumbsPlugin/lib/doctrine/extensions/mhThumbsPlugin/Template/mhThumbsPluginTemplate.class.php

class ThumbsUpDown extends Doctrine_Template
{
  public function setTableDefinition()
  {
    $this->hasColumn('vote_ups', 'integer', 0);
    $this->hasColumn('vote_downs', 'integer', 0);
  }

  public function setUp()
  {
  }

  public function renderVotes()
  {
    $votesHTML = '<span class="votes"><span class="voteupimage">'
      . '<img src="/mhThumbsPlugin/web/images/up.png">'
      . '</span><span class="voteups">'
      . $this->getInvoker()->getVoteUps()
      . '</span><span class="votedownimage">'
      . '<img src="/mhThumbsPlugin/web/images/down.png">'
      . '</span><span class="votedowns">'
      . $this->getInvoker()->getVoteDowns()
      . '</span></span>';

    return $votesHTML;
  }
}


?>